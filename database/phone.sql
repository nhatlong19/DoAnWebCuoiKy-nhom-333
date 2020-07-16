
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dienthoai`
--
CREATE DATABASE IF NOT EXISTS `phone` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phone`;



CREATE TABLE IF NOT EXISTS `nguoidung` (
  `idnd` int(11) NOT NULL AUTO_INCREMENT,
  `tennd` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` int(11) NOT NULL,
  PRIMARY KEY (`idnd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`idnd`, `tennd`, `username`, `password`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`, `phanquyen`) VALUES
(3, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2014-05-02', 'nam', 'thanhdat21293@gmail.com', 978164307, 'an thuong', '2014-05-26', 0),
(4, 'Thành Đạt', 'thanhdat21293', '96e79218965eb72c92a549dd5a330112', '1993-12-02', 'nam', 'thanhdat21293@gmail.com', 978164307, 'an thượng', '2014-06-01', 1);
