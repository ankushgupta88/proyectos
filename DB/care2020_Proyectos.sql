-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 01:50 PM
-- Server version: 5.7.35
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care2020_Proyectos`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Colegio Los Alerces de Talagante', 0, NULL, NULL),
(2, 'Complejo Educacional Joaquín Edwards Bello', 0, NULL, NULL),
(3, 'Colegio Sagrado Corazón de Talagante', 0, NULL, NULL),
(4, 'Liceo San José U.R.', 0, NULL, NULL),
(5, 'Colegio Instituto Presidente Errázuriz', 0, NULL, NULL),
(6, 'Colegio San Alberto Hurtado-Fundación Belén Educa', 0, NULL, NULL),
(7, 'Colegio Alcántara de Talagante', 0, NULL, NULL),
(8, 'Colegio Carlos Oviedo Cavada-Fundación Belén Educa', 0, NULL, NULL),
(9, 'Colegio Lorenzo Sazié-Fundación Belén Educa', 0, NULL, NULL),
(10, 'Colegio Santa María de Lo Cañas', 0, NULL, NULL),
(11, 'Instituto Sagrado Corazón', 0, NULL, NULL),
(12, 'Colegio Polivalente Camilo Henríquez', 0, NULL, NULL),
(13, 'Colegio Cardenal Raúl Silva Henríquez', 0, NULL, NULL),
(14, 'Colegio Austral', 0, NULL, NULL),
(15, 'Colegio Padre Damián-Fundación Belén Educa', 0, NULL, NULL),
(16, 'Colegio La Maisonnette', 0, NULL, NULL),
(17, 'Colegio Cardenal Juan Francisco Fresno-Fundación Belén Educa', 0, NULL, NULL),
(18, 'Colegio Mckaya Academy', 0, NULL, NULL),
(19, 'Colegio Cardenal José María Caro', 0, NULL, NULL),
(20, 'Colegio Industrial Las Nieves- La Protectora de la Infancia ', 0, NULL, NULL),
(21, 'Colegio Alborada-Linares', 0, NULL, NULL),
(22, 'Colegio San Francisco de Asís- Fundación Belén Educa', 0, NULL, NULL),
(23, 'The International School La Serena', 0, NULL, NULL),
(24, 'Liceo Bicentenario Técnico de Rancagua ', 0, NULL, NULL),
(25, 'Colegio San Damián de Molokai', 0, NULL, NULL),
(26, 'The Giant School Antofagasta', 0, NULL, NULL),
(27, 'Liceo Técnico Clotario Blest Riffo', 0, NULL, NULL),
(28, 'Instituto Técnico Mabel Condemarín', 0, NULL, NULL),
(29, 'Colegio Crescente Errázuriz', 0, NULL, NULL),
(30, 'Colegio Arzobispo Manuel Vicuña', 0, NULL, NULL),
(31, 'Instituto superior de Comercio Profesor Fernando Pérez Becerra', 0, NULL, NULL),
(32, 'Liceo Comercial Molina Lavín', 0, NULL, NULL),
(33, 'Colegio Juan Luis Undurraga', 0, NULL, NULL),
(34, 'Liceo Bicentenario Politécnico Alemán Albert Einstein', 0, NULL, NULL),
(35, 'COLEGIO LOS FRESNOS', 0, NULL, NULL),
(36, 'Colegio Particular Blumenthal', 0, NULL, NULL),
(37, 'Complejo Bicentenario educacional Joaquin Edwars Bello', 0, NULL, NULL),
(38, 'Centro Educacional La Florida', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communes`
--

