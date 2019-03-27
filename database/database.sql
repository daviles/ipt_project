/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  daniel.aviles
 * Created: 26-mar-2019
 */
CREATE DATABASE IF NOT EXIST iptdb;

CREATE TABLE `users` (
  `id` int(10) auto_increment NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
CONSTRAINT pk_users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `sede` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
CONSTRAINT pk_sede(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `switches` (
  `id` int(10) UNSIGNED NOT NULL,
  `stack` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puertos` int(11) NOT NULL,
  `poe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
CONSTRAINT pk_switches PRIMARY KEY(id),
CONSTRAINT fk_idsede FOREIGN KEY (sede) REFERENCES sede(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `puertos` (
  `id_switch` int(10) UNSIGNED NOT NULL,
  `interface` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vlan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roseta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
CONSTRAINT fk_idswitch FOREIGN KEY (idswitch) REFERENCES switches(id) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;