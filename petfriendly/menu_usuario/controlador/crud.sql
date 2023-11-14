-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2020 a las 16:32:11
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Base de datos: `crud`


-- Estructura de tabla para la tabla `mascotas`

CREATE TABLE 'mascotas' (
  `Tipomascota` enum('Gato','Perro') NOT NULL,
  'Nombre' text(50) COLLATE utf8mb4_general_ci NOT NULL,
  'Raza' text(50) COLLATE utf8mb4_general_ci NOT NULL,
  'ID' int(10) NOT NULL,
  'Dueño' varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8mb4_general_ci;


-- Volcado de datos para la tabla `mascotas`


INSERT INTO 'mascotas' ('Tipomascota','Nombre','Raza','ID') VALUES
('Gato','cat','perro','1');


-- Índices para tablas volcadas



-- Indices de la tabla `mascotas`

ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`ID`);


-- AUTO_INCREMENT de las tablas volcadas


-- AUTO_INCREMENT de la tabla `mascotas`

ALTER TABLE `mascotas`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
