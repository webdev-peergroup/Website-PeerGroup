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

-- Database: `peergroupid`

CREATE DATABASE
    IF NOT EXISTS `peergroupid` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;

USE `peergroupid`;

-- Table structure for table `artikel`

CREATE TABLE
    `artikel` (
        `id` int(11) NOT NULL,
        `judul` varchar(255) NOT NULL,
        `slug` varchar(255) NOT NULL,
        `kategori` enum(
            'self development',
            'karir',
            'jurusan'
        ) NOT NULL,
        `penulis` varchar(255) NOT NULL,
        `deskripsi` varchar(255) NOT NULL,
        `text` longtext NOT NULL,
        `cover` varchar(255) NOT NULL,
        `created_at` datetime NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Table structure for table `kegiatan`

CREATE TABLE
    `kegiatan` (
        `id` int(11) NOT NULL,
        `judul` varchar(255) NOT NULL,
        `slug` varchar(255) NOT NULL,
        `kategori` varchar(15) NOT NULL DEFAULT 'kegiatan ',
        `deskripsi` varchar(255) NOT NULL,
        `penulis` varchar(255) NOT NULL,
        `text` longtext NOT NULL,
        `cover` varchar(255) NOT NULL,
        `created_at` datetime NOT NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Table structure for table `user`

CREATE TABLE
    `user` (
        `id_user` int(11) NOT NULL,
        `username` varchar(20) NOT NULL,
        `password` varchar(20) NOT NULL,
        `nama` varchar(255) NOT NULL,
        `panggilan` varchar(15) NOT NULL,
        `gender` enum('pria', 'wanita') NOT NULL,
        `foto` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Indexes for table `artikel`

ALTER TABLE `artikel` ADD PRIMARY KEY (`id`);

-- Indexes for table `kegiatan`

ALTER TABLE `kegiatan` ADD PRIMARY KEY (`id`);

-- Indexes for table `user`

ALTER TABLE `user` ADD PRIMARY KEY (`id_user`);

-- AUTO_INCREMENT for table `artikel`

ALTER TABLE
    `artikel` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 27;

-- AUTO_INCREMENT for table `kegiatan`

ALTER TABLE
    `kegiatan` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

-- AUTO_INCREMENT for table `user`

ALTER TABLE
    `user` MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

COMMIT;