-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2022 pada 08.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `license`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atsa`
--

CREATE TABLE `atsa` (
  `id` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `volume` varchar(3) NOT NULL,
  `harga` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `perangkat` varchar(50) NOT NULL,
  `tahun` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `atsa`
--

INSERT INTO `atsa` (`id`, `deskripsi`, `satuan`, `volume`, `harga`, `start_date`, `end_date`, `perangkat`, `tahun`) VALUES
(1, 'FortiGate', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2018'),
(2, 'Oracle', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2018'),
(3, 'RedHat', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2018'),
(4, 'VMware', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2018'),
(5, 'IBM', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2018'),
(7, 'IBMFilenet Content Manager', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(8, 'DB Oracle', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(9, 'RedHat', 'Bulan', '12', 0, '2023-01-15', '2023-12-31', 'Sofware', '2019'),
(10, 'Veiris', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(11, '- Production Support Coverage Vmware Realize Suite 2019 Standard (183503237 VR19-STD-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(12, '- Production Support Coverage Vmware vSphere 7 Enterprise Plus for vCloud Suites (186197151 VS7-EPL-VS-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(13, '- Production Support Coverage Vmware site Recovery Manager 8 Enterprise (183664752 VC-SRM8-25E-PSSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(14, '- Production Support Coverage Vmware site Recovery Manager 8 Enterprise (183664751 VC-SRM8-25E-PSSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(15, '- Production Support Coverage Vmware site Recovery Manager 8 Enterprise (183664750 VC-SRM8-25E-PSSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(16, '- Production Support Coverage Vmware site Recovery Manager 8 Enterprise (183664749 VC-SRM8-25E-PSSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(17, '- Production Support Coverage Vmware Realize Suite 2019 Standard (183664746 VR19-STD-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(18, '- Production Support Coverage Vmware Realize Log Insight 8 per CPU (83664748 VR-LIS8-CPU-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(19, '- Production Support Coverage Vmware vSphere 7 Enterprise Plus for vCloud Suites (186193318 VS7-EPL-VS-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(20, '- Production Support Coverage Vmware Center Server 7 Standard for vSphere 7 (187765626 VCS7-STD-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(21, '- Production Support Coverage Vmware Realize Suite 2019 Standard (183706980 VR19-STD-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(22, '- Production Support Coverage Vmware vSphere 7 Enterprise Plus for vCloud Suites (186192519 VS7-EPL-VS-P-SSS-C)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(23, 'Cisco (Corrective Engineer Support)', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(24, 'Local Support Code Generator', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2019'),
(25, 'Sound Authentication', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(26, 'SODA', '', '', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(27, 'Face Matching dan Mail Server', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(28, 'RH00001 (Red Hat Enterprise Linux for Virtual Datacenters, Premium - 1 year) - Qty 9', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(29, 'RH00001 (Red Hat Enterprise Linux for Virtual Datacenters, Premium - 1 year) - Qty 7', 'Bulan', '12', 0, '2023-01-15', '2023-12-31', 'Sofware', '2020'),
(30, 'RH00001 (Red Hat Enterprise Linux for Virtual Datacenters, Premium - 1 year) - Qty 3', 'Bulan', '12', 0, '2023-01-23', '2023-12-31', 'Sofware', '2020'),
(31, 'OTAC', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(32, 'E-MET OFFLINE', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(33, 'APPDYN', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(34, 'KEYSTAMP', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(35, 'CODE GENERATOR', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(36, 'CLOUD NATIVE PLATFORM', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(37, 'Corrective Engineer Support with SLA 24x7x4 for 1 year at Jakarta and Cisco & other product', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Sofware', '2020'),
(38, 'Cisco - SN : FGL223281KE', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(39, 'Cisco - SN : FGL223281KF', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(40, 'Cisco - SN : FGL223281F9', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(41, 'Cisco - SN : FDO222844AJ', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(42, 'Cisco - SN : FDO222915FM', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(43, 'Cisco - SN : FDO222844AZ', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(44, 'Cisco - SN : FOC2233S2NT', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(45, 'Cisco - SN : FCW2230B0X4', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(46, 'Cisco - SN : JPG222800A1', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(47, 'Cisco - SN : JPG2229003F', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(48, 'Cisco - SN : WZP22200VBF', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(49, 'Cisco - SN : WZP22200VBG', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(50, 'Cisco - SN : WZP22200V7F', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(51, 'Cisco - SN : WZP22200V70', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(52, 'Cisco - SN : WZP22200VB5', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(53, 'Cisco - SN : WZP22200V92', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(54, 'Cisco - SN : WZP22211DNK', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(55, 'Cisco - SN : WZP22211DPC', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(56, 'Cisco - SN : WZP22211DPE', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(57, 'Cisco - SN : WZP221719HH', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(58, 'Cisco - SN : WZP22200VBN', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(59, 'Cisco - SN : WZP22211DNG', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(60, 'Cisco - SN : WZP22211DPD', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(61, 'Cisco - SN : WZP22200VAV', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(62, 'Cisco - SN : WZP22211DPP', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(63, 'Cisco - SN : WZP22211DNZ', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(64, 'Cisco - SN : WZP22211DPA', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(65, 'Pure Storage - SN : PCHFL182200BD', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(66, 'Pure Storage - SN : PCHFL18210090', 'Bulan', '12', 0, '2023-01-01', '2023-12-31', 'Hardware', '2018'),
(67, 'Cisco (Corrective Engineer Support)', 'Bulan', '13', 0, '2022-11-23', '2023-12-31', 'Hardware', '2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `atsb`
--

CREATE TABLE `atsb` (
  `id` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `perangkat` varchar(100) NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `atsb`
--

INSERT INTO `atsb` (`id`, `deskripsi`, `satuan`, `volume`, `harga`, `start_date`, `end_date`, `perangkat`, `tahun`) VALUES
(1, 'Tableau', 'Bulan', '12', 0, '2023-09-01', '2024-08-31', 'Sofware', 2018),
(2, 'Tableau Professional Desktop', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2018),
(3, 'Tableau Server Web Interactor', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2018),
(4, 'SOA Suite Software AG', 'Bulan', '13', 0, '2022-12-06', '2023-12-31', 'Sofware', 2018),
(5, 'EJBCA', 'Bulan', '14', 0, '2022-10-01', '2023-12-31', 'Sofware', 2018),
(6, 'Ultimaco HSM', 'Bulan', '14', 0, '2022-10-01', '2023-12-31', 'Sofware', 2018),
(7, 'F5-BIG BT I5800', 'Bulan', '12', 0, '0000-00-00', '0000-00-00', 'Sofware', 2019),
(8, '- F5-SVC-BIG-PRE-L1-3 f5-obwu-l tsw', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(9, '- F5-SVC-BIG-PRE-L1-3 f5-l yno-wj mb', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(10, '- F5-SVC-BIG-PRE-L1-3 f5-ddi m-qkzl', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(11, '- F5-SVC-BIG-RMA-3 f5-obwu-l tsw', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(12, '- F5-SVC-BIG-RMA-3 f5-l yno-wj mb', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(13, '- F5-SVC-BIG-RMA-3 f5-ddi m-qkzl', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(14, '- PF5-SVC-BIG-PRE-L1-3 Annual Maintenance F5- BIG-BT-I5800 f5-zgep-vofp', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(15, '- PF5-SVC-BIG-PRE-L1-3 Annual Maintenance F5- BIG-BT-I5800 f5-tzuv-firv', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(16, '- F5-SVC-BIG-PRE-L1-3 Annual Maintenance F5- BIG-BT-I5800 f5-azkl-kazr', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(17, '- F5-SVC-BIQ-VE-PREL13 Annual Maintenance F5-BIQ-VE-XS ZYQRMGAJ', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(18, '- F5-SVC-BIQ-VE-PREL13 Annual Maintenance F5-ADD-BIQ-VE-20 ZXCUQAUI', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(19, '- F5-SVC-BIQ-VE-PREL13 Annual Maintenance F5-BIQ-VE-LOG-NODE ZDSETTOF', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(20, 'F5-SVC-BIG-RMA-3 HW REPLACEMENT F5-BIG-BT-I5800 f5-zgep-vofp', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(21, 'F5-SVC-BIG-RMA-3 HW REPLACEMENT F5-BIG-BT-I5800 f5-tzuv-firv', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(22, 'F5-SVC-BIG-RMA-3 HW REPLACEMENT F5-BIG-BT-I5800 f5-azkl-kazr', 'Bulan', '12', 0, '2023-09-26', '2024-09-25', 'Sofware', 2019),
(23, 'Palo Alto', 'Bulan', '12', 0, '2023-02-17', '2024-02-16', 'Sofware', 2019),
(24, 'Palo Alto - Cost effective for 12 months', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2019),
(25, 'Splunk Enterprise', 'Bulan', '12', 0, '2023-08-12', '2024-08-11', 'Sofware', 2019),
(26, 'Ubuntu Advance', 'Bulan', '12', 0, '2023-07-18', '2024-07-17', 'Sofware', 2019),
(27, 'Maintenance SQRC', 'Bulan', '13', 0, '2022-12-17', '2023-12-31', 'Sofware', 2019),
(28, 'Utimaco HSM', 'Bulan', '13', 0, '2022-12-19', '2023-12-31', 'Sofware', 2019),
(29, 'EJBCA', 'Bulan', '13', 0, '2022-12-19', '2023-12-31', 'Sofware', 2019),
(30, 'TMS-RA', 'Bulan', '13', 0, '2022-12-19', '2023-12-31', 'Sofware', 2019),
(31, 'SOA Suite Software AG', 'Bulan', '13', 0, '2022-12-06', '2023-12-31', 'Sofware', 2019),
(32, 'Network Monitoring System', 'Bulan', '12', 0, '2023-02-01', '2024-01-31', 'Sofware', 2020),
(33, 'Solarwind', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(34, 'Tableau', 'Bulan', '12', 0, '2023-09-01', '2024-08-31', 'Sofware', 2020),
(35, 'Server - Web Interactor', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(36, 'Server - Web Interactor Maintenance', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(37, 'Ubuntu Advantage (Virtual)', 'Bulan', '12', 0, '2022-11-20', '2023-10-19', 'Sofware', 2020),
(38, 'VMware vCloud Suite 2019 Standard - Each vCloud Suite 2019 Standard contains vSphere 6 Enterprise Plus for vCloud Suite and vRealize Suite 2019 Standard. SnS Required & Sold Separately.', 'Bulan', '12', 0, '2023-04-01', '2024-03-31', 'Sofware', 2020),
(39, '\"Production Support/Subscription for VMware vCloud Suite 2019 Standard for 1 year - Technical Support, \n 24 Hour Sev 1 Support - 7 days a week.\"', 'Bulan', '12', 0, '2023-04-02', '2024-04-01', 'Sofware', 2020),
(40, 'VMware Site Recovery Manager 8 Enterprise (25 VM Pack) - SnS is required and sold separately. Requires vSphere 6 or higher.', 'Bulan', '12', 0, '2023-04-03', '2024-04-02', 'Sofware', 2020),
(41, 'Production Support/Subscription for VMware Site Recovery Manager 8 Enterprise (25 VM Pack) for 1 year - Technical Support, 24 Hour Sev 1 Support - 7 days a week.', 'Bulan', '12', 0, '2023-04-04', '2024-04-03', 'Sofware', 2020),
(42, 'Heavy.ai - Data Analytic Teradata', 'Bulan', '12', 0, '2023-04-30', '2024-04-29', 'Sofware', 2020),
(43, 'GARTNER', 'Bulan', '12', 0, '2023-03-01', '2024-02-28', 'Sofware', 2020),
(44, 'E-Passport', 'Bulan', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(45, 'SignServer (single deployment)', 'Bulan', '14', 0, '2022-10-07', '2023-12-31', 'Sofware', 2020),
(46, 'Utimaco HSM (single deployment)', 'Bulan', '14', 0, '2022-10-07', '2023-12-31', 'Sofware', 2020),
(47, 'Professional Services (single deployment)', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(48, 'VMware vSphere 6 Essentials Plus Kit for 3 hosts w/1Yr Support (Qty 1)', 'Bulan', '14', 0, '2022-10-18', '2023-12-31', 'Sofware', 2020),
(49, 'RedHat IoT', '', '', 0, '0000-00-00', '0000-00-00', 'Sofware', 2020),
(50, 'Red Hat Enterprise Linux for Virtual Datacenters, Premium 1 Year (Qty 3)', 'Bulan', '15', 0, '2022-10-01', '2023-12-31', 'Sofware', 2020),
(51, 'Red Hat Enterprise Linux for Virtual Datacenters, Premium 1 Year (Qty 3)', 'Bulan', '15', 0, '2022-10-01', '2023-12-31', 'Sofware', 2020),
(52, 'Trendmicro - SN : ENOVE01904K12', 'Bulan', '12', 0, '2023-06-01', '2024-05-31', 'Hardware', 2018),
(53, 'Trendmicro - SN : ENOVE01904K12', 'Bulan', '12', 0, '2023-06-01', '2024-05-31', 'Hardware', 2019),
(54, 'TapeBackup - SN : DE64104165', 'Bulan', '12', 0, '2022-08-21', '2023-08-20', 'Hardware', 2020),
(55, 'TapeBackup - SN : DE64104167', 'Bulan', '12', 0, '2022-08-21', '2023-08-20', 'Hardware', 2021),
(56, 'TapeBackup - SN : DE64104163', 'Bulan', '12', 0, '2022-08-21', '2023-08-20', 'Hardware', 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fortianalyzer`
--

