-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 juin 2023 à 11:51
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `answered_tests`
--

CREATE TABLE `answered_tests` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `submitted` tinyint(1) NOT NULL DEFAULT 0,
  `submitted_date` datetime DEFAULT NULL,
  `marked` tinyint(1) NOT NULL DEFAULT 0,
  `marked_by` varchar(60) DEFAULT NULL,
  `marked_date` datetime DEFAULT NULL,
  `score` tinyint(3) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `answered_tests`
--

INSERT INTO `answered_tests` (`id`, `user_id`, `test_id`, `submitted`, `submitted_date`, `marked`, `marked_by`, `marked_date`, `score`, `date`) VALUES
(2, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 1, '2023-05-30 23:55:45', 1, 'mohammed.as', '2023-05-31 01:52:11', 0, '2023-05-29 20:55:52'),
(3, 'said.boussif', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 1, '2023-06-01 01:00:32', 1, 'mohammed.as', '2023-06-01 02:08:28', 100, '2023-06-01 00:48:46'),
(4, 'drisse.raiss', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 1, '2023-06-01 22:47:39', 1, 'mohammed.as', '2023-06-01 22:51:11', 67, '2023-06-01 22:46:34'),
(5, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 1, '2023-06-02 00:14:24', 1, 'saadaoui.ayoub', '2023-06-14 01:01:15', 60, '2023-06-02 00:11:33'),
(6, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 1, '2023-06-02 00:16:24', 1, 'mohammed.as', '2023-06-02 01:05:43', 100, '2023-06-02 00:15:18'),
(7, 'said.boussif', '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', 1, '2023-06-02 13:29:54', 1, 'mohammed.as', '2023-06-02 13:33:01', 50, '2023-06-02 13:29:26'),
(8, 'drisse.raiss', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 0, '0000-00-00 00:00:00', 0, NULL, NULL, 0, '2023-06-06 03:37:36'),
(9, 'jamal.elkahia', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 1, '2023-06-06 16:28:45', 1, 'mohammed.as', '2023-06-06 16:30:55', 67, '2023-06-06 16:27:32'),
(10, 'drisse.raiss', 'IaSMs1fIdgJOyGqQcZe09P3LSJDSl7wNhdRM2uj1Xsc0N5xZIlWuN2K8v8P3', 1, '2023-06-13 00:11:24', 1, 'mohammed.as', '2023-06-13 00:14:49', 100, '2023-06-13 00:09:48'),
(11, 'student.stu', 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 1, '2023-06-14 01:48:27', 1, 'teacher.tea', '2023-06-14 01:51:29', 67, '2023-06-14 01:47:48');

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `answer_mark` tinyint(1) NOT NULL DEFAULT 0,
  `answer_comment` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `test_id`, `question_id`, `answer`, `date`, `answer_mark`, `answer_comment`) VALUES
