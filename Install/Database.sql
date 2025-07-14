CREATE TABLE `bionica_exercises` (
    `key_exercise` timestamp NOT NULL,
    `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `mark` tinyint unsigned NOT NULL DEFAULT '0',
    `type` tinyint unsigned NOT NULL,
    `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`key_exercise`)
);