CREATE TABLE `fortianalyzer` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fortianalyzer`
--

INSERT INTO `fortianalyzer` (`id`, `name`, `Expiration`) VALUES
(1, 'Fortianalyzer\r\n', '2024-01-15'),
(2, 'a', '2027-01-01'),
(3, 'a', '2025-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fortigate`
--

CREATE TABLE `fortigate` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fortigate`
--

INSERT INTO `fortigate` (`id`, `name`, `expiration`) VALUES
(1, 'FortiCare Support', '2023-01-02'),
(2, 'Firmware & General Updates', '2023-01-02'),
(3, 'IPS', '2023-01-02'),
(4, 'Antivirus', '2023-01-02'),
(5, 'Web Filtering', '2023-01-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ngtm01`
--

CREATE TABLE `ngtm01` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contents` varchar(255) NOT NULL,
  `Common_Name` varchar(255) NOT NULL,
  `Expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ngtm01`
--

INSERT INTO `ngtm01` (`id`, `name`, `contents`, `Common_Name`, `Expiration`) VALUES
(1, 'New_Peruri.co.id_2020', 'RSA Certificate', '*.peruri.co.id', '2022-04-01'),
(2, 'renew_peruricoid_wildcard_2020', 'RSA Certificate', '*.peruri.co.id', '2022-04-01'),
(3, 'telkomakses.co.id_2021', 'RSA Certificate & Key', 'sign.telkomakses.co.id', '2023-01-08'),
(4, 'wildcard_e-meterai.co.id', 'RSA Certificate', '*.e-meterai.co.id', '2022-05-01'),
(5, 'wildcard_e-meterai.co.id_2022', 'RSA Certificate', '*.e-meterai.co.id', '2023-04-29'),
(6, 'wildcard_meteraidigital.id', 'RSA Certificate', '*.meteraidigital.id', '2023-04-29'),
(7, 'wildcard_perurica.co.id_2021', 'RSA Certificate', '*.perurica.co.id', '2022-11-18'),
(8, 'wildcard_scm.perurica.co.id', 'RSA Certificate', '*.scm.perurica.co.id', '2022-03-03'),
(9, 'wildcard_scm.perurica.co.id_2022', 'RSA Certificate', '*.scm.perurica.co.id', '2023-03-05'),
(10, 'a', 'a', 'a', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paloalto`
--

