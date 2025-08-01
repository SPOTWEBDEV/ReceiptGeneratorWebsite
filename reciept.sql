-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 01:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reciept`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `who` enum('admin','editor') NOT NULL DEFAULT 'editor',
  `status` enum('active','inactive','suspended') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `who`, `status`) VALUES
(1, 'thebest', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin', 'active'),
(2, 'beno', '21232f297a57a5a743894a0e4a801fc3', 'editor', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `deposit_id` varchar(50) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `usdt_amount` varchar(255) NOT NULL,
  `naira_amount` varchar(255) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','declined') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user`, `deposit_id`, `payment_method_id`, `usdt_amount`, `naira_amount`, `credit`, `created_at`, `status`) VALUES
(1, 2, 'DEP_6856B04E5722B', 3, '12000.00', '', '', '2025-06-21 13:14:54', 'pending'),
(2, 2, 'DEP_6856B05A4D828', 3, '12000.00', '', '', '2025-06-21 13:15:06', 'pending'),
(3, 2, 'DEP_6856B06E6F4FC', 3, '12000.00', '', '', '2025-06-21 13:15:26', 'pending'),
(4, 2, 'DEP_6856B075C1BFA', 3, '12000.00', '', '', '2025-06-21 13:15:33', 'pending'),
(5, 2, 'DEP_6856B07B3ED10', 3, '12000.00', '', '', '2025-06-21 13:15:39', 'pending'),
(6, 2, 'DEP_6856B08173B7A', 3, '12000.00', '', '', '2025-06-21 13:15:45', 'pending'),
(7, 2, 'DEP_6856B0AC97358', 3, '12000.00', '', '', '2025-06-21 13:16:28', 'pending'),
(8, 2, 'DEP_6856B0EB39932', 3, '30000.00', '', '', '2025-06-21 13:17:31', 'pending'),
(9, 2, 'DEP_6856B2880ADE1', 3, '12000.00', '', '', '2025-06-21 13:24:24', 'pending'),
(10, 0, 'DEP_685C395C2F2EA', 3, '4.5', '6750', '100', '2025-06-25 18:01:00', 'pending'),
(11, 4, 'DEP_685C39AFB6DD0', 3, '4.5', '6750', '100', '2025-06-25 18:02:23', 'pending'),
(12, 4, 'DEP_685C607E5AA13', 3, '2.07', '3105', '46', '2025-06-25 20:47:58', 'pending'),
(13, 4, 'DEP_6889CF25E531A', 3, '1.395', '2092.5', '31', '2025-07-30 07:52:05', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `edit_template`
--

CREATE TABLE `edit_template` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `template_id` varchar(255) DEFAULT NULL,
  `main_template_id` varchar(255) NOT NULL,
  `html_contents` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edit_template`
--

INSERT INTO `edit_template` (`id`, `user`, `template_id`, `main_template_id`, `html_contents`, `image`) VALUES
(4, 4, 'TEM_6862DD717389F', '1', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                  <!-- Header -->\r\n                  <div class=\"flex justify-between items-center mb-4\">\r\n                           <div class=\"\">\r\n                                    <p class=\"text-xs font-semibold\">Receipt No: <span class=\"font-micr\">#SM75692</span></p>\r\n                                    <p class=\"text-xs\">Date of Issue: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                           </div>\r\n                           <div class=\"text-right flex-col gap-1\">\r\n                                    <img src=\"../assets/images/logo.png\" alt=\"Goodluck Logo\" style=\"width:200px; height: 100px;\" class=\" mb-1\" />\r\n                                    <p class=\"font-bold text-hospital\">GOODLUCK HOSPITAL</p>\r\n                                    <p>237 Roanoke Road, North York,<br> Ontario, Canada</p>\r\n                                    <p>demo@email.com</p>\r\n                                    <p>+1-613-555-0141</p>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Service Note -->\r\n                  <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                           <p class=\"font-semibold text-sm\">Important Information:</p>\r\n                           <p class=\"text-xs\">Please retain this receipt for your records. Payment is due in full unless covered\r\n                                    by your insurance provider. For questions, contact our billing department.</p>\r\n                  </div>\r\n         \r\n                  <!-- Patient Information -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Patient Details</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient First Name:</p>\r\n                                             <p>Micle</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient Last Name:</p>\r\n                                             <p>Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Birth:</p>\r\n                                             <p>22 July 1991 (Age 32)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Responsible Party:</p>\r\n                                             <p>Elizabeth Rebot</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Home Address:</p>\r\n                                             <p>4 Balmy Beach Rd, Owen Sound, Ontario</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Insurance Provider:</p>\r\n                                             <p>WPS</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Treatment and Billing Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Treatment Summary</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Treatment Type:</p>\r\n                                             <p>Dental Procedure</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Treatment:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Billing Due Date:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Payment Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Payment Information</p>\r\n                           <p>Account Name: GOODLUCK HOSPITAL</p>\r\n                           <p>Account Number: 25487512079</p>\r\n                           <p>Service Charge: $5000</p>\r\n                           <p>Outstanding Due: $30</p>\r\n                           <p>Tax: $40</p>\r\n                           <p class=\"font-bold text-xl mt-2\">Total Amount: $5700</p>\r\n                  </div>\r\n         \r\n                  <!-- Notes -->\r\n                  <div class=\"border-t pt-4 mt-4 text-xs\">\r\n                           <p><strong>Note:</strong> For reimbursement or insurance claims, please include this receipt and\r\n                                    reference the Receipt No. above. Contact us if any correction is needed.</p>\r\n                  </div>\r\n         </div>', 'Screenshot 2025-06-27 041309.png'),
(5, 4, 'TEM_6862E1DCE8911', '2', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                           <!-- Top Airline Header -->\r\n                           <div class=\"flex justify-between items-center border-b pb-4 mb-4\">\r\n                                    <div>\r\n                                             <p class=\"text-2xl font-bold text-hospital tracking-wide\">GOODLUCK AIRLINES</p>\r\n                                             <p class=\"text-xs\">Booking Reference: <span class=\"font-micr\">#FL984320</span></p>\r\n                                    </div>\r\n                                    <div class=\"text-right\">\r\n                                             <img style=\"width:150px; height: 100px;\" src=\"../assets/images/logo.png\" alt=\"Logo\" class=\"h-10 mb-1\" />\r\n                                             <p class=\"text-xs\">237 Roanoke Road, North York<br>Ontario, Canada</p>\r\n                                             <p class=\"text-xs\">+1-613-555-0141</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Flight Info Block -->\r\n                           <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                                    <div class=\"flex justify-between items-center mb-2\">\r\n                                             <p class=\"text-lg font-semibold\">Flight: <span class=\"text-blue\">GL278</span></p>\r\n                                             <p class=\"text-base\">Date: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                                    </div>\r\n                                    <div class=\"flex justify-between\">\r\n                                             <div class=\"text-left\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">From</p>\r\n                                                      <p class=\"text-lg font-bold\">Toronto (YYZ)</p>\r\n                                                      <p class=\"text-xs\">18:45 - Terminal 3</p>\r\n                                             </div>\r\n                                             <div class=\"text-center\">\r\n                                                      <p class=\"text-xl font-bold text-hospital\">➝</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">To</p>\r\n                                                      <p class=\"text-lg font-bold\">London (LHR)</p>\r\n                                                      <p class=\"text-xs\">06:55 (+1 day)</p>\r\n                                             </div>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Passenger + Ticket Info -->\r\n                           <div class=\"grid grid-cols-3 gap-2 mb-6\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passenger Name</p>\r\n                                             <p>Micle Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passport No.</p>\r\n                                             <p>XP9203845</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Nationality</p>\r\n                                             <p>Canadian</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Seat</p>\r\n                                             <p>18A (Window)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Gate</p>\r\n                                             <p>19A</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Class</p>\r\n                                             <p>Economy</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Fare Summary -->\r\n                           <div class=\"border-t pt-4 mb-4\">\r\n                                    <p class=\"text-lg font-bold mb-2\">Payment Summary</p>\r\n                                    <div class=\"flex gap-2\">\r\n                                             <div>\r\n                                                      <p>Base Fare:</p>\r\n                                                      <p>Airport Fees:</p>\r\n                                                      <p>Taxes:</p>\r\n                                                      <p>Fuel Surcharge:</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p>$1200</p>\r\n                                                      <p>$150</p>\r\n                                                      <p>$120</p>\r\n                                                      <p>$80</p>\r\n                                             </div>\r\n                                    </div>\r\n                                    <div class=\"flex gap-2 font-bold text-xl mt-2\">\r\n                                             <p>Total Paid:</p>\r\n                                             <p>$1550</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Final Note -->\r\n                           <div class=\"star-line mt-6 text-xs\">\r\n                                    <p>Please arrive at the airport at least 2 hours prior to departure. Carry this ticket and a valid ID.\r\n                                    </p>\r\n                           </div>\r\n                  </div>', 'Screenshot 2025-06-28 104523.png'),
(6, 6, 'TEM_6862DD717389F', '1', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                  <!-- Header -->\r\n                  <div class=\"flex justify-between items-center mb-4\">\r\n                           <div class=\"\">\r\n                                    <p class=\"text-xs font-semibold\">Receipt No: <span class=\"font-micr\">#SM75692</span></p>\r\n                                    <p class=\"text-xs\">Date of Issue: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                           </div>\r\n                           <div class=\"text-right flex-col gap-1\">\r\n                                    <img src=\"../assets/images/logo.png\" alt=\"Goodluck Logo\" style=\"width:200px; height: 100px;\" class=\" mb-1\" />\r\n                                    <p class=\"font-bold text-hospital\">GOODLUCK HOSPITAL</p>\r\n                                    <p>237 Roanoke Road, North York,<br> Ontario, Canada</p>\r\n                                    <p>demo@email.com</p>\r\n                                    <p>+1-613-555-0141</p>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Service Note -->\r\n                  <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                           <p class=\"font-semibold text-sm\">Important Information:</p>\r\n                           <p class=\"text-xs\">Please retain this receipt for your records. Payment is due in full unless covered\r\n                                    by your insurance provider. For questions, contact our billing department.</p>\r\n                  </div>\r\n         \r\n                  <!-- Patient Information -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Patient Details</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient First Name:</p>\r\n                                             <p>Micle</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient Last Name:</p>\r\n                                             <p>Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Birth:</p>\r\n                                             <p>22 July 1991 (Age 32)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Responsible Party:</p>\r\n                                             <p>Elizabeth Rebot</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Home Address:</p>\r\n                                             <p>4 Balmy Beach Rd, Owen Sound, Ontario</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Insurance Provider:</p>\r\n                                             <p>WPS</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Treatment and Billing Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Treatment Summary</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Treatment Type:</p>\r\n                                             <p>Dental Procedure</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Treatment:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Billing Due Date:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Payment Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Payment Information</p>\r\n                           <p>Account Name: GOODLUCK HOSPITAL</p>\r\n                           <p>Account Number: 25487512079</p>\r\n                           <p>Service Charge: $5000</p>\r\n                           <p>Outstanding Due: $30</p>\r\n                           <p>Tax: $40</p>\r\n                           <p class=\"font-bold text-xl mt-2\">Total Amount: $5700</p>\r\n                  </div>\r\n         \r\n                  <!-- Notes -->\r\n                  <div class=\"border-t pt-4 mt-4 text-xs\">\r\n                           <p><strong>Note:</strong> For reimbursement or insurance claims, please include this receipt and\r\n                                    reference the Receipt No. above. Contact us if any correction is needed.</p>\r\n                  </div>\r\n         </div>', 'Screenshot 2025-06-27 041309.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `method` enum('bank','crypto') NOT NULL,
  `accountorwallet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `type`, `method`, `accountorwallet`) VALUES
