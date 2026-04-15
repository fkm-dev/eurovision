<?php

declare(strict_types=1);

require __DIR__ . '/voting_store.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: live-voting.php');
    exit;
}

$contestantId = (int) ($_POST['contestant_id'] ?? 0);
$voterName = trim((string) ($_POST['voter_name'] ?? ''));

if ($contestantId <= 0) {
    header('Location: live-voting.php?status=invalid');
    exit;
}

$pdo = votingPdo();
$stmt = $pdo->prepare('SELECT COUNT(*) FROM contestants WHERE id = :id');
$stmt->execute(['id' => $contestantId]);

if ((int) $stmt->fetchColumn() === 0) {
    header('Location: live-voting.php?status=invalid');
    exit;
}

$insert = $pdo->prepare('INSERT INTO votes (contestant_id, voter_name) VALUES (:contestant_id, :voter_name)');
$insert->execute([
    'contestant_id' => $contestantId,
    'voter_name' => $voterName !== '' ? mb_substr($voterName, 0, 80) : null,
]);

header('Location: live-voting.php?status=voted');
exit;