CREATE TABLE `paloalto` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paloalto`
--

INSERT INTO `paloalto` (`id`, `name`, `expiration`) VALUES
(1, 'STLL02R06-SFWL02', '2021-02-16'),
(2, 'STLL02R06-SFWL01', '2021-02-16'),
(3, 'SBYL03R04-SFWL01', '2021-02-16'),
(4, 'SBYL03R04-SFWL02', '2023-12-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panorama`
--

CREATE TABLE `panorama` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `panorama`
--

INSERT INTO `panorama` (`id`, `name`, `expiration`) VALUES
(1, 'VM Panorama', '2021-02-17'),
(3, 'a', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `redhat`
--

CREATE TABLE `redhat` (
  `id` int(50) NOT NULL,
  `Subscription_Number` varchar(255) NOT NULL,
  `Subscription_Name` varchar(255) NOT NULL,
  `Contract_Number` varchar(255) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `redhat`
--

INSERT INTO `redhat` (`id`, `Subscription_Number`, `Subscription_Name`, `Contract_Number`, `Quantity`, `Start_Date`, `End_Date`) VALUES
(2, '10144404', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12805923', 4, '2021-10-01', '2022-09-30'),
(3, '6876133', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12091466', 2, '2020-01-01', '2022-12-31'),
(4, '10531162', 'Red Hat Enterprise Linux Server, Premium (Physical or Virtual Nodes)', '11731994', 8, '2021-09-07', '2022-12-31'),
(5, '10531163', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '11731994', 6, '2021-09-07', '2022-12-31'),
(6, '10531187', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12521675', 9, '2021-12-01', '2022-12-31'),
(7, '10531188', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12548689', 3, '2021-12-23', '2022-12-31'),
(8, '10531190', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12538148', 7, '2021-12-15', '2022-12-31'),
(9, '10531248', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12098121', 4, '2022-01-15', '2022-12-31'),
(10, '10531253', 'Red Hat Enterprise Linux for Virtual Datacenters, Premium', '12098121', 6, '2022-01-15', '2022-12-31'),
(11, '11000446', 'Red Hat Developer Subscription for Individuals', 'Not Available', 1, '2022-04-04', '2023-04-04'),
(12, '11645790', 'Red Hat Developer Subscription for Individuals', 'Not Available', 1, '2022-08-29', '2023-08-29'),
(13, '11662611', 'Red Hat Developer Subscription for Individuals', 'Not Available', 1, '2022-08-31', '2023-08-31'),
(14, '9489317', 'Red Hat Beta Access', 'Not Available', 1, '2021-09-16', '2024-11-17'),
(15, '10343456', 'Red Hat Enterprise Linux Server, Premium (Physical or Virtual Nodes)', '12840435', 1, '2021-11-18', '2024-11-17'),
(18, '12121', 'AAASASABBB', '12121212121', 111, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resolution_time`
--

CREATE TABLE `resolution_time` (
  `id` int(11) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `service_desk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resolution_time`
--

INSERT INTO `resolution_time` (`id`, `priority`, `resolution`, `service_desk`) VALUES
(1, 'Critical', 'Maximal 8 Jam', 'Incident'),
(2, 'High', 'Maximal 12 Jam ', 'Incident'),
(3, 'Medium', 'Maximal 24 Jam', 'Incident'),
(4, 'Low', 'Maximal 48 Jam', 'Incident');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sla_operational`
--

CREATE TABLE `sla_operational` (
  `id` int(11) NOT NULL,
  `item_sla` varchar(255) NOT NULL,
  `tolok_ukur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sla_operational`
--

INSERT INTO `sla_operational` (`id`, `item_sla`, `tolok_ukur`) VALUES
(1, 'Availability of Service (AoS) Layanan ', '99,90%'),
(2, 'Serice Time', '24x7'),
(3, 'Response Time of service', '95%'),
(4, 'Response Time L1 Team', 'Maximal 15 Menit'),
(5, 'Response Time L2 Team', 'Maximal 15 Menit'),
(6, 'Response Time Kordinator MO', 'Maximal 15 Menit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sla_support`
--

CREATE TABLE `sla_support` (
  `id` int(11) NOT NULL,
  `service_desk` varchar(255) NOT NULL,
  `tolok_ukur` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sla_support`
--

INSERT INTO `sla_support` (`id`, `service_desk`, `tolok_ukur`, `keterangan`) VALUES
(1, 'Support Delivery', '72 Jam', 'Sejak tiket di create s.d UAT'),
(2, 'Incident', '8 s.d 48 Jam', 'Sejak tiket di create s.d Resolved'),
(3, 'Request: Op Level,DevOp, (< 2 bln), Full Dev (> 2 bln)', '95%', 'Sesuai schedule yang di sepakati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solarwind`
--

CREATE TABLE `solarwind` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `solarwind`
--

INSERT INTO `solarwind` (`id`, `name`, `expiration`) VALUES
(1, 'NetFlow module for Orion SLX', '2023-01-31'),
(2, 'Network Perfomance Monitor SLX', '2023-01-31'),
(3, 'Server & Application Monitor SAM400', '2023-01-31'),
(4, 'Storage Resource Monitor v6.0', '2023-01-31'),
(5, 'Virtualization Manager Primary - Up to 112 Sockets', '2023-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `splunk`
--

CREATE TABLE `splunk` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiration` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `splunk`
--

INSERT INTO `splunk` (`id`, `name`, `expiration`) VALUES
(1, 'Splunk Enterprise ', '2023-08-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `level`) VALUES
(1, 'Dimas Fajri Suryaharjono', 'dimasfajris', 'dimas.fajri031@gmail.com', '7d49e40f4b3d8f68c19406a58303f826', 'admin'),
(2, 'amel', 'amelia_agustiara@yahoo.com', 'amel', '$2y$10$.6FK66nB7KdvugcXmmNvnOnJSPjlpHCk5Cz4RVUEi9xn8CQKg0Z0S', 'viewer'),
(3, 'master', 'master123', 'master@yopmail.com', '$2y$10$zkag6TWhIsPjUXdZpWyQC.jNIUgCAmwZI9sfDFGaZi20sv9RS/zW2', 'viewer'),
(4, 'merryl', '12merryl', 'meryl@mail.com', '$2y$10$St1YoMhV9qegtnzMm2TiVOHqVVbzVd3ydCq4uXT0Uf1Cus2/GqXwK', 'viewer'),
(5, 'amelia ludia', 'amelial', 'admin@gmail.com', '$2y$10$z4SAu8w5RNqN0ptyqOJdhea4sXjn6uWw8aHl4kF0Lq077TejsrFqO', 'viewer'),
(6, 'dede', 'dede12', 'dede@yopmail.com', '$2y$10$mHkT4QY.GP/o7UXP.Ji26euNOmDMFUjdFcaJ1BEjq8HMVAxnyERlG', 'viewer'),
(7, 'denis', 'denisal', 'denis@yopmail.com', '$2y$10$wMLxuAagNikgtv50v..LlevokXHmileWd537ehSCShNdNTfwl5fim', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vm`
--

CREATE TABLE `vm` (
  `id` int(11) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `folder_name` text NOT NULL,
  `license_key` varchar(255) NOT NULL,
  `custom_label1` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `number` int(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_qty` int(50) NOT NULL,
  `support_level` varchar(255) NOT NULL,
  `license_coverage_end_date` date NOT NULL,
  `contract_end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vm`
--

INSERT INTO `vm` (`id`, `account_number`, `account_name`, `product`, `qty`, `unit`, `folder_name`, `license_key`, `custom_label1`, `type`, `number`, `order_date`, `order_qty`, `support_level`, `license_coverage_end_date`, `contract_end_date`) VALUES
(1, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Essentials', 1, 'INSTANCE(s)', 'HOMEPKI 2018', '', '', 'ORDER', 24441698, '2018-11-16', 1, '', '0000-00-00', '0000-00-00'),
(2, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Essentials', 1, 'INSTANCE(s)', 'HOMEPKI 2018', '', '', 'CONTRACT', 477395882, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(3, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Essentials', 1, 'INSTANCE(s)', 'HOMEPKI 2020', 'PKI', '', 'ORDER', 25198664, '2020-12-23', 1, '', '0000-00-00', '0000-00-00'),
(4, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Essentials', 1, 'INSTANCE(s)', 'HOMEPKI 2020', 'PKI', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2021-12-22', '2021-12-22'),
(5, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Standard', 1, 'INSTANCE(s)', 'HOMEDigitalisasi', '', '', 'ORDER', 24321446, '2018-07-27', 1, '', '0000-00-00', '0000-00-00'),
(6, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Standard', 1, 'INSTANCE(s)', 'HOMEDigitalisasi', '', '', 'CONTRACT', 471946502, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(7, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Standard', 1, 'INSTANCE(s)', 'HOMEExpand CA NPKI', '', '', 'ORDER', 24853744, '2019-12-26', 1, '', '0000-00-00', '0000-00-00'),
(8, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 6 Standard', 1, 'INSTANCE(s)', 'HOMEExpand CA NPKI', '', '', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(9, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 7 Essentials', 1, 'INSTANCE(s)', 'HOMEKEMLU', '', '', 'ORDER', 25498265, '2021-11-17', 1, '', '0000-00-00', '0000-00-00'),
(10, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vCenter Server 7 Essentials', 1, 'INSTANCE(s)', 'HOMEKEMLU', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'SUBSCRIPTION ONLY', '2022-11-16', '2022-11-16'),
(11, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'VMware Site Recovery Manager 8.x', 100, 'VM(s)', 'HOMEExpand 2020', '', '', 'ORDER', 25161296, '2020-11-24', 100, '', '0000-00-00', '0000-00-00'),
(12, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'VMware Site Recovery Manager 8.x', 100, 'VM(s)', 'HOMEExpand 2020', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-03-31', '2023-03-31'),
(13, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'VMware Site Recovery Manager 8.x', 100, 'VM(s)', 'HOMEExpand CA NPKI', '', '', 'ORDER', 24853744, '2019-12-26', 100, '', '0000-00-00', '0000-00-00'),
(14, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'VMware Site Recovery Manager 8.x', 100, 'VM(s)', 'HOMEExpand CA NPKI', '', '', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(15, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Log Insight 4 (CPU)', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'ORDER', 24321446, '2018-07-27', 12, '', '0000-00-00', '0000-00-00'),
(16, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Log Insight 4 (CPU)', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'CONTRACT', 471946502, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(17, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Log Insight 8 CPU', 2, 'CPU(s)', 'HOMEExpand CA NPKI', '', '', 'ORDER', 24853744, '2019-12-26', 2, '', '0000-00-00', '0000-00-00'),
(18, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Log Insight 8 CPU', 2, 'CPU(s)', 'HOMEExpand CA NPKI', '', '', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(19, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Operations 7 Standard (CPU)', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'ORDER', 24321446, '2018-07-27', 12, '', '0000-00-00', '0000-00-00'),
(20, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Operations 7 Standard (CPU)', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'CONTRACT', 471946502, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(21, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 4, 'PLU(S)', 'HOMECODE GENERATOR', 'STL', 'Location: STL', 'ORDER', 24855120, '2019-12-27', 4, '', '0000-00-00', '0000-00-00'),
(22, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMECODE GENERATOR', 'SBY', 'Location: SBY', 'ORDER', 24855120, '2019-12-27', 2, '', '0000-00-00', '0000-00-00'),
(23, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 4, 'PLU(S)', 'HOMECODE GENERATOR', 'STL', 'Location: STL', 'CONTRACT', 498525782, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(24, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMECODE GENERATOR', 'SBY', 'Location: SBY', 'CONTRACT', 498525782, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(25, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 10, 'PLU(S)', 'HOMEExpand 2020', 'DC', 'Location: STL', 'ORDER', 25161296, '2020-11-24', 10, '', '0000-00-00', '0000-00-00'),
(26, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 18, 'PLU(S)', 'HOMEExpand 2020', 'DRC', 'Location: SBY', 'ORDER', 25161296, '2020-11-24', 18, '', '0000-00-00', '0000-00-00'),
(27, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 18, 'PLU(S)', 'HOMEExpand 2020', 'DRC', 'Location: SBY', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-03-31', '2023-03-31'),
(28, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 10, 'PLU(S)', 'HOMEExpand 2020', 'DC', 'Location: STL', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-03-31', '2023-03-31'),
(29, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 8, 'PLU(S)', 'HOMEExpand CA NPKI', 'SBY', 'Location: SBY', 'ORDER', 24853744, '2019-12-26', 8, '', '0000-00-00', '0000-00-00'),
(30, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 8, 'PLU(S)', 'HOMEExpand CA NPKI', 'STL', 'Location: STL', 'ORDER', 24853744, '2019-12-26', 8, '', '0000-00-00', '0000-00-00'),
(31, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 8, 'PLU(S)', 'HOMEExpand CA NPKI', 'SBY', 'Location: SBY', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(32, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 8, 'PLU(S)', 'HOMEExpand CA NPKI', 'STL', 'Location: STL', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(33, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMEINKUBASI', 'DEV NON-PKI', 'Assigned To: NON-PKI', 'ORDER', 24834023, '2019-12-17', 2, '', '0000-00-00', '0000-00-00'),
(34, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMEINKUBASI', 'DEV PKI', 'Assigned To: PKI', 'ORDER', 24834023, '2019-12-17', 2, '', '0000-00-00', '0000-00-00'),
(35, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMEINKUBASI', 'DEV PKI', 'Assigned To: PKI', 'CONTRACT', 498036773, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(36, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vRealize Suite 2018 Standard(PLU)', 2, 'PLU(S)', 'HOMEINKUBASI', 'DEV NON-PKI', 'Assigned To: NON-PKI', 'CONTRACT', 498036773, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(37, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'ORDER', 24321446, '2018-07-27', 12, '', '0000-00-00', '0000-00-00'),
(38, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus', 12, 'CPU(s)', 'HOMEDigitalisasi', '', '', 'CONTRACT', 471946502, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(39, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 4, 'CPU(s)', 'HOMECODE GENERATOR', 'STL', 'Location: STL', 'ORDER', 24855120, '2019-12-27', 4, '', '0000-00-00', '0000-00-00'),
(40, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMECODE GENERATOR', 'SBY', 'Location: SBY', 'ORDER', 24855120, '2019-12-27', 2, '', '0000-00-00', '0000-00-00'),
(41, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 4, 'CPU(s)', 'HOMECODE GENERATOR', 'STL', 'Location: STL', 'CONTRACT', 498525782, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(42, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMECODE GENERATOR', 'SBY', 'Location: SBY', 'CONTRACT', 498525782, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(43, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 18, 'CPU(s)', 'HOMEExpand 2020', 'DRC', 'Location: SBY', 'ORDER', 25161296, '2020-11-24', 18, '', '0000-00-00', '0000-00-00'),
(44, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 10, 'CPU(s)', 'HOMEExpand 2020', 'DC', 'Location: STL', 'ORDER', 25161296, '2020-11-24', 10, '', '0000-00-00', '0000-00-00'),
(45, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 18, 'CPU(s)', 'HOMEExpand 2020', 'DRC', 'Location: SBY', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-03-31', '2023-03-31'),
(46, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 10, 'CPU(s)', 'HOMEExpand 2020', 'DC', 'Location: STL', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-03-31', '2023-03-31'),
(47, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 8, 'CPU(s)', 'HOMEExpand CA NPKI', 'STL', 'Location: STL', 'ORDER', 24853744, '2019-12-26', 8, '', '0000-00-00', '0000-00-00'),
(48, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 8, 'CPU(s)', 'HOMEExpand CA NPKI', 'SBY', 'Location: SBY', 'ORDER', 24853744, '2019-12-26', 8, '', '0000-00-00', '0000-00-00'),
(49, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 8, 'CPU(s)', 'HOMEExpand CA NPKI', 'STL', 'Location: STL', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(50, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 8, 'CPU(s)', 'HOMEExpand CA NPKI', 'SBY', 'Location: SBY', 'CONTRACT', 498455010, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(51, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMEINKUBASI', 'DEV NON-PKI', 'Assigned To: NON-PKI', 'ORDER', 24834023, '2019-12-17', 2, '', '0000-00-00', '0000-00-00'),
(52, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMEINKUBASI', 'DEV PKI', 'Assigned To: PKI', 'ORDER', 24834023, '2019-12-17', 2, '', '0000-00-00', '0000-00-00'),
(53, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMEINKUBASI', 'DEV NON-PKI', 'Assigned To: NON-PKI', 'CONTRACT', 498036773, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(54, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Enterprise Plus for vCloud Suites', 2, 'CPU(s)', 'HOMEINKUBASI', 'DEV PKI', 'Assigned To: PKI', 'CONTRACT', 498036773, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(55, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Essentials PLUS', 6, 'CPU(s)', 'HOMEPKI 2018', '', '', 'ORDER', 24441698, '2018-11-16', 6, '', '0000-00-00', '0000-00-00'),
(56, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Essentials PLUS', 6, 'CPU(s)', 'HOMEPKI 2018', '', '', 'CONTRACT', 477395882, '0000-00-00', 0, 'Production Support', '2022-12-31', '2022-12-31'),
(57, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Essentials PLUS', 6, 'CPU(s)', 'HOMEPKI 2020', '', '', 'ORDER', 25198664, '2020-12-23', 6, '', '0000-00-00', '0000-00-00'),
(58, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Essentials PLUS', 6, 'CPU(s)', 'HOMEPKI 2020', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2021-12-22', '2021-12-22'),
(59, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEExpand 2020BWMGMT', '', '', 'ORDER', 25170867, '2020-11-30', 1, '', '0000-00-00', '0000-00-00'),
(60, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEExpand 2020BWMGMT', '', '', 'ORDER', 25170673, '2020-11-30', 1, '', '0000-00-00', '0000-00-00'),
(61, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEExpand 2020BWMGMT', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'SUBSCRIPTION ONLY', '2023-11-29', '2023-11-29'),
(62, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEExpand 2020BWMGMT', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'SUBSCRIPTION ONLY', '2023-11-29', '2023-11-29'),
(63, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEPKI 2021', 'PKI RA New DC', 'Location: STL', 'ORDER', 25465848, '2021-10-13', 2, '', '0000-00-00', '0000-00-00'),
(64, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 6 Standard', 2, 'CPU(s)', 'HOMEPKI 2021', 'PKI RA New DC', 'Location: STL', 'CONTRACT', 2147483647, '0000-00-00', 0, 'Production Support', '2023-11-10', '2023-11-10'),
(65, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 7 Essentials Plus', 6, 'CPU(s)', 'HOMEKEMLU', '', '', 'ORDER', 25498265, '2021-11-17', 6, '', '0000-00-00', '0000-00-00'),
(66, '943085301', 'Perusahaan Umum Percetakan Uang Republik', 'vSphere 7 Essentials Plus', 6, 'CPU(s)', 'HOMEKEMLU', '', '', 'CONTRACT', 2147483647, '0000-00-00', 0, 'SUBSCRIPTION ONLY', '2022-11-16', '2022-11-16'),
(67, 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 'a', 0, '2022-01-01', 0, 'a', '2020-01-01', '2021-01-01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `atsa`
--
ALTER TABLE `atsa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `atsb`
--
ALTER TABLE `atsb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fortianalyzer`
--
ALTER TABLE `fortianalyzer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fortigate`
--
ALTER TABLE `fortigate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ngtm01`
--
ALTER TABLE `ngtm01`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paloalto`
--
ALTER TABLE `paloalto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panorama`
--
ALTER TABLE `panorama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `redhat`
--
ALTER TABLE `redhat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resolution_time`
--
ALTER TABLE `resolution_time`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sla_operational`
--
ALTER TABLE `sla_operational`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sla_support`
--
ALTER TABLE `sla_support`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solarwind`
--
ALTER TABLE `solarwind`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `splunk`
--
ALTER TABLE `splunk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vm`
--
ALTER TABLE `vm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `atsa`
--
ALTER TABLE `atsa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `atsb`
--
ALTER TABLE `atsb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `fortianalyzer`
--
ALTER TABLE `fortianalyzer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fortigate`
--
ALTER TABLE `fortigate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ngtm01`
--
ALTER TABLE `ngtm01`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `paloalto`
--
ALTER TABLE `paloalto`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `panorama`
--
ALTER TABLE `panorama`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `redhat`
--
ALTER TABLE `redhat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `resolution_time`
--
ALTER TABLE `resolution_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sla_operational`
--
ALTER TABLE `sla_operational`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sla_support`
--
ALTER TABLE `sla_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `solarwind`
--
ALTER TABLE `solarwind`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `splunk`
--
ALTER TABLE `splunk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `vm`
--
ALTER TABLE `vm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