(1, 'Access Bank', 'bank', '1234567890'),
(2, 'GTBank', 'bank', '0987654321'),
(3, 'Bitcoin', 'crypto', '1A1zP1...'),
(4, 'Ethereum', 'crypto', '0xABC123...');

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo`
--

CREATE TABLE `siteinfo` (
  `id` int(11) NOT NULL,
  `credit_value` varchar(255) NOT NULL,
  `nairaRate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siteinfo`
--

INSERT INTO `siteinfo` (`id`, `credit_value`, `nairaRate`) VALUES
(1, '0.045', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `template_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sell` tinyint(1) NOT NULL DEFAULT 0,
  `price` varchar(255) NOT NULL,
  `html_contents` varchar(9000) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `catergory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `user`, `template_id`, `title`, `sell`, `price`, `html_contents`, `tags`, `image`, `catergory`) VALUES
(1, 0, 'TEM_6862DD717389F', 'medical receipt', 1, '8', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                  <!-- Header -->\r\n                  <div class=\"flex justify-between items-center mb-4\">\r\n                           <div class=\"\">\r\n                                    <p class=\"text-xs font-semibold\">Receipt No: <span class=\"font-micr\">#SM75692</span></p>\r\n                                    <p class=\"text-xs\">Date of Issue: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                           </div>\r\n                           <div class=\"text-right flex-col gap-1\">\r\n                                    <img src=\"../assets/images/logo.png\" alt=\"Goodluck Logo\" style=\"width:200px; height: 100px;\" class=\" mb-1\" />\r\n                                    <p class=\"font-bold text-hospital\">GOODLUCK HOSPITAL</p>\r\n                                    <p>237 Roanoke Road, North York,<br> Ontario, Canada</p>\r\n                                    <p>demo@email.com</p>\r\n                                    <p>+1-613-555-0141</p>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Service Note -->\r\n                  <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                           <p class=\"font-semibold text-sm\">Important Information:</p>\r\n                           <p class=\"text-xs\">Please retain this receipt for your records. Payment is due in full unless covered\r\n                                    by your insurance provider. For questions, contact our billing department.</p>\r\n                  </div>\r\n         \r\n                  <!-- Patient Information -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Patient Details</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient First Name:</p>\r\n                                             <p>Micle</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Patient Last Name:</p>\r\n                                             <p>Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Birth:</p>\r\n                                             <p>22 July 1991 (Age 32)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Responsible Party:</p>\r\n                                             <p>Elizabeth Rebot</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Home Address:</p>\r\n                                             <p>4 Balmy Beach Rd, Owen Sound, Ontario</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Insurance Provider:</p>\r\n                                             <p>WPS</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Treatment and Billing Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Treatment Summary</p>\r\n                           <div class=\"grid grid-cols-3 gap-2\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Treatment Type:</p>\r\n                                             <p>Dental Procedure</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Date of Treatment:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Billing Due Date:</p>\r\n                                             <p>25 Feb 2022</p>\r\n                                    </div>\r\n                           </div>\r\n                  </div>\r\n         \r\n                  <!-- Payment Info -->\r\n                  <div class=\"mb-6\">\r\n                           <p class=\"text-lg font-bold mb-2\">Payment Information</p>\r\n                           <p>Account Name: GOODLUCK HOSPITAL</p>\r\n                           <p>Account Number: 25487512079</p>\r\n                           <p>Service Charge: $5000</p>\r\n                           <p>Outstanding Due: $30</p>\r\n                           <p>Tax: $40</p>\r\n                           <p class=\"font-bold text-xl mt-2\">Total Amount: $5700</p>\r\n                  </div>\r\n         \r\n                  <!-- Notes -->\r\n                  <div class=\"border-t pt-4 mt-4 text-xs\">\r\n                           <p><strong>Note:</strong> For reimbursement or insurance claims, please include this receipt and\r\n                                    reference the Receipt No. above. Contact us if any correction is needed.</p>\r\n                  </div>\r\n         </div>', 'invoice , medical, bill , hostipal', 'Screenshot 2025-06-27 041309.png', 'hospital'),
(2, 0, 'TEM_6862E1DCE8911', 'plan ticket recipt', 1, '6', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                           <!-- Top Airline Header -->\r\n                           <div class=\"flex justify-between items-center border-b pb-4 mb-4\">\r\n                                    <div>\r\n                                             <p class=\"text-2xl font-bold text-hospital tracking-wide\">GOODLUCK AIRLINES</p>\r\n                                             <p class=\"text-xs\">Booking Reference: <span class=\"font-micr\">#FL984320</span></p>\r\n                                    </div>\r\n                                    <div class=\"text-right\">\r\n                                             <img style=\"width:150px; height: 100px;\" src=\"../assets/images/logo.png\" alt=\"Logo\" class=\"h-10 mb-1\" />\r\n                                             <p class=\"text-xs\">237 Roanoke Road, North York<br>Ontario, Canada</p>\r\n                                             <p class=\"text-xs\">+1-613-555-0141</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Flight Info Block -->\r\n                           <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                                    <div class=\"flex justify-between items-center mb-2\">\r\n                                             <p class=\"text-lg font-semibold\">Flight: <span class=\"text-blue\">GL278</span></p>\r\n                                             <p class=\"text-base\">Date: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                                    </div>\r\n                                    <div class=\"flex justify-between\">\r\n                                             <div class=\"text-left\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">From</p>\r\n                                                      <p class=\"text-lg font-bold\">Toronto (YYZ)</p>\r\n                                                      <p class=\"text-xs\">18:45 - Terminal 3</p>\r\n                                             </div>\r\n                                             <div class=\"text-center\">\r\n                                                      <p class=\"text-xl font-bold text-hospital\">➝</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">To</p>\r\n                                                      <p class=\"text-lg font-bold\">London (LHR)</p>\r\n                                                      <p class=\"text-xs\">06:55 (+1 day)</p>\r\n                                             </div>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Passenger + Ticket Info -->\r\n                           <div class=\"grid grid-cols-3 gap-2 mb-6\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passenger Name</p>\r\n                                             <p>Micle Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passport No.</p>\r\n                                             <p>XP9203845</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Nationality</p>\r\n                                             <p>Canadian</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Seat</p>\r\n                                             <p>18A (Window)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Gate</p>\r\n                                             <p>19A</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Class</p>\r\n                                             <p>Economy</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Fare Summary -->\r\n                           <div class=\"border-t pt-4 mb-4\">\r\n                                    <p class=\"text-lg font-bold mb-2\">Payment Summary</p>\r\n                                    <div class=\"flex gap-2\">\r\n                                             <div>\r\n                                                      <p>Base Fare:</p>\r\n                                                      <p>Airport Fees:</p>\r\n                                                      <p>Taxes:</p>\r\n                                                      <p>Fuel Surcharge:</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p>$1200</p>\r\n                                                      <p>$150</p>\r\n                                                      <p>$120</p>\r\n                                                      <p>$80</p>\r\n                                             </div>\r\n                                    </div>\r\n                                    <div class=\"flex gap-2 font-bold text-xl mt-2\">\r\n                                             <p>Total Paid:</p>\r\n                                             <p>$1550</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Final Note -->\r\n                           <div class=\"star-line mt-6 text-xs\">\r\n                                    <p>Please arrive at the airport at least 2 hours prior to departure. Carry this ticket and a valid ID.\r\n                                    </p>\r\n                           </div>\r\n                  </div>', 'invoice , plan, bill , ticket', 'Screenshot 2025-06-28 104523.png', 'plan recipt'),
(3, 0, 'TEM_6862E1DCE8915', 'plan', 1, '6', '<div class=\"w-full max-w-4xl mx-auto bg-white p-6 rounded shadow text-sm text-gray\">\r\n                           <!-- Top Airline Header -->\r\n                           <div class=\"flex justify-between items-center border-b pb-4 mb-4\">\r\n                                    <div>\r\n                                             <p class=\"text-2xl font-bold text-hospital tracking-wide\">GOODLUCK AIRLINES</p>\r\n                                             <p class=\"text-xs\">Booking Reference: <span class=\"font-micr\">#FL984320</span></p>\r\n                                    </div>\r\n                                    <div class=\"text-right\">\r\n                                             <img style=\"width:150px; height: 100px;\" src=\"../assets/images/logo.png\" alt=\"Logo\" class=\"h-10 mb-1\" />\r\n                                             <p class=\"text-xs\">237 Roanoke Road, North York<br>Ontario, Canada</p>\r\n                                             <p class=\"text-xs\">+1-613-555-0141</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Flight Info Block -->\r\n                           <div class=\"bg-light p-4 rounded-sm mb-4\">\r\n                                    <div class=\"flex justify-between items-center mb-2\">\r\n                                             <p class=\"text-lg font-semibold\">Flight: <span class=\"text-blue\">GL278</span></p>\r\n                                             <p class=\"text-base\">Date: <span class=\"font-semibold\">25 Feb 2022</span></p>\r\n                                    </div>\r\n                                    <div class=\"flex justify-between\">\r\n                                             <div class=\"text-left\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">From</p>\r\n                                                      <p class=\"text-lg font-bold\">Toronto (YYZ)</p>\r\n                                                      <p class=\"text-xs\">18:45 - Terminal 3</p>\r\n                                             </div>\r\n                                             <div class=\"text-center\">\r\n                                                      <p class=\"text-xl font-bold text-hospital\">➝</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p class=\"text-xs font-semibold mb-1\">To</p>\r\n                                                      <p class=\"text-lg font-bold\">London (LHR)</p>\r\n                                                      <p class=\"text-xs\">06:55 (+1 day)</p>\r\n                                             </div>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Passenger + Ticket Info -->\r\n                           <div class=\"grid grid-cols-3 gap-2 mb-6\">\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passenger Name</p>\r\n                                             <p>Micle Richard</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Passport No.</p>\r\n                                             <p>XP9203845</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Nationality</p>\r\n                                             <p>Canadian</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Seat</p>\r\n                                             <p>18A (Window)</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Gate</p>\r\n                                             <p>19A</p>\r\n                                    </div>\r\n                                    <div>\r\n                                             <p class=\"text-xs font-semibold mb-1\">Class</p>\r\n                                             <p>Economy</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Fare Summary -->\r\n                           <div class=\"border-t pt-4 mb-4\">\r\n                                    <p class=\"text-lg font-bold mb-2\">Payment Summary</p>\r\n                                    <div class=\"flex gap-2\">\r\n                                             <div>\r\n                                                      <p>Base Fare:</p>\r\n                                                      <p>Airport Fees:</p>\r\n                                                      <p>Taxes:</p>\r\n                                                      <p>Fuel Surcharge:</p>\r\n                                             </div>\r\n                                             <div class=\"text-right\">\r\n                                                      <p>$1200</p>\r\n                                                      <p>$150</p>\r\n                                                      <p>$120</p>\r\n                                                      <p>$80</p>\r\n                                             </div>\r\n                                    </div>\r\n                                    <div class=\"flex gap-2 font-bold text-xl mt-2\">\r\n                                             <p>Total Paid:</p>\r\n                                             <p>$1550</p>\r\n                                    </div>\r\n                           </div>\r\n                  \r\n                           <!-- Final Note -->\r\n                           <div class=\"star-line mt-6 text-xs\">\r\n                                    <p>Please arrive at the airport at least 2 hours prior to departure. Carry this ticket and a valid ID.\r\n                                    </p>\r\n                           </div>\r\n                  </div>', 'invoice , plan, bill , ticket', 'Screenshot 2025-06-28 104523.png', 'plan recipt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive','suspended') DEFAULT 'active',
  `forgotOtp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `forgotOtp`) VALUES
(4, 'thebest', 'thebest@gmail.com', '$2y$10$GHg2JC0d2dqQGe6LEC0Ui.1btFjrj.Dho31mVCDpoKX2Si/vLJj.m', 'active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_template`
--
ALTER TABLE `edit_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteinfo`
--
ALTER TABLE `siteinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `edit_template`
--
ALTER TABLE `edit_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siteinfo`
--
ALTER TABLE `siteinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
