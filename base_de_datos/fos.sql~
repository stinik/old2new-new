-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2016 a las 17:16:43
-- Versión del servidor: 5.5.49-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `user_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(11) NOT NULL,
  `bandwidth` int(11) NOT NULL DEFAULT '0',
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3596 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-05-29 22:14:06', '2016-05-29 22:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blocked_ips`
--

CREATE TABLE IF NOT EXISTS `blocked_ips` (
`id` int(10) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blocked_user_agents`
--

CREATE TABLE IF NOT EXISTS `blocked_user_agents` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_user`
--

CREATE TABLE IF NOT EXISTS `category_user` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `category_user`
--

INSERT INTO `category_user` (`id`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 1, NULL, NULL),
(10, 10, 1, NULL, NULL),
(11, 11, 1, NULL, NULL),
(12, 12, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 14, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(10) unsigned NOT NULL,
  `ffmpeg_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/usr/local/bin/ffmpeg',
  `ffprobe_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/usr/local/bin/ffprobe',
  `webport` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '8000',
  `webip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hlsfolder` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'hl',
  `less_secure` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'FOS-Streaming'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `ffmpeg_path`, `ffprobe_path`, `webport`, `webip`, `hlsfolder`, `less_secure`, `created_at`, `updated_at`, `user_agent`) VALUES
(1, '/usr/local/bin/ffmpeg', '/usr/local/bin/ffprobe', '0000', '0.0.0.0', 'hl', 0, '2016-05-29 22:14:56', '2016-06-12 11:35:45', 'FOS-Streaming');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `streams`
--

CREATE TABLE IF NOT EXISTS `streams` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streamurl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streamurl2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streamurl3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `running` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `restream` tinyint(4) NOT NULL,
  `video_codec_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `audio_codec_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bitstreamfilter` tinyint(4) NOT NULL,
  `checker` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transcodes`
--

CREATE TABLE IF NOT EXISTS `transcodes` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `probesize` bigint(20) NOT NULL,
  `analyzeduration` bigint(20) NOT NULL,
  `video_codec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `audio_codec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preset_values` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aspect_ratio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_bitrate` bigint(20) NOT NULL,
  `audio_channel` int(11) NOT NULL,
  `audio_bitrate` bigint(20) NOT NULL,
  `fps` int(11) NOT NULL,
  `minrate` int(11) NOT NULL,
  `maxrate` int(11) NOT NULL,
  `bufsize` int(11) NOT NULL,
  `audio_sampling_rate` int(11) NOT NULL,
  `crf` int(11) NOT NULL,
  `threads` int(11) NOT NULL,
  `deinterlance` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `lastconnected_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` date NOT NULL,
  `last_stream` int(11) NOT NULL,
  `useragent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `max_connections` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`id`), ADD KEY `activity_user_id_index` (`user_id`), ADD KEY `activity_stream_id_index` (`stream_id`), ADD KEY `activity_date_end_index` (`date_end`), ADD KEY `activity_pid_index` (`pid`);

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indices de la tabla `blocked_ips`
--
ALTER TABLE `blocked_ips`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `blocked_ips_ip_unique` (`ip`);

--
-- Indices de la tabla `blocked_user_agents`
--
ALTER TABLE `blocked_user_agents`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `blocked_user_agents_name_unique` (`name`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category_user`
--
ALTER TABLE `category_user`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `streams`
--
ALTER TABLE `streams`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transcodes`
--
ALTER TABLE `transcodes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `transcodes_name_unique` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity`
--
ALTER TABLE `activity`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3596;
--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `blocked_ips`
--
ALTER TABLE `blocked_ips`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `blocked_user_agents`
--
ALTER TABLE `blocked_user_agents`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `category_user`
--
ALTER TABLE `category_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `streams`
--
ALTER TABLE `streams`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `transcodes`
--
ALTER TABLE `transcodes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
