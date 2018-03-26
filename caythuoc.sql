-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 03:29 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caythuoc`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_benh` (IN `intenbenh` VARCHAR(50), IN `inbieuhien` VARCHAR(50), IN `inpp` TEXT)  BEGIN
   INSERT INTO benh(tenbenh, bieuhien, pp)
   VALUES(intenbenh, inbieuhien, inpp);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_thuoc` (IN `inidthuoc` VARCHAR(5), IN `intenthuoc` VARCHAR(50), IN `incongdung` TEXT, IN `innguongoc` VARCHAR(50))  BEGIN
   INSERT INTO thuoc(idthuoc, tenthuoc, nguongoc, congdung) VALUES (inidthuoc , intenthuoc, innguongoc, incongdung);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   INSERT INTO thuocbenh(tenbenh, idthuoc)
   VALUES (intenbenh, inidthuoc);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_add_user` (IN `inEmail` VARCHAR(50), IN `inmatkhau` VARCHAR(20))  BEGIN
   INSERT INTO taikhoan(Email, matkhau)
   VALUES(inEmail, inmatkhau);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_benh` (IN `intenbenh` VARCHAR(50))  BEGIN
   DELETE FROM benh WHERE tenbenh = intenbenh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_thuoc` (IN `inidthuoc` VARCHAR(5))  BEGIN
   DELETE FROM thuoc WHERE idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   DELETE FROM thuocbenh WHERE tenbenh = intenbenh and idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_del_user` (IN `inEmail` VARCHAR(50))  BEGIN
   DELETE FROM taikhoan WHERE Email = inEmail;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_benh` (IN `intenbenh` VARCHAR(50), IN `inbieuhien` VARCHAR(50), IN `inpp` TEXT, IN `intenbenhcu` VARCHAR(50))  BEGIN
   UPDATE benh
   SET tenbenh = intenbenh, bieuhien = inbieuhien, pp = inpp
   WHERE tenbenh = intenbenhcu;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_thuoc` (IN `inidthuoc` VARCHAR(5), IN `intenthuoc` VARCHAR(50), IN `incongdung` TEXT, IN `innguongoc` VARCHAR(50))  BEGIN
   UPDATE thuoc
   SET tenthuoc = intenthuoc , congdung = incongdung, nguongoc = innguongoc
   WHERE idthuoc = inidthuoc;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_thuocbenh` (IN `intenbenh` VARCHAR(50), IN `inidthuoc` VARCHAR(5))  BEGIN
   UPDATE thuocbenh
   SET idthuoc = inidthuoc
   WHERE tenbenh = intenbenh;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_user` (IN `inEmailnew` VARCHAR(50), IN `inmatkhaunew` VARCHAR(20))  BEGIN
	UPDATE taikhoan
    SET matkhau = inmatkhaunew
    WHERE Email = inEmailnew;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `benh`
--

CREATE TABLE `benh` (
  `tenbenh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `bieuhien` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `pp` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `Email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `chude` varchar(20) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qtbenh`
--

CREATE TABLE `qtbenh` (
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tenbenh` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qtthuoc`
--

CREATE TABLE `qtthuoc` (
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idthuoc` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `idthuoc` varchar(5) CHARACTER SET utf8 NOT NULL,
  `tenthuoc` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nguongoc` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `congdung` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thuocbenh`
--

CREATE TABLE `thuocbenh` (
  `tenbenh` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `idthuoc` varchar(5) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benh`
--
ALTER TABLE `benh`
  ADD PRIMARY KEY (`tenbenh`),
  ADD KEY `tenbenh` (`tenbenh`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `qtbenh`
--
ALTER TABLE `qtbenh`
  ADD PRIMARY KEY (`Email`,`tenbenh`),
  ADD KEY `Email` (`Email`),
  ADD KEY `tenbenh` (`tenbenh`);

--
-- Indexes for table `qtthuoc`
--
ALTER TABLE `qtthuoc`
  ADD PRIMARY KEY (`Email`,`idthuoc`),
  ADD KEY `Email` (`Email`),
  ADD KEY `idthuoc` (`idthuoc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`idthuoc`),
  ADD KEY `idthuoc` (`idthuoc`);

--
-- Indexes for table `thuocbenh`
--
ALTER TABLE `thuocbenh`
  ADD KEY `tenbenh` (`tenbenh`),
  ADD KEY `idthuoc` (`idthuoc`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qtbenh`
--
ALTER TABLE `qtbenh`
  ADD CONSTRAINT `qtbenh_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qtbenh_ibfk_2` FOREIGN KEY (`tenbenh`) REFERENCES `benh` (`tenbenh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qtthuoc`
--
ALTER TABLE `qtthuoc`
  ADD CONSTRAINT `qtthuoc_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `taikhoan` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qtthuoc_ibfk_2` FOREIGN KEY (`idthuoc`) REFERENCES `thuoc` (`idthuoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thuocbenh`
--
ALTER TABLE `thuocbenh`
  ADD CONSTRAINT `thuocbenh_ibfk_1` FOREIGN KEY (`tenbenh`) REFERENCES `benh` (`tenbenh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thuocbenh_ibfk_2` FOREIGN KEY (`idthuoc`) REFERENCES `thuoc` (`idthuoc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