(1, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 2, '4', '2023-05-28 13:57:42', 1, ''),
(2, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 3, '6', '2023-05-28 13:57:42', 1, ''),
(3, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 4, 'Rapport  de projret', '2023-05-28 13:57:42', 1, ''),
(4, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 5, '-1', '2023-05-28 13:57:42', 1, ''),
(5, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 6, '10', '2023-05-28 13:57:42', 1, ''),
(6, 'asmae.sami', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 9, 'B', '2023-05-28 15:16:28', 2, ''),
(7, 'said.boussif', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 10, '4', '2023-06-01 00:48:46', 1, ''),
(8, 'said.boussif', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 11, '6', '2023-06-01 00:48:46', 1, ''),
(9, 'said.boussif', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 14, 'B', '2023-06-01 00:48:55', 1, ''),
(10, 'drisse.raiss', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 10, '4', '2023-06-01 22:46:34', 1, ''),
(11, 'drisse.raiss', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 11, '6', '2023-06-01 22:46:34', 1, ''),
(12, 'drisse.raiss', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 14, 'A', '2023-06-01 22:47:14', 2, ''),
(13, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 15, 'B', '2023-06-02 00:11:33', 1, ''),
(14, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 16, 'B', '2023-06-02 00:11:33', 2, ''),
(15, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 17, 'no', '2023-06-02 00:13:23', 1, ''),
(16, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 18, 'it produces rain', '2023-06-02 00:13:23', 1, ''),
(17, 'said.boussif', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 19, 'no', '2023-06-02 00:13:44', 2, ''),
(18, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 15, 'B', '2023-06-02 00:15:18', 1, ''),
(19, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 16, 'C', '2023-06-02 00:15:18', 1, ''),
(20, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 17, 'no', '2023-06-02 00:15:35', 1, ''),
(21, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 18, 'it produces rain', '2023-06-02 00:15:35', 1, ''),
(22, 'drisse.raiss', 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 19, 'YES', '2023-06-02 00:16:05', 1, ''),
(23, 'said.boussif', '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', 20, 'A', '2023-06-02 13:29:26', 1, ''),
(24, 'said.boussif', '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', 21, '2', '2023-06-02 13:29:26', 2, ''),
(25, 'drisse.raiss', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 2, '2', '2023-06-06 03:37:36', 0, ''),
(26, 'drisse.raiss', 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 3, '', '2023-06-06 03:37:36', 0, ''),
(27, 'jamal.elkahia', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 10, '4', '2023-06-06 16:27:32', 1, ''),
(28, 'jamal.elkahia', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 11, '5', '2023-06-06 16:27:32', 2, ''),
(29, 'jamal.elkahia', 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 14, 'B', '2023-06-06 16:28:18', 1, ''),
(30, 'drisse.raiss', 'IaSMs1fIdgJOyGqQcZe09P3LSJDSl7wNhdRM2uj1Xsc0N5xZIlWuN2K8v8P3', 22, 'A', '2023-06-13 00:09:48', 1, ''),
(31, 'student.stu', 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 23, 'C', '2023-06-14 01:47:48', 1, ''),
(32, 'student.stu', 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 24, '11', '2023-06-14 01:47:48', 1, ''),
(33, 'student.stu', 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 25, 'COMMIT', '2023-06-14 01:48:17', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `class`, `user_id`, `school_id`, `class_id`, `date`) VALUES
(7, 'Dev201', 'laila.alami', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', '2023-05-19 00:09:03'),
(8, 'Dev202', 'mohammed.as', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', '2023-05-31 22:39:59'),
(10, 'Dev204', 'laila.alami', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', '2023-06-02 13:01:26'),
(11, 'testClass', 'mohammed.as', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'aJlta7HKReccbI6yWDWtwflCX8sXmEmKqkWNObyJW97fViDaGAUKlu6YRr16', '2023-06-12 23:58:03');

-- --------------------------------------------------------

--
-- Structure de la table `class_students`
--

CREATE TABLE `class_students` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `school_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `class_students`
--

INSERT INTO `class_students` (`id`, `user_id`, `class_id`, `disabled`, `date`, `school_id`) VALUES
(3, 'asmae.sami', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 0, '2023-05-20 23:51:43', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(4, 'drisse.raiss', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 0, '2023-05-27 20:53:25', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(5, 'said.boussif', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 0, '2023-05-31 23:02:46', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(6, 'drisse.raiss', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 0, '2023-05-31 23:02:56', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(7, 'said.boussif', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', 0, '2023-06-02 13:15:54', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(8, 'houda.faraji', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', 0, '2023-06-02 23:38:44', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(9, 'jamal.elkahia', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 0, '2023-06-06 16:26:31', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(10, 'drisse.raiss', 'aJlta7HKReccbI6yWDWtwflCX8sXmEmKqkWNObyJW97fViDaGAUKlu6YRr16', 0, '2023-06-12 23:58:19', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(11, 'student.stu', '1Mf4ztEm0tHEyfnmdVM2DVMzoPYBqEvFhrBFI3DGj7eazLSiPswjvqFgbXj9', 0, '2023-06-14 01:18:54', 'P0wIgxOOjPaZInzaybUOebOmoBvp08YkhaJ8LhivYQnpbIqGpfCSxYFxeuf8');

-- --------------------------------------------------------

--
-- Structure de la table `class_teachers`
--

CREATE TABLE `class_teachers` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `school_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `class_teachers`
--

INSERT INTO `class_teachers` (`id`, `user_id`, `class_id`, `disabled`, `date`, `school_id`) VALUES
(8, 'mohammed.as', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 1, '2023-05-20 00:50:17', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(9, 'mohammed.as', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 0, '2023-05-20 00:50:49', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(10, 'mohammed.as', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 0, '2023-05-31 22:59:16', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(11, 'mohammed.as', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', 0, '2023-06-02 13:04:33', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(12, 'meryam.fathi', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', 0, '2023-06-05 18:15:10', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(13, 'mohammed.as', 'aJlta7HKReccbI6yWDWtwflCX8sXmEmKqkWNObyJW97fViDaGAUKlu6YRr16', 0, '2023-06-12 23:59:24', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G'),
(14, 'teacher.tea', '1Mf4ztEm0tHEyfnmdVM2DVMzoPYBqEvFhrBFI3DGj7eazLSiPswjvqFgbXj9', 0, '2023-06-14 01:16:59', 'P0wIgxOOjPaZInzaybUOebOmoBvp08YkhaJ8LhivYQnpbIqGpfCSxYFxeuf8');

-- --------------------------------------------------------

--
-- Structure de la table `class_tests`
--

CREATE TABLE `class_tests` (
  `id` int(11) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `disabled` tinyint(1) NOT NULL,
  `test` varchar(100) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `schools`
--

INSERT INTO `schools` (`id`, `school`, `school_id`, `date`, `user_id`) VALUES
(2, 'ISTA NTIC', 'fZzkmfxBPieLwrxneQojDgIVVc2dXayNkwhwEtMNt78xdJzmj25mXPoLL3ei', '2023-05-18 23:11:14', 'laila.alami'),
(11, 'ISTA Hay Nahda', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', '2023-05-18 23:11:20', 'laila.alami'),
(12, 'Ista', 'mpoOjEcqpawLlT5A77kxmrQP4WdsgFcMkLCgs4cFSFVRAmdnswklDR587OT8', '2023-05-26 10:35:36', 'laila.alami');

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `class_id` varchar(60) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `test` varchar(100) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `date` datetime NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 1,
  `editable` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`id`, `test_id`, `class_id`, `school_id`, `user_id`, `test`, `description`, `date`, `disabled`, `editable`) VALUES
(1, '42KktSOYWnTb9ROEQNbsoVtoCblFMDNEyP3FvJ8z0fqaJdRTUv0kZ8RzZLFz', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'laila.alami', 'first test1', 'this is first test\r\n', '2023-05-25 01:09:51', 0, 0),
(3, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'laila.alami', 'test-2', 'test-2', '2023-05-25 23:23:42', 0, 0),
(4, '6Xyu4WwKRJUeR0jLNyig6EPjdUKgaxUWQ8RFZ2DwoE6smSVh88AoDNfJQv2H', 'HHtKJd5REFzLS6mrICvKT9A0WWuwd6Zryb03zfPItR3gJfr3iXRoGaieA8HZ', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'laila.alami', 'a second test', '===========', '2023-05-27 17:01:41', 0, 0),
(6, 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'mohammed.as', 'Framework laravel', 'Développement back-end', '2023-05-31 23:39:32', 0, 0),
(7, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'o2so77xYUK92IkuvK1qRbZqEuQiU4ncTyMkOY6SBiO3SIjbbcvImWk2xvwGi', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'mohammed.as', 'Math Test', 'a test in math', '2023-06-01 23:54:48', 0, 0),
(8, '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', 'q5ldKytCjtBDPQaDX2ekdWYxKmqe3lQGeVqQiVjxoIOrLoXrKpzeEEZIRpZb', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'mohammed.as', 'React', 'Controle 2', '2023-06-02 13:17:32', 0, 0),
(9, 'IaSMs1fIdgJOyGqQcZe09P3LSJDSl7wNhdRM2uj1Xsc0N5xZIlWuN2K8v8P3', 'aJlta7HKReccbI6yWDWtwflCX8sXmEmKqkWNObyJW97fViDaGAUKlu6YRr16', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'mohammed.as', 'Test-3', '', '2023-06-12 23:59:52', 0, 0),
(10, 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', '1Mf4ztEm0tHEyfnmdVM2DVMzoPYBqEvFhrBFI3DGj7eazLSiPswjvqFgbXj9', 'P0wIgxOOjPaZInzaybUOebOmoBvp08YkhaJ8LhivYQnpbIqGpfCSxYFxeuf8', 'teacher.tea', 'NewTest', 'Test\r\n', '2023-06-14 01:20:47', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `test_questions`
--

CREATE TABLE `test_questions` (
  `id` int(11) NOT NULL,
  `test_id` varchar(60) NOT NULL,
  `question` text NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `question_type` varchar(10) NOT NULL,
  `correct_answer` text DEFAULT NULL,
  `choices` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `test_questions`
--

INSERT INTO `test_questions` (`id`, `test_id`, `question`, `comment`, `image`, `question_type`, `correct_answer`, `choices`, `date`, `user_id`) VALUES
(2, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', '2+2 ?', '', NULL, 'subjective', NULL, NULL, '2023-05-26 02:27:45', 'laila.alami'),
(3, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', '3+3 ?', '2 Point', NULL, 'subjective', NULL, NULL, '2023-05-26 02:54:34', 'laila.alami'),
(4, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', 'What\'s this ???????\r\n', '', 'uploads/1685091552_Blue Green Modern Medical Examination Flyer (6).png', 'subjective', NULL, NULL, '2023-05-26 10:59:12', 'laila.alami'),
(5, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', '1-2\r\n', '', NULL, 'objective', '-1', NULL, '2023-05-26 13:08:38', 'laila.alami'),
(6, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', '5+5', '', NULL, 'objective', '10', NULL, '2023-05-26 13:21:29', 'laila.alami'),
(9, 'nJMyyfJr23Ibzf2VTbTUSTvnFXnicQuy1KRpdrZkfbTsWmXoiqsrcJJc9o7l', '9*2', '', NULL, 'multiple', 'B', '{\"A\":\"14\",\"B\":\"18\"}', '2023-05-27 19:57:50', 'laila.alami'),
(10, 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 'what\'s 2+2', '1 point', NULL, 'objective', '4', NULL, '2023-05-31 23:48:59', 'mohammed.as'),
(11, 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', 'Calculate the multiplication', '1 point', 'uploads/1685569986_téléchargement (1).png', 'subjective', NULL, NULL, '2023-05-31 23:53:06', 'mohammed.as'),
(14, 'P7N4IXovWzGr1MTrJ8Iz2VapxoNCkmBeKcj6Yj87pWHSkYGPqEluzK5pkl9t', '5*(2+3)', '', NULL, 'multiple', 'B', '{\"A\":\"13\",\"B\":\"25\"}', '2023-05-31 23:59:52', 'mohammed.as'),
(15, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'What\'s 5*6', '', NULL, 'multiple', 'B', '{\"A\":\"11\",\"B\":\"30\"}', '2023-06-01 23:56:43', 'mohammed.as'),
(16, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'What\'s 30*20', '', NULL, 'multiple', 'C', '{\"A\":\"100\",\"B\":\"300\",\"C\":\"600\"}', '2023-06-01 23:57:57', 'mohammed.as'),
(17, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'Can chikens fly ?', '', NULL, 'objective', 'no', NULL, '2023-06-01 23:59:29', 'mohammed.as'),
(18, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'Explaine the rain cycle ', '', NULL, 'subjective', NULL, NULL, '2023-06-02 00:00:50', 'mohammed.as'),
(19, 'uqFspZr3AVf8XXn1QMF7VTU7T2iWc8CqlQcZPZx11xrIfcdYaRprd0hRJJ3e', 'is  the sun a star?', '', NULL, 'objective', 'yes', NULL, '2023-06-02 00:01:49', 'mohammed.as'),
(20, '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', '5+5', '', NULL, 'multiple', 'A', '{\"A\":\"10\",\"B\":\"12\",\"C\":\"13\"}', '2023-06-02 13:21:36', 'mohammed.as'),
(21, '9B8DzMtgv10i4n0IfGAaMzCyjEclD8gq6aKeWDd5TsYbW5cbwIFgtjCeGi4C', '2-1', '', NULL, 'objective', '1', NULL, '2023-06-02 13:22:48', 'mohammed.as'),
(22, 'IaSMs1fIdgJOyGqQcZe09P3LSJDSl7wNhdRM2uj1Xsc0N5xZIlWuN2K8v8P3', '1+1', '', NULL, 'multiple', 'A', '{\"A\":\"2\",\"B\":\"1\"}', '2023-06-13 00:00:22', 'mohammed.as'),
(23, 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 'Comment annuler une transaction ?', '', NULL, 'multiple', 'C', '{\"A\":\"LEAVE TRANSACTION\",\"B\":\"COMMIT\",\"C\":\"ROLLBACK\"}', '2023-06-14 01:24:21', 'teacher.tea'),
(24, 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 'Que retourne le code de la ligne numéro 9', '', 'uploads/1686699788_1.png', 'objective', '11', NULL, '2023-06-14 01:43:08', 'teacher.tea'),
(25, 'VUIXmWyJYz08UmlyHZz8pRlzgoa7xhhI704WCTMlq414ZVwRiZU6ToWRyPTU', 'Comment valider une transaction ?', '', NULL, 'subjective', NULL, NULL, '2023-06-14 01:43:35', 'teacher.tea');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `school_id` varchar(60) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date`, `user_id`, `gender`, `school_id`, `rank`, `password`, `image`) VALUES
(5, 'Laila', 'Alami', 'laila@gmail.com', '2023-05-14 02:20:52', 'laila.alami', 'female', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'super_admin', '$2y$10$mf75yQnRI56vB1aI5stAUuA4WsS3kYAwXFEOB8uqnIugwETR/2OMq', 'uploads/images.jfif'),
(6, 'Meryam', 'Fathi', 'meryam@fathi.com', '2023-05-14 02:24:10', 'meryam.fathi', 'female', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'teacher', '$2y$10$ODt.p7dkJ.effOGSCj0Vcu7PHpxAGg45dHYXHI/rGEwp6XXlj1J9y', ''),
(8, 'Saida', 'Ahlami', 'saadaouiayoub.08@gmail.com', '2023-05-16 17:34:36', 'saida.ahlami', 'female', 'fZzkmfxBPieLwrxneQojDgIVVc2dXayNkwhwEtMNt78xdJzmj25mXPoLL3ei', 'super_admin', '$2y$10$B9dmnckvw.A45NcxL42SBemQhDnqlOEmC5C4iVq.dN0154S2tWF5C', ''),
(9, 'Ayoub', 'Saadaoui', 'ayoub@gmail.com', '2023-05-16 22:36:39', 'ayoub.saadaoui', 'male', 'fZzkmfxBPieLwrxneQojDgIVVc2dXayNkwhwEtMNt78xdJzmj25mXPoLL3ei', 'admin', '$2y$10$ehVUeQnKPSSpsFwf7iQRh.VEtBM852BWdjPZKHRXp6bMEyZA7wZUW', ''),
(15, 'Saadaoui', 'Ayoub', 'saadaoui@gmail.com', '2023-05-17 21:13:47', 'saadaoui.ayoub', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'super_admin', '$2y$10$pkPPeT2mlo5kvfi6k95.eOCRpgHiuIRXy.uiJEoqVR1Y6v8fLG00O', 'uploads/1686697067_Seve-Gaskin-Photo-web-667x500.jpg'),
(16, 'Houda', 'faraji', 'houda@gmail.com', '2023-05-18 02:30:43', 'houda.faraji', 'female', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$MSTp6nfR2tYmzkRrQw7pwOpIsTNkTVOLqz8nEMq5/sVNOux8Rh6mO', ''),
(17, 'Asmae', 'Sami', 'asmae@gmail.com', '2023-05-18 03:22:16', 'asmae.sami', 'female', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$nIDGav1CoyAbYxFXwXswjOIEIV62eI5gBbBn9IS53/XG.oUG6WNTS', ''),
(18, 'Ayoub', 'AS', 'as@gmail.com', '2023-05-19 00:03:16', 'ayoub.as', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$vLf.vGqWnYxUBzXBCAB0LuAmYHyHgl7RqV7dxXeMBoxzJFxwSuCPW', ''),
(19, 'Mohammed', 'As', 'mohammed@gmail.com', '2023-05-19 12:55:35', 'mohammed.as', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'teacher', '$2y$10$XfCp8Db3w2BIeiTBfOSXAOMtUyNc1yfsRRQtGawk3WZ4IjOXnXoKq', ''),
(20, 'Drisse', 'Raiss', 'drisse@gmail.com', '2023-05-21 22:55:29', 'drisse.raiss', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$cyTRcTxJ8P.f/Vd6dsIEYuDM5PT/S.v.7oQozdh4sNiq2ld.jHaai', ''),
(21, 'Said', 'Boussif', 'said@gmail.com', '2023-05-21 22:56:37', 'said.boussif', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$csqZPop.kLVKWxQ1ezEImu6o9tBt5THZUGHSIXfHHtdtqVulC/1mO', ''),
(22, 'Hamza', 'Alami', 'hamza@gmail.com', '2023-06-05 17:36:54', 'hamza.alami', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'reception', '$2y$10$eO824hqZS4b5MAPKHZk0jeQ6/RtgUrH5G46WuF2LM3Z5/w/nz/wAW', ''),
(23, 'Jamal', 'Elkahia', 'Jamal@gmail.com', '2023-06-06 16:20:18', 'jamal.elkahia', 'male', 'cwLzQFvENUAwUf6tkbfNTxpt0Wm4CBVh7XpQTxmANXzcs9ahxYztDwPEpP5G', 'student', '$2y$10$iUKYVtXfGue0wrLuywYxOeSBerU/I5Fr8MCve3Nttb./s8BRijkiS', 'uploads/1686061534_Capture d’écran (196).png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answered_tests`
--
ALTER TABLE `answered_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `submitted` (`submitted`),
  ADD KEY `marked` (`marked`),
  ADD KEY `marked_by` (`marked_by`),
  ADD KEY `date` (`date`),
  ADD KEY `score` (`score`);

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `date` (`date`),
  ADD KEY `answer_mark` (`answer_mark`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class` (`class`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`);

--
-- Index pour la table `class_students`
--
ALTER TABLE `class_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Index pour la table `class_teachers`
--
ALTER TABLE `class_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `date` (`date`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Index pour la table `class_tests`
--
ALTER TABLE `class_tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `date` (`date`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `test` (`test`),
  ADD KEY `class_id` (`class_id`);

--
-- Index pour la table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `date` (`date`),
  ADD KEY `school_2` (`school`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `test` (`test`),
  ADD KEY `date` (`date`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `editable` (`editable`);

--
-- Index pour la table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `test_type` (`question_type`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `lastname` (`lastname`),
  ADD KEY `date` (`date`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `rank` (`rank`),
  ADD KEY `firstname_2` (`firstname`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answered_tests`
--
ALTER TABLE `answered_tests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `class_students`
--
ALTER TABLE `class_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `class_teachers`
--
ALTER TABLE `class_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `class_tests`
--
ALTER TABLE `class_tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
