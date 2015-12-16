-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2015 a las 22:03:27
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbruleta`
--
CREATE DATABASE IF NOT EXISTS `dbruleta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbruleta`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_administrador` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre_administrador`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nombre_producto` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `position` int(11) NOT NULL,
  `insertTS` date NOT NULL,
  `updateTS` date NOT NULL,
  `amount` int(11) NOT NULL,
  `special` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=217 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `filename`, `nombre_producto`, `position`, `insertTS`, `updateTS`, `amount`, `special`) VALUES
(1, 'Adela De Leon Padilla', 'Adela De Leon Padilla', 1, '2015-12-12', '2015-12-12', 1, 0),
(2, 'Alam Gaytan Barrera', 'Alam Gaytan Barrera', 1, '2015-12-12', '2015-12-12', 1, 0),
(3, 'Alba Enriquez Guinac', 'Alba Enriquez Guinac', 1, '2015-12-12', '2015-12-12', 1, 0),
(4, 'Aldo Barrios LÃ³pez', 'Aldo Barrios LÃ³pez', 1, '2015-12-12', '2015-12-12', 1, 0),
(5, 'Alejandra Gonzalez Martinez', 'Alejandra Gonzalez Martinez', 1, '2015-12-12', '2015-12-12', 1, 0),
(6, 'Alejandro Vizquerra ', 'Alejandro Vizquerra ', 1, '2015-12-12', '2015-12-12', 1, 0),
(7, 'Ana LucÃ­a Romero ', 'Ana LucÃ­a Romero ', 1, '2015-12-12', '2015-12-12', 1, 0),
(8, 'Ana Perez Cano', 'Ana Perez Cano', 1, '2015-12-12', '2015-12-12', 1, 0),
(9, 'Andrea Franco Castillo', 'Andrea Franco Castillo', 1, '2015-12-12', '2015-12-12', 1, 0),
(10, 'Andrea Saravia ', 'Andrea Saravia ', 1, '2015-12-12', '2015-12-12', 1, 0),
(11, 'Angel Lopez', 'Angel Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(12, 'Angel Ruiz Vasquez', 'Angel Ruiz Vasquez', 1, '2015-12-12', '2015-12-12', 1, 0),
(13, 'Angela Saenz Ramos', 'Angela Saenz Ramos', 1, '2015-12-12', '2015-12-12', 1, 0),
(14, 'Armando Gomez ', 'Armando Gomez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(15, 'Arturo Rosales', 'Arturo Rosales', 1, '2015-12-12', '2015-12-12', 1, 0),
(16, 'Astrid Barrera Marroquin', 'Astrid Barrera Marroquin', 1, '2015-12-12', '2015-12-12', 1, 0),
(17, 'Aurelio Acalja Asig', 'Aurelio Acalja Asig', 1, '2015-12-12', '2015-12-12', 1, 0),
(18, 'Bayron Acevedo Soto', 'Bayron Acevedo Soto', 1, '2015-12-12', '2015-12-12', 1, 0),
(19, 'Benjamin Trigueros', 'Benjamin Trigueros', 1, '2015-12-12', '2015-12-12', 1, 0),
(20, 'Brenda Cardona Paz', 'Brenda Cardona Paz', 1, '2015-12-12', '2015-12-12', 1, 0),
(21, 'Brenda Gonzalez Garcia', 'Brenda Gonzalez Garcia', 1, '2015-12-12', '2015-12-12', 1, 0),
(22, 'Byron Galicia Garcia', 'Byron Galicia Garcia', 1, '2015-12-12', '2015-12-12', 1, 0),
(23, 'Byron Pacheco Paau', 'Byron Pacheco Paau', 1, '2015-12-12', '2015-12-12', 1, 0),
(24, 'Byron Sapon Ulin', 'Byron Sapon Ulin', 1, '2015-12-12', '2015-12-12', 1, 0),
(25, 'Candy Molina', 'Candy Molina', 1, '2015-12-12', '2015-12-12', 1, 0),
(26, 'Carlos Cifuentes Colindres', 'Carlos Cifuentes Colindres', 1, '2015-12-12', '2015-12-12', 1, 0),
(27, 'Carlos Espinoza Fonseca', 'Carlos Espinoza Fonseca', 1, '2015-12-12', '2015-12-12', 1, 0),
(28, 'Carlos Franco Trujillo', 'Carlos Franco Trujillo', 1, '2015-12-12', '2015-12-12', 1, 0),
(29, 'Carlos Gomez Samayoa', 'Carlos Gomez Samayoa', 1, '2015-12-12', '2015-12-12', 1, 0),
(30, 'Carlos Inay Gonzalez', 'Carlos Inay Gonzalez', 1, '2015-12-12', '2015-12-12', 1, 0),
(31, 'Carlos Martinez Flores', 'Carlos Martinez Flores', 1, '2015-12-12', '2015-12-12', 1, 0),
(32, 'Carlos Mendoza Osorio', 'Carlos Mendoza Osorio', 1, '2015-12-12', '2015-12-12', 1, 0),
(33, 'Carolina Hernandez ', 'Carolina Hernandez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(34, 'Catalina Garcia De La Rosa', 'Catalina Garcia De La Rosa', 1, '2015-12-12', '2015-12-12', 1, 0),
(35, 'Celestina Tzaquitzal ', 'Celestina Tzaquitzal ', 1, '2015-12-12', '2015-12-12', 1, 0),
(36, 'Cesar Ajquiy', 'Cesar Ajquiy', 1, '2015-12-12', '2015-12-12', 1, 0),
(37, 'Cesar Contreras Ortiz', 'Cesar Contreras Ortiz', 1, '2015-12-12', '2015-12-12', 1, 0),
(38, 'Cesar Curup', 'Cesar Curup', 1, '2015-12-12', '2015-12-12', 1, 0),
(39, 'Cesar Joel Ramirez ', 'Cesar Joel Ramirez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(40, 'Cesar Martinez ', 'Cesar Martinez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(41, 'Cesar Sula', 'Cesar Sula', 1, '2015-12-12', '2015-12-12', 1, 0),
(42, 'Cindy Alvarez Lopez', 'Cindy Alvarez Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(43, 'Cristian Celis Lopez', 'Cristian Celis Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(44, 'Cyntia Rodas Hurtarte', 'Cyntia Rodas Hurtarte', 1, '2015-12-12', '2015-12-12', 1, 0),
(45, 'Dagmar Geronimo Lopez', 'Dagmar Geronimo Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(46, 'Daniel Marquez Ochoa', 'Daniel Marquez Ochoa', 1, '2015-12-12', '2015-12-12', 1, 0),
(47, 'Daniel Ochoa Gomez', 'Daniel Ochoa Gomez', 1, '2015-12-12', '2015-12-12', 1, 0),
(48, 'Daniel Vides Palma', 'Daniel Vides Palma', 1, '2015-12-12', '2015-12-12', 1, 0),
(49, 'Daniela Altan Reyes', 'Daniela Altan Reyes', 1, '2015-12-12', '2015-12-12', 1, 0),
(50, 'Danny Caceres Perez', 'Danny Caceres Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(51, 'Dany Patzan Morataya', 'Dany Patzan Morataya', 1, '2015-12-12', '2015-12-12', 1, 0),
(52, 'Dario Guacamaya', 'Dario Guacamaya', 1, '2015-12-12', '2015-12-12', 1, 0),
(53, 'David Hernandez Rodas', 'David Hernandez Rodas', 1, '2015-12-12', '2015-12-12', 1, 0),
(54, 'Deborah Amezquita', 'Deborah Amezquita', 1, '2015-12-12', '2015-12-12', 1, 0),
(55, 'Diego De Leon Guerra', 'Diego De Leon Guerra', 1, '2015-12-12', '2015-12-12', 1, 0),
(56, 'Diego Nimatuj Estacuy', 'Diego Nimatuj Estacuy', 1, '2015-12-12', '2015-12-12', 1, 0),
(57, 'Dilcia Zuniga', 'Dilcia Zuniga', 1, '2015-12-12', '2015-12-12', 1, 0),
(58, 'Douglas Davila Monterroso', 'Douglas Davila Monterroso', 1, '2015-12-12', '2015-12-12', 1, 0),
(59, 'Douglas Zapata Sil', 'Douglas Zapata Sil', 1, '2015-12-12', '2015-12-12', 1, 0),
(60, 'Edelmar Segura', 'Edelmar Segura', 1, '2015-12-12', '2015-12-12', 1, 0),
(61, 'Edgar Armando Folgar', 'Edgar Armando Folgar', 1, '2015-12-12', '2015-12-12', 1, 0),
(62, 'Edgar Garcia Alcantara', 'Edgar Garcia Alcantara', 1, '2015-12-12', '2015-12-12', 1, 0),
(63, 'Edgar Quinteros Rivera', 'Edgar Quinteros Rivera', 1, '2015-12-12', '2015-12-12', 1, 0),
(64, 'Eduardo Figueroa Acevedo', 'Eduardo Figueroa Acevedo', 1, '2015-12-12', '2015-12-12', 1, 0),
(65, 'Eduardo Ochoa Reyes', 'Eduardo Ochoa Reyes', 1, '2015-12-12', '2015-12-12', 1, 0),
(66, 'Edwin Enriquez Gonzalez', 'Edwin Enriquez Gonzalez', 1, '2015-12-12', '2015-12-12', 1, 0),
(67, 'Edwin Martinez Gonzalez', 'Edwin Martinez Gonzalez', 1, '2015-12-12', '2015-12-12', 1, 0),
(68, 'Edwin Serrano Barrios', 'Edwin Serrano Barrios', 1, '2015-12-12', '2015-12-12', 1, 0),
(69, 'Edwin Yool OrdoÃ±ez', 'Edwin Yool OrdoÃ±ez', 1, '2015-12-12', '2015-12-12', 1, 0),
(70, 'ElÃ­as Joel Funez ', 'ElÃ­as Joel Funez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(71, 'Elizabeth Hernandez', 'Elizabeth Hernandez', 1, '2015-12-12', '2015-12-12', 1, 0),
(72, 'Emilio Diaz Morales', 'Emilio Diaz Morales', 1, '2015-12-12', '2015-12-12', 1, 0),
(73, 'Emora Ovalle Macal', 'Emora Ovalle Macal', 1, '2015-12-12', '2015-12-12', 1, 0),
(74, 'Erick Figueroa ', 'Erick Figueroa ', 1, '2015-12-12', '2015-12-12', 1, 0),
(75, 'Erick Gonzalez Ixchop', 'Erick Gonzalez Ixchop', 1, '2015-12-12', '2015-12-12', 1, 0),
(76, 'Ernesto Hernandez Luna', 'Ernesto Hernandez Luna', 1, '2015-12-12', '2015-12-12', 1, 0),
(77, 'Eswin Rodas Perdomo', 'Eswin Rodas Perdomo', 1, '2015-12-12', '2015-12-12', 1, 0),
(78, 'Federico Garcia Yuman', 'Federico Garcia Yuman', 1, '2015-12-12', '2015-12-12', 1, 0),
(79, 'Felipe AgustÃ­n Chavez', 'Felipe AgustÃ­n Chavez', 1, '2015-12-12', '2015-12-12', 1, 0),
(80, 'Francisco Ovalle Sandoval', 'Francisco Ovalle Sandoval', 1, '2015-12-12', '2015-12-12', 1, 0),
(81, 'Freddy Cordon Barraza', 'Freddy Cordon Barraza', 1, '2015-12-12', '2015-12-12', 1, 0),
(82, 'Gabriela Marroquin', 'Gabriela Marroquin', 1, '2015-12-12', '2015-12-12', 1, 0),
(83, 'Galia Chavez Alvarado', 'Galia Chavez Alvarado', 1, '2015-12-12', '2015-12-12', 1, 0),
(84, 'Gary Illescas Gaitan', 'Gary Illescas Gaitan', 1, '2015-12-12', '2015-12-12', 1, 0),
(85, 'Genaro Lux Tiu', 'Genaro Lux Tiu', 1, '2015-12-12', '2015-12-12', 1, 0),
(86, 'Geovani Carrillo Reyes', 'Geovani Carrillo Reyes', 1, '2015-12-12', '2015-12-12', 1, 0),
(87, 'Gersson Orellana ', 'Gersson Orellana ', 1, '2015-12-12', '2015-12-12', 1, 0),
(88, 'Ghandy Martinez ', 'Ghandy Martinez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(89, 'Gilberto Boleres Ramirez', 'Gilberto Boleres Ramirez', 1, '2015-12-12', '2015-12-12', 1, 0),
(90, 'Gualberto Sasvin Gudiel', 'Gualberto Sasvin Gudiel', 1, '2015-12-12', '2015-12-12', 1, 0),
(91, 'Hanz Velasquez ', 'Hanz Velasquez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(92, 'Heber Reyes Rangel', 'Heber Reyes Rangel', 1, '2015-12-12', '2015-12-12', 1, 0),
(93, 'Helen Garcia', 'Helen Garcia', 1, '2015-12-12', '2015-12-12', 1, 0),
(94, 'Helfido Juarez Sarmiento', 'Helfido Juarez Sarmiento', 1, '2015-12-12', '2015-12-12', 1, 0),
(95, 'Henry Gonzalez Saregure', 'Henry Gonzalez Saregure', 1, '2015-12-12', '2015-12-12', 1, 0),
(96, 'Hernan Quintanilla Boces', 'Hernan Quintanilla Boces', 1, '2015-12-12', '2015-12-12', 1, 0),
(97, 'Hugo Guzman Rivas', 'Hugo Guzman Rivas', 1, '2015-12-12', '2015-12-12', 1, 0),
(98, 'Iancarlo Ramos ', 'Iancarlo Ramos ', 1, '2015-12-12', '2015-12-12', 1, 0),
(99, 'Irwin Tirado ', 'Irwin Tirado ', 1, '2015-12-12', '2015-12-12', 1, 0),
(100, 'Jacqueline Vargas', 'Jacqueline Vargas', 1, '2015-12-12', '2015-12-12', 1, 0),
(101, 'Jaime Ramirez Boche', 'Jaime Ramirez Boche', 1, '2015-12-12', '2015-12-12', 1, 0),
(102, 'Jairo Mutaz Lorenzo', 'Jairo Mutaz Lorenzo', 1, '2015-12-12', '2015-12-12', 1, 0),
(103, 'Jennifer Lacan ', 'Jennifer Lacan ', 1, '2015-12-12', '2015-12-12', 1, 0),
(104, 'Jerry Yojcom Diaz', 'Jerry Yojcom Diaz', 1, '2015-12-12', '2015-12-12', 1, 0),
(105, 'Jeus Escobar Orellana', 'Jeus Escobar Orellana', 1, '2015-12-12', '2015-12-12', 1, 0),
(106, 'Jeyson Mazariegos Merida', 'Jeyson Mazariegos Merida', 1, '2015-12-12', '2015-12-12', 1, 0),
(107, 'Jhonatan Josue Castillo', 'Jhonatan Josue Castillo', 1, '2015-12-12', '2015-12-12', 1, 0),
(108, 'Joel Flores Perez', 'Joel Flores Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(109, 'Johann Perez Merida', 'Johann Perez Merida', 1, '2015-12-12', '2015-12-12', 1, 0),
(110, 'Jonathan Gatica Mayen', 'Jonathan Gatica Mayen', 1, '2015-12-12', '2015-12-12', 1, 0),
(111, 'Jorge Reyes Ochoa', 'Jorge Reyes Ochoa', 1, '2015-12-12', '2015-12-12', 1, 0),
(112, 'Jorge Rodriguez Alvarez', 'Jorge Rodriguez Alvarez', 1, '2015-12-12', '2015-12-12', 1, 0),
(113, 'Jose Argueta Pedroza', 'Jose Argueta Pedroza', 1, '2015-12-12', '2015-12-12', 1, 0),
(114, 'Jose Canel Hernandez', 'Jose Canel Hernandez', 1, '2015-12-12', '2015-12-12', 1, 0),
(115, 'Jose Monteagudo', 'Jose Monteagudo', 1, '2015-12-12', '2015-12-12', 1, 0),
(116, 'Jose Montufar Ruiz', 'Jose Montufar Ruiz', 1, '2015-12-12', '2015-12-12', 1, 0),
(117, 'Josecarlos Ramirez ', 'Josecarlos Ramirez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(118, 'Joshuar Guzman Revolorio', 'Joshuar Guzman Revolorio', 1, '2015-12-12', '2015-12-12', 1, 0),
(119, 'Josue Barahona Jimenez', 'Josue Barahona Jimenez', 1, '2015-12-12', '2015-12-12', 1, 0),
(120, 'Josue Cahuex ', 'Josue Cahuex ', 1, '2015-12-12', '2015-12-12', 1, 0),
(121, 'Juan Arrevillaga Perez', 'Juan Arrevillaga Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(122, 'Juan Carlos Arrazola', 'Juan Carlos Arrazola', 1, '2015-12-12', '2015-12-12', 1, 0),
(123, 'Juan Carlos Cumez ', 'Juan Carlos Cumez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(124, 'Juan Pablo Molina ', 'Juan Pablo Molina ', 1, '2015-12-12', '2015-12-12', 1, 0),
(125, 'Julio Meza De Leon', 'Julio Meza De Leon', 1, '2015-12-12', '2015-12-12', 1, 0),
(126, 'Karin  Balan ', 'Karin  Balan ', 1, '2015-12-12', '2015-12-12', 1, 0),
(127, 'Karina De Leon Garcia', 'Karina De Leon Garcia', 1, '2015-12-12', '2015-12-12', 1, 0),
(128, 'Katherinne Reyes Gamboa', 'Katherinne Reyes Gamboa', 1, '2015-12-12', '2015-12-12', 1, 0),
(129, 'Keila MuÃ±oz', 'Keila MuÃ±oz', 1, '2015-12-12', '2015-12-12', 1, 0),
(130, 'Kenneth Linares Alfaro', 'Kenneth Linares Alfaro', 1, '2015-12-12', '2015-12-12', 1, 0),
(131, 'Kevin Francisco Lopez', 'Kevin Francisco Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(132, 'Kevin Gomez De Leon', 'Kevin Gomez De Leon', 1, '2015-12-12', '2015-12-12', 1, 0),
(133, 'Kevin Ivan Garcia ', 'Kevin Ivan Garcia ', 1, '2015-12-12', '2015-12-12', 1, 0),
(134, 'Kevin Yadin Ochoa ', 'Kevin Yadin Ochoa ', 1, '2015-12-12', '2015-12-12', 1, 0),
(135, 'Lesther Godoy ', 'Lesther Godoy ', 1, '2015-12-12', '2015-12-12', 1, 0),
(136, 'Lidia Garcia Vasquez', 'Lidia Garcia Vasquez', 1, '2015-12-12', '2015-12-12', 1, 0),
(137, 'Lorena Armas', 'Lorena Armas', 1, '2015-12-12', '2015-12-12', 1, 0),
(138, 'Luis  Rivera Silva', 'Luis  Rivera Silva', 1, '2015-12-12', '2015-12-12', 1, 0),
(139, 'Luis Contreras Hernandez', 'Luis Contreras Hernandez', 1, '2015-12-12', '2015-12-12', 1, 0),
(140, 'Luis Fernando Avila', 'Luis Fernando Avila', 1, '2015-12-12', '2015-12-12', 1, 0),
(141, 'Luis Osoy Mux', 'Luis Osoy Mux', 1, '2015-12-12', '2015-12-12', 1, 0),
(142, 'Luis Vasquez Estrada', 'Luis Vasquez Estrada', 1, '2015-12-12', '2015-12-12', 1, 0),
(143, 'Lyncon Camo Argueta', 'Lyncon Camo Argueta', 1, '2015-12-12', '2015-12-12', 1, 0),
(144, 'Manuel Paredes BolaÃ±os', 'Manuel Paredes BolaÃ±os', 1, '2015-12-12', '2015-12-12', 1, 0),
(145, 'Marcelo Mendez Juarez', 'Marcelo Mendez Juarez', 1, '2015-12-12', '2015-12-12', 1, 0),
(146, 'Marco Mijangos', 'Marco Mijangos', 1, '2015-12-12', '2015-12-12', 1, 0),
(147, 'Maria Isabel Jerez ', 'Maria Isabel Jerez ', 1, '2015-12-12', '2015-12-12', 1, 0),
(148, 'Maria Isabel Pineda', 'Maria Isabel Pineda', 1, '2015-12-12', '2015-12-12', 1, 0),
(149, 'Mariajose Garcia ', 'Mariajose Garcia ', 1, '2015-12-12', '2015-12-12', 1, 0),
(150, 'Mariana Piedrasanta ', 'Mariana Piedrasanta ', 1, '2015-12-12', '2015-12-12', 1, 0),
(151, 'Mario Bajxac Lopez', 'Mario Bajxac Lopez', 1, '2015-12-12', '2015-12-12', 1, 0),
(152, 'Mario Hernandez Leal', 'Mario Hernandez Leal', 1, '2015-12-12', '2015-12-12', 1, 0),
(153, 'Mario Rosales ', 'Mario Rosales ', 1, '2015-12-12', '2015-12-12', 1, 0),
(154, 'Mario Villatoro Cotom', 'Mario Villatoro Cotom', 1, '2015-12-12', '2015-12-12', 1, 0),
(155, 'Marvin Camey Galvez', 'Marvin Camey Galvez', 1, '2015-12-12', '2015-12-12', 1, 0),
(156, 'Marycarmen Juarez', 'Marycarmen Juarez', 1, '2015-12-12', '2015-12-12', 1, 0),
(157, 'Mauricio Victorio Ortiz', 'Mauricio Victorio Ortiz', 1, '2015-12-12', '2015-12-12', 1, 0),
(158, 'Mayra Del Cid Reyes', 'Mayra Del Cid Reyes', 1, '2015-12-12', '2015-12-12', 1, 0),
(159, 'Mayra Montenegro Baeza', 'Mayra Montenegro Baeza', 1, '2015-12-12', '2015-12-12', 1, 0),
(160, 'Melany Fuentes Rivera', 'Melany Fuentes Rivera', 1, '2015-12-12', '2015-12-12', 1, 0),
(161, 'Melissa Cojulun Molina', 'Melissa Cojulun Molina', 1, '2015-12-12', '2015-12-12', 1, 0),
(162, 'Michael Ponce', 'Michael Ponce', 1, '2015-12-12', '2015-12-12', 1, 0),
(163, 'Michelle Sanchez', 'Michelle Sanchez', 1, '2015-12-12', '2015-12-12', 1, 0),
(164, 'Miguel A. Perez', 'Miguel A. Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(165, 'Milsan Alejandra JuÃ¡rez', 'Milsan Alejandra JuÃ¡rez', 1, '2015-12-12', '2015-12-12', 1, 0),
(166, 'Mirna Gomez Aroche', 'Mirna Gomez Aroche', 1, '2015-12-12', '2015-12-12', 1, 0),
(167, 'Mynor Perez Perez', 'Mynor Perez Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(168, 'Mynor Rodriguez Castellanos', 'Mynor Rodriguez Castellanos', 1, '2015-12-12', '2015-12-12', 1, 0),
(169, 'Nery SarceÃ±o Silva', 'Nery SarceÃ±o Silva', 1, '2015-12-12', '2015-12-12', 1, 0),
(170, 'Nestor Larios Falla', 'Nestor Larios Falla', 1, '2015-12-12', '2015-12-12', 1, 0),
(171, 'Norma Guerra', 'Norma Guerra', 1, '2015-12-12', '2015-12-12', 1, 0),
(172, 'Omar Abril MuÃ±oz', 'Omar Abril MuÃ±oz', 1, '2015-12-12', '2015-12-12', 1, 0),
(173, 'Omar Nufio Aguilar', 'Omar Nufio Aguilar', 1, '2015-12-12', '2015-12-12', 1, 0),
(174, 'Oscar Culajay Barrios', 'Oscar Culajay Barrios', 1, '2015-12-12', '2015-12-12', 1, 0),
(175, 'Oscar Diaz Veliz', 'Oscar Diaz Veliz', 1, '2015-12-12', '2015-12-12', 1, 0),
(176, 'Pamela Trujillo Juarez', 'Pamela Trujillo Juarez', 1, '2015-12-12', '2015-12-12', 1, 0),
(177, 'Paola Escobar ', 'Paola Escobar ', 1, '2015-12-12', '2015-12-12', 1, 0),
(178, 'Pedro Mejia Solorzano', 'Pedro Mejia Solorzano', 1, '2015-12-12', '2015-12-12', 1, 0),
(179, 'Pedro Pablo Rivas ', 'Pedro Pablo Rivas ', 1, '2015-12-12', '2015-12-12', 1, 0),
(180, 'Porfirio De Jesus Yocute', 'Porfirio De Jesus Yocute', 1, '2015-12-12', '2015-12-12', 1, 0),
(181, 'Ramon Emilio David Montoya', 'Ramon Emilio David Montoya', 1, '2015-12-12', '2015-12-12', 1, 0),
(182, 'Raul Fuentes Morales', 'Raul Fuentes Morales', 1, '2015-12-12', '2015-12-12', 1, 0),
(183, 'Raymundo Arriaga Ronquillo', 'Raymundo Arriaga Ronquillo', 1, '2015-12-12', '2015-12-12', 1, 0),
(184, 'Romulo Ramirez Acevedo', 'Romulo Ramirez Acevedo', 1, '2015-12-12', '2015-12-12', 1, 0),
(185, 'Rony AvendaÃ±o Ramos', 'Rony AvendaÃ±o Ramos', 1, '2015-12-12', '2015-12-12', 1, 0),
(186, 'Rony Galvez Monterroso', 'Rony Galvez Monterroso', 1, '2015-12-12', '2015-12-12', 1, 0),
(187, 'Rose-Ella Guzman', 'Rose-Ella Guzman', 1, '2015-12-12', '2015-12-12', 1, 0),
(188, 'Ruben Chinchilla', 'Ruben Chinchilla', 1, '2015-12-12', '2015-12-12', 1, 0),
(189, 'Rudy Chacon Morales', 'Rudy Chacon Morales', 1, '2015-12-12', '2015-12-12', 1, 0),
(190, 'Rudy Velasquez', 'Rudy Velasquez', 1, '2015-12-12', '2015-12-12', 1, 0),
(191, 'Rumualdo Santos Perez', 'Rumualdo Santos Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(192, 'Sandra  de Meany', 'Sandra  de Meany', 1, '2015-12-12', '2015-12-12', 1, 0),
(193, 'Sandra Contreras Garcia', 'Sandra Contreras Garcia', 1, '2015-12-12', '2015-12-12', 1, 0),
(194, 'Selvin Davila Hernandez', 'Selvin Davila Hernandez', 1, '2015-12-12', '2015-12-12', 1, 0),
(195, 'Sergio Ajsivinac Quiej', 'Sergio Ajsivinac Quiej', 1, '2015-12-12', '2015-12-12', 1, 0),
(196, 'Sergio Melendez Rodas', 'Sergio Melendez Rodas', 1, '2015-12-12', '2015-12-12', 1, 0),
(197, 'Silverio Ruiz Cano', 'Silverio Ruiz Cano', 1, '2015-12-12', '2015-12-12', 1, 0),
(198, 'Silvia Illescas Perez', 'Silvia Illescas Perez', 1, '2015-12-12', '2015-12-12', 1, 0),
(199, 'Sofia Colindres Argueta', 'Sofia Colindres Argueta', 1, '2015-12-12', '2015-12-12', 1, 0),
(200, 'Stephanie Alamilla Santizo', 'Stephanie Alamilla Santizo', 1, '2015-12-12', '2015-12-12', 1, 0),
(201, 'Steven NuÃ±ez Canel', 'Steven NuÃ±ez Canel', 1, '2015-12-12', '2015-12-12', 1, 0),
(202, 'Susana Hernandez Gomez', 'Susana Hernandez Gomez', 1, '2015-12-12', '2015-12-12', 1, 0),
(203, 'Tereso Prada MuÃ±oz', 'Tereso Prada MuÃ±oz', 1, '2015-12-12', '2015-12-12', 1, 0),
(204, 'Vera De Leon', 'Vera De Leon', 1, '2015-12-12', '2015-12-12', 1, 0),
(205, 'Veronica Rodas Davila', 'Veronica Rodas Davila', 1, '2015-12-12', '2015-12-12', 1, 0),
(206, 'Vivian Mejia Estrada', 'Vivian Mejia Estrada', 1, '2015-12-12', '2015-12-12', 1, 0),
(207, 'Welther MartÃ­nez CastaÃ±eda', 'Welther MartÃ­nez CastaÃ±eda', 1, '2015-12-12', '2015-12-12', 1, 0),
(208, 'Wilfredo Tocay Tunche', 'Wilfredo Tocay Tunche', 1, '2015-12-12', '2015-12-12', 1, 0),
(209, 'Wilian Pichola Garrido', 'Wilian Pichola Garrido', 1, '2015-12-12', '2015-12-12', 1, 0),
(210, 'William Chajon Estrada', 'William Chajon Estrada', 1, '2015-12-12', '2015-12-12', 1, 0),
(211, 'William Ernesto Fernandez', 'William Ernesto Fernandez', 1, '2015-12-12', '2015-12-12', 1, 0),
(212, 'Wilmer Ramos Ajpop', 'Wilmer Ramos Ajpop', 1, '2015-12-12', '2015-12-12', 1, 0),
(213, 'Wilson Giron Celada', 'Wilson Giron Celada', 1, '2015-12-12', '2015-12-12', 1, 0),
(214, 'Wuilmer Lopez Aguirre', 'Wuilmer Lopez Aguirre', 1, '2015-12-12', '2015-12-12', 1, 0),
(215, 'Yany  Paz De Castillo', 'Yany  Paz De Castillo', 1, '2015-12-12', '2015-12-12', 1, 0),
(216, 'Yeremi Choc Gonzalez', 'Yeremi Choc Gonzalez', 1, '2015-12-12', '2015-12-12', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE IF NOT EXISTS `premios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nombre_producto` varchar(128) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `position` int(11) NOT NULL,
  `insertTS` date NOT NULL,
  `updateTS` date NOT NULL,
  `amount` int(11) NOT NULL,
  `special` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id`, `filename`, `nombre_producto`, `position`, `insertTS`, `updateTS`, `amount`, `special`) VALUES
(1, '2015December9213041.png', 'Bocinas Klip mini No.1', 1, '2015-12-09', '2015-12-09', 1, 0),
(2, '2015December9213941.png', 'Bocinas Klip mini No.2', 2, '2015-12-09', '2015-12-09', 1, 0),
(3, '2015December9214741.png', 'Bocinas Klip mini No.3', 3, '2015-12-09', '2015-12-09', 1, 0),
(4, '2015December9215543.jpg', 'Estadia En villas de Guatemala No. 4', 4, '2015-12-09', '2015-12-09', 1, 0),
(5, '2015December921244.jpg', 'Estadia En villas de Guatemala  No. 5', 5, '2015-12-09', '2015-12-09', 1, 0),
(6, '2015December9211244.jpg', 'Estadia En villas de Guatemala No. 6', 6, '2015-12-09', '2015-12-09', 1, 0),
(7, '2015December9212144.jpg', 'Estadia En villas de Guatemala No. 7', 7, '2015-12-09', '2015-12-09', 1, 0),
(8, '2015December9213144.jpg', 'Estadia En villas de Guatemala No. 8', 8, '2015-12-09', '2015-12-09', 1, 0),
(9, '2015December9214344.jpg', 'Certificado de Q 500.00 No.9', 9, '2015-12-09', '2015-12-09', 1, 0),
(10, '2015December9211845.jpg', 'Certificado de Q 500.00 No.10', 10, '2015-12-09', '2015-12-09', 1, 0),
(11, '2015December9212645.jpg', 'Certificado de Q 500.00 No.11', 11, '2015-12-09', '2015-12-09', 1, 0),
(12, '2015December9213445.jpg', 'Certificado de Q 250.00 No.12', 12, '2015-12-09', '2015-12-09', 1, 0),
(13, '2015December9214245.jpg', 'Certificado de Q 250.00 No.13', 13, '2015-12-09', '2015-12-09', 1, 0),
(14, '2015December9215145.jpg', 'Certificado de Q 250.00 No.14', 14, '2015-12-09', '2015-12-09', 1, 0),
(15, '2015December9215945.jpg', 'Certificado de Q 250.00 No.15', 15, '2015-12-09', '2015-12-09', 1, 0),
(16, '2015December921746.jpg', 'Certificado de Q 250.00 No.16', 16, '2015-12-09', '2015-12-09', 1, 0),
(17, '2015December9211746.jpg', 'Certificado de Q 250.00 No.17', 17, '2015-12-09', '2015-12-09', 1, 0),
(18, '2015December9212446.jpg', 'Certificado de Q 250.00 No.18', 18, '2015-12-09', '2015-12-09', 1, 0),
(19, '2015December9213246.jpg', 'Certificado de Q150.00 No.19', 19, '2015-12-09', '2015-12-09', 1, 0),
(20, '2015December9215047.png', 'Teatro en casa LG No.20', 20, '2015-12-09', '2015-12-09', 1, 0),
(21, '2015December921548.png', 'Tv 32 LG Smart No.21', 21, '2015-12-09', '2015-12-09', 1, 0),
(22, '2015December9211348.png', 'Tv 32  LG Smart No.22', 22, '2015-12-09', '2015-12-09', 1, 0),
(23, '2015December9214748.png', 'Tv 32 Samsung Smart No.23', 23, '2015-12-09', '2015-12-09', 1, 0),
(24, '2015December9215150.png', 'Tv 32 LG No.24', 24, '2015-12-09', '2015-12-09', 1, 0),
(25, '2015December9212452.png', 'Tv Samsung Smart Led 32 No.25', 25, '2015-12-09', '2015-12-09', 1, 0),
(26, '2015December9213452.png', 'Tv Samsung Smart Led 32 No.26', 26, '2015-12-09', '2015-12-09', 1, 0),
(27, '2015December9214652.png', 'Licuadora No.27', 27, '2015-12-09', '2015-12-09', 1, 0),
(28, '2015December921053.png', 'Licuadora No.28', 28, '2015-12-09', '2015-12-09', 1, 0),
(29, '2015December9211053.png', 'Licuadora No.29', 29, '2015-12-09', '2015-12-09', 1, 0),
(30, '2015December9212053.png', 'Licuadora No.30', 30, '2015-12-09', '2015-12-09', 1, 0),
(31, '2015December9212953.png', 'Licuadora No.31', 31, '2015-12-09', '2015-12-09', 1, 0),
(32, '2015December9214253.jpg', 'Horno Tostador No.32', 32, '2015-12-09', '2015-12-09', 1, 0),
(33, '2015December9214953.jpg', 'Horno Tostador No.33', 33, '2015-12-09', '2015-12-09', 1, 0),
(34, '2015December9215753.jpg', 'Horno Tostador No.34', 34, '2015-12-09', '2015-12-09', 1, 0),
(35, '2015December921454.jpg', 'Horno Tostador No.35', 35, '2015-12-09', '2015-12-09', 1, 0),
(36, '2015December9211154.jpg', 'Horno Tostador No.36', 36, '2015-12-09', '2015-12-09', 1, 0),
(37, '2015December9212954.png', 'Licuadora y Procesador No.37', 37, '2015-12-09', '2015-12-09', 1, 0),
(38, '2015December9214454.png', 'Licuadora y Procesador No.38', 38, '2015-12-09', '2015-12-09', 1, 0),
(39, '2015December9215254.png', 'Licuadora y Procesador No.39', 39, '2015-12-09', '2015-12-09', 1, 0),
(40, '2015December921155.png', 'Licuadora y Procesador No.40', 40, '2015-12-09', '2015-12-09', 1, 0),
(41, '2015December921955.png', 'Licuadora y Procesador No.41', 41, '2015-12-09', '2015-12-09', 1, 0),
(42, '2015December9212255.jpg', 'Olla De Presion No.42', 42, '2015-12-09', '2015-12-09', 1, 0),
(43, '2015December9213155.jpg', 'Olla De Presion No.43', 43, '2015-12-09', '2015-12-09', 1, 0),
(44, '2015December9214255.png', 'Bateria Oster No. 44', 44, '2015-12-09', '2015-12-09', 1, 0),
(45, '2015December9215155.png', 'Bateria Oster No. 45', 45, '2015-12-09', '2015-12-09', 1, 0),
(46, '2015December9215955.png', 'Bateria Oster No.46', 46, '2015-12-09', '2015-12-09', 1, 0),
(47, '2015December921656.png', 'Bateria Oster No.47', 47, '2015-12-09', '2015-12-09', 1, 0),
(48, '2015December9211356.png', 'Bateria Oster No.48', 48, '2015-12-09', '2015-12-09', 1, 0),
(49, '2015December9212156.png', 'Bateria Oster No.49', 49, '2015-12-09', '2015-12-09', 1, 0),
(50, '2015December9213056.png', 'Bateria Oster No.50', 50, '2015-12-09', '2015-12-09', 1, 0),
(51, '2015December9214056.png', 'Bateria Oster No.51', 51, '2015-12-09', '2015-12-09', 1, 0),
(52, '2015December9214257.png', 'Horno Microondas No. 52', 52, '2015-12-09', '2015-12-09', 1, 0),
(53, '2015December9214957.png', 'Horno Microondas No. 53', 53, '2015-12-09', '2015-12-09', 1, 0),
(54, '2015December921058.png', 'Telefono VeryKool No.54', 54, '2015-12-09', '2015-12-09', 1, 0),
(55, '2015December921858.png', 'Telefono VeryKool No.55', 55, '2015-12-09', '2015-12-09', 1, 0),
(56, '2015December9211558.png', 'Telefono VeryKool No.56', 56, '2015-12-09', '2015-12-09', 1, 0),
(57, '2015December9212258.png', 'Telefono VeryKool No.57', 57, '2015-12-09', '2015-12-09', 1, 0),
(58, '2015December9213058.png', 'Telefono VeryKool No.58', 58, '2015-12-09', '2015-12-09', 1, 0),
(59, '2015December9213858.png', 'Telefono VeryKool No.59', 59, '2015-12-09', '2015-12-09', 1, 0),
(60, '2015December9214458.png', 'Telefono VeryKool No. 60', 60, '2015-12-09', '2015-12-09', 1, 0),
(61, '2015December9215458.png', 'Telefono VeryKool No.61', 61, '2015-12-09', '2015-12-09', 1, 0),
(62, '2015December921159.png', 'Telefono VeryKool No.62', 62, '2015-12-09', '2015-12-09', 1, 0),
(63, '2015December921859.png', 'Telefono VeryKool No.63', 63, '2015-12-09', '2015-12-09', 1, 0),
(64, '2015December9211559.png', 'Telefono VeryKool No.64', 64, '2015-12-09', '2015-12-09', 1, 0),
(65, '2015December9212159.png', 'Telefono VeryKool No.65', 65, '2015-12-09', '2015-12-09', 1, 0),
(66, '2015December9212859.png', 'Telefono VeryKool No.66', 66, '2015-12-09', '2015-12-09', 1, 0),
(67, '2015December9213659.png', 'Telefono VeryKool No.67', 67, '2015-12-09', '2015-12-09', 1, 0),
(68, '2015December922101.png', 'Tablet No.68', 68, '2015-12-09', '2015-12-09', 1, 0),
(69, '2015December922191.png', 'Tablet No.69', 69, '2015-12-09', '2015-12-09', 1, 0),
(70, '2015December922261.png', 'Tablet No.70', 70, '2015-12-09', '2015-12-09', 1, 0),
(71, '2015December922341.png', 'Tablet No.71', 71, '2015-12-09', '2015-12-09', 1, 0),
(72, '2015December922431.png', 'Tablet No.72', 72, '2015-12-09', '2015-12-09', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
