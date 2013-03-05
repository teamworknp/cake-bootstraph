-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2013 at 06:17 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `account_group_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `suspend` tinyint(4) NOT NULL,
  `code` int(11) NOT NULL,
  `opening_balance` decimal(12,2) NOT NULL,
  `note` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `account_group_id`, `currency_id`, `suspend`, `code`, `opening_balance`, `note`) VALUES
(1002, 'Kas USD', 1, 2, 0, 1002, '0.00', NULL),
(1003, 'Kas Transfer Post Silang', 1, 1, 0, 1003, '0.00', NULL),
(1201, 'Bank IDR', 1, 1, 0, 1201, '0.00', NULL),
(1202, 'Bank USD', 1, 2, 0, 1202, '0.00', NULL),
(1301, 'Piutang Usaha  IDR', 2, 1, 0, 1301, '0.00', NULL),
(1302, 'Piutang Usaha USD', 2, 2, 0, 1302, '0.00', NULL),
(1401, 'Piutang Karyawan', 3, 1, 0, 1401, '0.00', NULL),
(1402, 'Piutang rupa-rupa', 3, 1, 0, 1402, '0.00', NULL),
(1501, 'Inventory', 4, 1, 0, 1501, '0.00', NULL),
(1601, 'Asuransi  dibayar dimuka', 6, 1, 0, 1601, '0.00', NULL),
(1602, 'Sewa dibayar dimuka', 6, 1, 0, 1602, '0.00', NULL),
(1603, 'Pajak dibayar di muka', 6, 1, 0, 103, '0.00', NULL),
(1604, 'Uang Muka PPh pasal 23', 6, 1, 0, 1604, '0.00', NULL),
(1605, 'Uang muka PPh pasal 25', 6, 1, 0, 1605, '0.00', NULL),
(1606, 'Uang Muka PPN', 6, 1, 0, 1606, '0.00', NULL),
(1607, 'PPN (IN)', 6, 1, 0, 1607, '0.00', NULL),
(1608, 'ppnBM (Out)', 6, 1, 0, 1608, '0.00', NULL),
(1620, 'Tanah', 5, 1, 0, 1620, '0.00', NULL),
(1621, 'Bangunan', 5, 1, 0, 1621, '0.00', NULL),
(1622, 'Kendaraan', 5, 1, 0, 1622, '0.00', NULL),
(1623, 'Inventaris', 5, 1, 0, 1623, '0.00', NULL),
(1701, 'Akum. Penyusutan Bangunan', 7, 1, 0, 1701, '0.00', NULL),
(1702, 'Akum. Penyusutan Kendaraan', 7, 1, 0, 1702, '0.00', NULL),
(1703, 'Akum. Penyusutan Peralatan Kantor', 7, 1, 0, 1703, '0.00', NULL),
(2101, 'Hutang PPh Pasal 21', 9, 1, 0, 2101, '0.00', NULL),
(2102, 'Hutang PPh Pasal 23', 9, 1, 0, 2102, '0.00', NULL),
(2103, 'Hutang PPh Pasal 25', 9, 1, 0, 2103, '0.00', NULL),
(2104, 'Hutang PPh Pasal 29', 9, 1, 0, 2104, '0.00', NULL),
(2105, 'Hutang PPh pasal 4(2)', 9, 1, 0, 2105, '0.00', NULL),
(2106, 'Hutang PPN', 9, 1, 0, 2106, '0.00', NULL),
(2107, 'PPN (Out)', 9, 1, 0, 2107, '0.00', NULL),
(2108, 'Hutang Biaya Asuransi', 20, 1, 0, 2108, '0.00', NULL),
(2109, 'Hutang Biaya Air', 20, 1, 0, 2109, '0.00', NULL),
(2110, 'Hutang Biaya Listrik', 20, 1, 0, 2110, '0.00', NULL),
(2111, 'Hutang Biaya Telekomunikasi', 20, 1, 0, 2111, '0.00', NULL),
(2112, 'Hutang Biaya Sewa', 20, 1, 0, 2112, '0.00', NULL),
(2113, 'Hutang Pemegang Saham', 20, 1, 0, 2113, '0.00', NULL),
(2114, 'ppnBM (IN)', 20, 1, 0, 2114, '0.00', NULL),
(2299, 'Hutang Lain-lain', 20, 1, 0, 2299, '0.00', NULL),
(3001, 'Modal Saham', 10, 1, 0, 3001, '0.00', NULL),
(7102, 'Realize Gain Lost (Foregin Exchange) USD', 17, 2, 0, 7102, '0.00', NULL),
(7201, 'Unrealize Gain Lost (Foregin Exchange) IDR', 18, 1, 0, 7201, '0.00', NULL),
(7202, 'Unrealize Gain Lost (Foregin Exchange) USD', 18, 2, 0, 7202, '0.00', NULL),
(8001, 'Beban Administrasi Bank', 16, 1, 0, 8001, '0.00', NULL),
(8002, 'Beban bunga', 16, 1, 0, 8002, '0.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_groups`
--

CREATE TABLE IF NOT EXISTS `account_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `account_class_id` int(11) NOT NULL,
  `name2` varchar(100) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `account_groups`
--

INSERT INTO `account_groups` (`id`, `name`, `account_class_id`, `name2`, `code`) VALUES
(1, 'Kas dan Bank', 1, 'Cash and Bank', '10'),
(2, 'Piutang Usaha', 1, 'Account Receivable', '20'),
(3, 'Piutang Lainya', 1, 'Other Receiveable', '21'),
(4, 'Inventory', 1, 'Inventory', '24'),
(5, 'Aktiva Tetap', 1, 'Fixed Asset', '25'),
(6, 'Aktiva Lain-lain', 1, 'Other Asset', '26'),
(7, 'Akumulasi Penyusutan', 4, 'Accumulated Depreciation', '30'),
(8, 'Hutang Usaha', 2, 'Account Payable', '40'),
(9, 'Hutang Pajak', 2, 'Other Liability', '41'),
(10, 'Modal', 2, 'Equity', '50'),
(11, 'Pendapatan', 3, 'Revenue', '52'),
(12, 'Discount', 3, 'Other Revenue', '53'),
(13, 'Pendapatan Lain-lain', 4, 'Cost of Good Sales', '60'),
(14, 'Harga Pokok Penjualan', 4, 'Expense', '62'),
(15, 'Biaya-Biaya', 3, 'Other Income', '70'),
(16, 'Beban Lain-lain', 4, 'Other Expense', '71'),
(17, 'Realize Gain Lost', 4, NULL, NULL),
(18, 'Unrealize Gain Lost', 4, NULL, NULL),
(20, 'Hutang Lainya', 2, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