INSERT INTO `communes` (`id`, `name`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Macul', 0, NULL, NULL),
(2, 'Talagante', 0, NULL, NULL),
(3, 'Aysén', 0, NULL, NULL),
(4, 'Las Condes', 0, NULL, NULL),
(5, 'Pudahuel', 0, NULL, NULL),
(6, 'Maipú', 0, NULL, NULL),
(7, 'Santiago', 0, NULL, NULL),
(8, 'La Florida', 0, NULL, NULL),
(9, 'San Bernardo', 0, NULL, NULL),
(10, 'Puente Alto', 0, NULL, NULL),
(11, 'Valdivia', 0, NULL, NULL),
(12, 'La Unión', 0, NULL, NULL),
(13, 'Vitacura', 0, NULL, NULL),
(14, 'Llay Llay ', 0, NULL, NULL),
(15, 'La Pintana', 0, NULL, NULL),
(16, 'Linares', 0, NULL, NULL),
(17, 'Coquimbo ', 0, NULL, NULL),
(18, 'Rancagua', 0, NULL, NULL),
(19, 'Cerro Navia', 0, NULL, NULL),
(20, 'Antofagasta', 0, NULL, NULL),
(21, 'Pedro Aguirre Cerda', 0, NULL, NULL),
(22, 'Chillán', 0, NULL, NULL),
(23, 'San Joaquín', 0, NULL, NULL),
(24, 'Quinta Normal', 0, NULL, NULL),
(25, 'Quilicura', 0, NULL, NULL),
(26, 'Puerto Aysén', 0, NULL, NULL),
(27, 'Viña del Mar', 0, NULL, NULL),
(28, 'Cerrillos', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `letra`, `number`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'Iº', 'A', 1, 0, NULL, NULL),
(2, 'Iº', 'B', 1, 0, NULL, NULL),
(3, 'Iº', 'C', 1, 0, NULL, NULL),
(4, 'IIº', 'A', 2, 0, NULL, NULL),
(5, 'IIº', 'B', 2, 0, NULL, NULL),
(6, 'IIº', 'C', 2, 0, NULL, NULL),
(7, 'IIIº', 'A', 3, 0, NULL, NULL),
(8, 'IIIº', 'B', 3, 0, NULL, NULL),
(9, 'IIIº', 'C', 3, 0, NULL, NULL),
(10, 'IVº', 'A', 4, 0, NULL, NULL),
(11, 'IVº', 'B', 4, 0, NULL, NULL),
(12, 'IVº', 'C', 4, 0, NULL, NULL),
(13, 'IVº', 'D', 4, 0, NULL, NULL),
(14, 'Iº', 'D', 1, 0, NULL, NULL),
(15, 'IIIº', 'D', 3, 0, NULL, NULL),
(16, 'IIº', 'D', 2, 0, NULL, NULL),
(17, 'IIº', 'E', 2, 0, NULL, NULL),
(18, 'Iº', 'E', 1, 0, NULL, NULL),
(19, 'IVº', 'E', 4, 0, NULL, NULL),
(20, 'IIIº', 'E', 3, 0, NULL, NULL),
(21, 'I°', 'F', 1, 0, NULL, NULL),
(22, 'Economía 1', '', 0, 0, NULL, NULL),
(23, 'Economía 2', '', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_16_052732_create_student_table', 2),
(5, '2021_07_16_060534_create_student_table', 3),
(6, '2021_07_16_112538_create_course_table', 4),
(7, '2021_07_17_050814_create_courses_table', 5),
(8, '2021_07_17_052959_create_students_table', 6),
(9, '2021_07_17_122538_create_communes_table', 7),
(10, '2021_07_17_123723_add_communes_table', 8),
(11, '2021_07_17_124341_create_colleges_table', 9),
(12, '2021_07_17_125734_create_communes_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `registration_date` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL COMMENT '0 = admin,1= tutor,2 =student	',
  `pseudonym` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=active, 1=enrolled,2 =completed,3=inactive	',
  `grade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `name`, `surname`, `password`, `mail`, `commune`, `college`, `course`, `age`, `registration_date`, `role`, `pseudonym`, `status`, `grade`, `deleted`, `created_at`, `updated_at`) VALUES
(2314, '21.556.167-4', 'antonella', 'santana', 'caiserbonito', 'antonela.santana17@liceosanjoseur.cl', 'Aysén', 'Liceo San José U.R.', 'IIº A', 17, '2021-06-02 12:21:47', 0, 'antonella', 1, NULL, 0, NULL, NULL),
(2315, '22.405.406-8', 'Rayen Escarlett', 'Márquez González', 'RayenMarquez', 'rayenmarquez@liceosanjoseur.cl', 'Aysén', 'Liceo San José U.R.', 'Iº A', 14, '2021-06-02 15:58:42', 0, 'Rayen', 1, NULL, 0, NULL, NULL),
(2316, '22.177.803-0', 'Leandro  ', 'Veliz Navarro ', 'Antonio2006', 'leandro.veliz19@liceosanjoseur.cl', 'Aysén', 'Liceo San José U.R.', 'Iº A', 14, '2021-06-03 17:21:15', 0, 'Leandro ', 1, NULL, 0, NULL, NULL),
(2317, '22.146.424-9', 'brayan alejandro', 'mansilla obando ', 'eyJpdiI6ImZ4Wk9lbVdUZ1duYVBnZklnQmVuSlE9PSIsInZhbHVlIjoiZnFEc2Y4Umhtb2VUK0JKQ0JMK3k5QT09IiwibWFjIjoiZmZiZGIxYTQ3NDIyNTViMDE3NDYxOGRiNmUwOGY1MzM1Y2Y4YzI1NmY2ZmQ1ZmYwODQ3MjY2MTg2OGJlYzQ3YSJ9', 'brayanmansilla56@gmail.com', 'Aysén', 'Liceo San José U.R.', 'IIº C', 14, '2021-06-03 22:24:46', 2, 'brayan mansilla ', 1, '4', 0, NULL, NULL),
(2318, '21.691.955-6', 'Celeste ', 'Garcés', 'eyJpdiI6ImZ4Wk9lbVdUZ1duYVBnZklnQmVuSlE9PSIsInZhbHVlIjoiZnFEc2Y4Umhtb2VUK0JKQ0JMK3k5QT09IiwibWFjIjoiZmZiZGIxYTQ3NDIyNTViMDE3NDYxOGRiNmUwOGY1MzM1Y2Y4YzI1NmY2ZmQ1ZmYwODQ3MjY2MTg2OGJlYzQ3YSJ9', 'celeste.garces21@liceosanjoseur.cl', 'Aysén', 'Liceo San José U.R.', 'IIIº B', 16, '2021-06-04 17:18:03', 0, 'Blaquitip27', 1, NULL, 0, NULL, NULL),
(2319, 'test', 'test', 'test', 'eyJpdiI6ImQzUWpTRWFESTNPNEhLQlkxZHduUkE9PSIsInZhbHVlIjoiTkUrME9OK3FhRk9lbHMrRnlpS0JrUT09IiwibWFjIjoiN2ZmNWJmZTlhZjc3ODEyMjdjZDY2MGIxZjQ2Y2NiODdlNWJiYmJjNzM3ZGQ2MDI4ZjcwOTY5MDRmYzJlZjg0MSJ9', 'student@gmail.com', '1', '1', '1', 1, NULL, 2, 'ssss', 0, '1', 0, '2021-07-19 09:17:22', '2021-07-19 09:17:22'),
(2320, 'user', 'User', 'last', 'eyJpdiI6ImZ4Wk9lbVdUZ1duYVBnZklnQmVuSlE9PSIsInZhbHVlIjoiZnFEc2Y4Umhtb2VUK0JKQ0JMK3k5QT09IiwibWFjIjoiZmZiZGIxYTQ3NDIyNTViMDE3NDYxOGRiNmUwOGY1MzM1Y2Y4YzI1NmY2ZmQ1ZmYwODQ3MjY2MTg2OGJlYzQ3YSJ9', 'user@gmail.com', '5', '7', '10', 10, '2021-07-19 10:08:56', 2, 'Test', 0, '5', 0, '2021-07-19 10:08:56', '2021-07-19 10:08:56'),
(2321, 'teshgh', 'gfhfg', 'tu', 'eyJpdiI6IktBUnZTck1oNkI1ajNlcTIrWVNTbVE9PSIsInZhbHVlIjoiSlptYTdHUUZ5bzhPSmVoN3U1aGozQT09IiwibWFjIjoiYjM1YmIwNTM4ZDI3NTQ4NmZmYmJiYWZmMmFkZTAxNTUxNGEzYmIyYTgwOThkN2NmNDA3NjQ3MjczYzNkNzgyMSJ9', 'testing@gmail.com', '1', '1', '1', 1, '2021-07-20 10:36:14', 2, 'dgd', 0, '7', 0, '2021-07-20 10:36:14', '2021-07-20 10:36:14'),
(2323, 'laravel', 'test', 'test', 'eyJpdiI6IlI3eWc2eTBLdnRCUDRXeFRuWG9NQ3c9PSIsInZhbHVlIjoiZFpab01MWGZERTM4dVJIWjl3RUJ0Zz09IiwibWFjIjoiNWRjYjBiYTgzZjczMDdkNTBiMWYzNjc2ZDVjYzJmMTk1MTJjODIxZjdjMzg2ZGMwMWFmZmYzY2E1MzJmN2IzYSJ9', 'laraveltest@gmail.com', '1', '1', '1', 1, '2021-07-20 10:49:24', 2, 'gfjfg', 0, '8', 0, '2021-07-20 10:49:24', '2021-07-20 10:49:24'),
(2324, 'pritest', 'priyanka', 'rajpoot', 'eyJpdiI6Ino5Kzh5SGJEK0RITWZOSUlPNDFwK2c9PSIsInZhbHVlIjoic1NKMThhR0pwRG02ZGJwZEJISHo3TXNSYjJiWWg1cjdhcENnTy9hZ3EvQT0iLCJtYWMiOiIzZjVjZGVmZDdiMmQ5ZjQzNGE2OWUzYzBiODFkZjM1YWRhMWYyOGMzODUwMjFjODJjZDE4ZmZkMzg1MjQwZDY1In0=', 'priyanka@yopmail.com', '14', '15', '15', 15, '2021-07-22 05:38:22', 3, 'newww', 0, NULL, 0, '2021-07-22 05:38:22', '2021-07-22 05:38:22'),
(2325, 'studebtt', 'studpriyanka', 'student', 'eyJpdiI6Ikh0STVJSDRDRjNDNVkxVWZmNjFDYWc9PSIsInZhbHVlIjoiMkFRM1ZBRnRrQldJVlliQmhzQWt5QT09IiwibWFjIjoiNWQ2YmIzMGM4NmZmMjA0NjMyMDMzZDY2NThkM2QxZDQ5ZGRhZDZiMTgzMDFkMmE2NWRlYzA4MjYzNThiYWI4YiJ9', 'student@yopmail.com', '13', '10', '4', 4, '2021-07-22 11:24:44', 2, 'hkka', 0, '3', 0, '2021-07-22 11:24:44', '2021-07-22 11:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_mail_unique` (`mail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2326;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
