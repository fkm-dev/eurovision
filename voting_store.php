<?php

declare(strict_types=1);

function votingPdo(): PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $dbDir = __DIR__ . '/data';
    if (!is_dir($dbDir)) {
        mkdir($dbDir, 0775, true);
    }

    $pdo = new PDO('sqlite:' . $dbDir . '/live_voting.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $pdo->exec(
        'CREATE TABLE IF NOT EXISTS contestants (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            lfd_nr INTEGER NOT NULL,
            smule_name TEXT NOT NULL,
            smule_link TEXT NOT NULL,
            titel TEXT NOT NULL,
            created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
        )'
    );

    $pdo->exec(
        'CREATE TABLE IF NOT EXISTS votes (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            contestant_id INTEGER NOT NULL,
            voter_name TEXT,
            created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (contestant_id) REFERENCES contestants(id) ON DELETE CASCADE
        )'
    );

    return $pdo;
}

function contestantsWithVotes(PDO $pdo): array
{
    $sql = 'SELECT c.id, c.lfd_nr, c.smule_name, c.smule_link, c.titel, COUNT(v.id) AS vote_count
            FROM contestants c
            LEFT JOIN votes v ON c.id = v.contestant_id
            GROUP BY c.id
            ORDER BY c.lfd_nr ASC, c.id ASC';

    return $pdo->query($sql)->fetchAll();
}
