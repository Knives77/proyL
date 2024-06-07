-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2024 a las 04:42:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `celulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iphone`
--

CREATE TABLE `iphone` (
  `id` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `año_lanzamiento` year(4) NOT NULL,
  `gama` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iphone`
--

INSERT INTO `iphone` (`id`, `modelo`, `año_lanzamiento`, `gama`, `img`, `precio`) VALUES
(1, 'iPhone 14 Pro 128GB Silver', '2022', 'alta', '../img/upload/apple/iphone14pro.jpg', 11999),
(2, 'iPhone 13 Mini 64GB Black', '2021', 'media', '../img/upload/apple/iphone13mini.jpg', 7999),
(3, 'iPhone 12 128GB Blue', '2020', 'alta', '../img/upload/apple/iphone12.jpg', 8999),
(4, 'iPhone 11 64GB Red', '2019', 'media', '../img/upload/apple/iphone11.jpg', 6999),
(5, 'iPhone SE 2022 128GB White', '2022', 'media', '../img/upload/apple/iphonese2022.jpg', 4999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poco`
--

CREATE TABLE `poco` (
  `id` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `año_lanzamiento` year(4) NOT NULL,
  `gama` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `poco`
--

INSERT INTO `poco` (`id`, `modelo`, `año_lanzamiento`, `gama`, `img`, `precio`) VALUES
(1, 'Poco F4 Pro 8GB RAM 256GB Black', '2022', 'alta', '../img/upload/poco/pocof4pro.jpg', 6999),
(2, 'Poco X3 GT 6GB RAM 128GB Stargaze Black', '2021', 'media', '../img/upload/poco/pocox3gt.jpg', 3999),
(3, 'Poco M4 Pro 5G 6GB RAM 128GB Cool Blue', '2022', 'baja', '../img/upload/poco/pocom4pro.jpg', 2999),
(4, 'Poco X4 Pro 8GB RAM 256GB Phantom Black', '2022', 'media', '../img/upload/poco/pocox4pro.jpg', 4999),
(5, 'Poco F3 8GB RAM 256GB Arctic White', '2021', 'alta', '../img/upload/poco/pocof3.jpg', 5499);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `samsung`
--

CREATE TABLE `samsung` (
  `id` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `año_lanzamiento` year(4) NOT NULL,
  `gama` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `samsung`
--

INSERT INTO `samsung` (`id`, `modelo`, `año_lanzamiento`, `gama`, `img`, `precio`) VALUES
(1, 'Samsung Galaxy S22 Ultra 12GB RAM 1TB Black', '2022', 'alta', '../img/upload/samsung/galaxys22ultra.jpg', 10999),
(2, 'Samsung Galaxy Z Fold 3 12GB RAM 256GB Phantom Black', '2021', 'alta', '../img/upload/samsung/galaxyzfold3.jpg', 12999),
(3, 'Samsung Galaxy A53 5G 8GB RAM 128GB Blue', '2022', 'media', '../img/upload/samsung/galaxya53.jpg', 5999),
(4, 'Samsung Galaxy Note 20 8GB RAM 256GB Mystic Bronze', '2020', 'alta', '../img/upload/samsung/galaxynote20.jpg', 8999),
(5, 'Samsung Galaxy M32 6GB RAM 128GB Black', '2021', 'baja', '../img/upload/samsung/galaxym32.jpg', 2999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `xiaomi`
--

CREATE TABLE `xiaomi` (
  `id` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `año_lanzamiento` year(4) NOT NULL,
  `gama` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `precio` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `xiaomi`
--

INSERT INTO `xiaomi` (`id`, `modelo`, `año_lanzamiento`, `gama`, `img`, `precio`) VALUES
(1, 'Xiaomi Mi 11 Ultra 12GB RAM 256GB Black', '2021', 'alta', '../img/upload/xiaomi/mi11ultra.jpg', 6999),
(2, 'Xiaomi Redmi Note 12 Pro 8GB RAM 128GB Blue', '2023', 'media', '../img/upload/xiaomi/redminote12pro.jpg', 3999),
(3, 'Xiaomi Redmi Note 13 4G LTE (256GB + 8GB)', '2022', 'alta', '../img/upload/xiaomi/redminote13.jpg', 5299),
(4, 'Xiaomi Mi Mix Fold 12GB RAM 512GB Black', '2022', 'alta', '../img/upload/xiaomi/mimixfold.jpg', 11999),
(5, 'Xiaomi Mi 10T Pro 8GB RAM 256GB Silver', '2020', 'alta', '../img/upload/xiaomi/mi10tpro.jpg', 5999);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poco`
--
ALTER TABLE `poco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `xiaomi`
--
ALTER TABLE `xiaomi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `poco`
--
ALTER TABLE `poco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `samsung`
--
ALTER TABLE `samsung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `xiaomi`
--
ALTER TABLE `xiaomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
