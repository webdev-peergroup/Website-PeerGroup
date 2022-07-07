-- phpMyAdmin SQL Dump

-- version 5.1.1

-- https://www.phpmyadmin.net/

--

-- Host: localhost

-- Generation Time: Jul 02, 2022 at 06:03 AM

-- Server version: 10.4.21-MariaDB

-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

CREATE DATABASE
    IF NOT EXISTS `peergroupid` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;

USE `peergroupid`;

CREATE TABLE
    `quiz` (
        `id_title` int AUTO_INCREMENT PRIMARY KEY,
        `title` varchar(128) NOT NULL,
        `score_title` int DEFAULT 0
    ) ENGINE = InnoDB DEFAULT CHARSET = armscii8;

CREATE TABLE
    `soal` (
        `id_title` int(11) NOT NULL,
        `id_soal` int(11) NOT NULL,
        `soal` text NOT NULL,
        `score_soal` int DEFAULT 0,
        PRIMARY KEY(id_soal, id_title),
        FOREIGN KEY(id_title) REFERENCES quiz(id_title) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = armscii8;

CREATE TABLE
    `jwb` (
        `id_title` int(11) NOT NULL,
        `id_soal` int(11) NOT NULL,
        `id_jwb` int(11) NOT NULL,
        `jwb` text NOT NULL,
        `score_jwb` int(11) NOT NULL,
        PRIMARY KEY(id_title, id_soal, id_jwb),
        FOREIGN KEY(id_title) REFERENCES soal(id_title) ON DELETE CASCADE,
        FOREIGN KEY(id_soal) REFERENCES soal(id_soal) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = armscii8;

INSERT INTO quiz(title) VALUES('Quiz 1');

INSERT INTO soal(id_title, id_soal, soal) VALUES(1, 1, 'Soal 1');

INSERT INTO jwb VALUES(1, 1, 1, 'Pilihan 1', 0);

INSERT INTO jwb VALUES(1, 1, 2, 'Pilihan 2', 0);

INSERT INTO jwb VALUES(1, 1, 3, 'Pilihan 3', 1);

INSERT INTO jwb VALUES(1, 1, 4, 'Pilihan 4', 0);

INSERT INTO soal(id_title, id_soal, soal) VALUES(1, 2, 'Soal 2');

INSERT INTO jwb VALUES(1, 2, 1, 'Pilihan 1', 0);

INSERT INTO jwb VALUES(1, 2, 2, 'Pilihan 2', 1);

INSERT INTO jwb VALUES(1, 2, 3, 'Pilihan 3', 0);

INSERT INTO jwb VALUES(1, 2, 4, 'Pilihan 4', 0);

INSERT INTO quiz(title) VALUES('Quiz 2');

INSERT INTO soal(id_title, id_soal, soal) VALUES(2, 1, 'Soal 1');

INSERT INTO jwb VALUES(2, 1, 1, 'Pilihan 1', 0);

INSERT INTO jwb VALUES(2, 1, 2, 'Pilihan 2', 0);

INSERT INTO jwb VALUES(2, 1, 3, 'Pilihan 3', 1);

INSERT INTO jwb VALUES(2, 1, 4, 'Pilihan 4', 0);