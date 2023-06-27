-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `adminname`, `mypassword`, `created_at`) VALUES
(1, 'admin.first@yahoo.com', 'admin1', '$2y$10$feVAtrNxVFH9ZyLi2IWLdOr5.LjzPQZkBxHNrETMzWlaiPMR40UD6', '2023-05-01 13:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_image` varchar(1000) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro_id`, `pro_name`, `pro_image`, `pro_price`, `pro_amount`, `user_id`, `created_at`) VALUES
(13, 2, 'Tap Sensor Module for Arduino', 'tap-sensor-module-arduino.jpg', 39, 1, 1, '2023-03-07 04:43:05'),
(14, 3, 'GT521F52 Optical Fingerprint Scanner Module with JST SH Connector', 'gt521f52-optical-fingerprint-scanner-module-with-jst-sh-connector.jpg', 1999, 1, 1, '2023-03-07 04:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` int(10) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `name`, `email`, `number`, `message`, `created_at`) VALUES
(1, 'hh', 'hh', 'h@gmail.com', 1122334, 'h', '2023-05-05 08:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone_num` int(10) NOT NULL,
  `address` text NOT NULL,
  `orders` text NOT NULL,
  `price` int(100) NOT NULL,
  `token` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `username`, `fname`, `lname`, `phone_num`, `address`, `orders`, `price`, `token`, `user_id`, `created_at`) VALUES
(1, 'Harshpatel8320@gmail.com', 'harsh', 'Hp', 'patel', 0, 'hhh', '', 1592, 0, '2', '2023-05-01 11:14:38'),
(2, 'Harshpatel8320@gmail.com', 'harsh', 'Hp', 'patel', 0, 'hhh', 'hii', 1592, 0, '2', '2023-05-01 12:08:52'),
(3, 'Harshpatel8320@gmail.com', 'harsh', 'Harsh', 'pp', 0, 'wss', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 3 ,  3 Way Soil Meter For Moisture, Light Intensity and pH Testing Meter X 7 ', 2872, 0, '2', '2023-05-01 12:36:19'),
(4, 'Harshpatel8320@gmail.com', 'harsh', 'Hp', 'pp', 0, 'hhh', 'TCS3200 TCS230 Color Sensor Module X 2 ,  GT521F52 Optical Fingerprint Scanner Module with JST SH Connector X 3 ,  Tap Sensor Module for Arduino X 4 ,  ', 7133, 0, '2', '2023-05-01 12:39:09'),
(5, '200020116055ait@gmail.com', 'harsh', 'Jenil', 'Jani', 0, 'd-204 flat ahmedabad,Gujarat-380060', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 2 ,  GT521F52 Optical Fingerprint Scanner Module with JST SH Connector X 3 ,  ', 8394, 0, '2', '2023-05-03 05:41:14'),
(6, 'Harsh.patel.ait00@gmail.com', 'harsh', 'Volvp', 'patel', 1234567890, 'd-204 flat ahmedabad,Gujarat-380060', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 1 ,  ', 199, 0, '2', '2023-05-03 05:49:23'),
(7, 'admin.third@yahoo.com', 'harsh', 'yogesh', 'patel', 1234567890, 'hhh,Gujarat-380060', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 13 ,  ', 2388, 0, '2', '2023-05-05 08:42:30'),
(8, 'Harshpatel8320@gmail.com', 'harsh', 'Harsh Patel', 'pp', 1234567890, 'hh,Gujarat-380060', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 4 ,  Mastech MS8910 (Original) Smart SMD Tester Meter for Capacitor and Resistor X 2 ,  ', 5786, 0, '2', '2023-05-06 03:27:21'),
(9, 'Harshpatel8320@gmail.com', 'harsh', 'Hp', 'pp', 1234567890, 'hhh,Gujarat-380060', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter X 2 ,  BT-168D Battery Tester Digital Display Battery Capacity Tester X 3 ,  ', 1681, 0, '2', '2023-05-08 06:10:19'),
(10, 'user1@gmaiil.com', 'user1', 'user', '1', 1234567890, 'ahmedabad,Gujarat-380060', 'Mastech MS8910 (Original) Smart SMD Tester Meter for Capacitor and Resistor X 2 ,  Power Sonic PS-640F1 X 3 ,  TCS3200 TCS230 Color Sensor Module X 4 ,  ', 12947, 0, '3', '2023-05-11 06:28:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `image`, `price`, `description`, `features`, `status`, `created_at`) VALUES
(1, 'sensor', 'TCS3200 TCS230 Color Sensor Module', 'tcs3200-tcs230-color-sensor.jpg', 490, 'Color Sensor, based on TCS3200, is a complete color detector capable of detecting static color. The output of the sensor is a square wave with frequency directly proportional to incident light intensity. It also supports fill light by on board LEDs. It includes a TAOS TCS3200 RGB sensor chip and 4 white LEDs. The TCS3200 can detect and measure a nearly limitless range of visible colors. Applications include test strip reading, sorting by color, ambient light sensing and calibration, and color matching, to name just a few. <br>\n\nThe TCS3200 Color Sensor board makes it very easy to sense and record the light intensity of the general red, green, and blue spectrums of visible light while rejecting IR from light sources. You can then use these color sensor readings for the purposes of logging and finding patterns, or creatively calculate and make control decisions in your electronic projects.\n<br>\nThe TCS3200 GBB Color Sensor For Arduino has an array of photo detectors, each with either a red, green, or blue filter, or no filter (clear). The filters of each color are distributed evenly throughout the array to eliminate location bias among the colors. Internal to the device is an oscillator which produces a square-wave output whose frequency is proportional to the intensity of the chosen color.', 'Single-Supply Operation (2.7V to 5.5V) <br>\nHigh-Resolution Conversion of Light <br>Intensity to Frequency <br>\nProgrammable Color and Full-Scale <br>Output Frequency <br>\nPower Down Feature <br>\nCommunicates Directly to 5V <br>Microcontroller<br>\nS0~S1: Output frequency scaling <br>selection inputs<br>\nS2~S3: Photodiode type selection <br>inputs\nOUT Pin: Output frequency\nOE Pin: Output frequency enable pin (active low), can be impending when using\nSupport LED lamp light supplement control', 1, '2023-03-06 06:01:10'),
(2, 'sensor', 'Tap Sensor Module for Arduino', 'tap-sensor-module-arduino.jpg', 39, 'A vibration switch, also called spring switch or shock sensor, is an electronic switch which induces shock force and transfers the result to a circuit device thus triggering it to work. It contains the following parts: conductive vibration spring, switch body, trigger pin, and packaging agent.\n<br>\nKnock sensor module, a digital 13 interface and built-in LED build a simple circuit to produce percussion flasher.\n<br>\nThe knock sensor, detects the knocks and the taps. It can work like a switch. The sensor sends data momentarily to the board. To keep the LED on, the button state change codes should be used. So the sensor will work as a switch.', '', 1, '2023-03-06 06:22:18'),
(3, 'sensor', 'GT521F52 Optical Fingerprint Scanner Module with JST SH Connector', 'gt521f52-optical-fingerprint-scanner-module-with-jst-sh-connector.jpg', 1999, 'The GT521F52 Optical Fingerprint Scanner Module with JST SH Connector is a high-performance fingerprint scanner. Which is useful for to access control, security, identification, and convenience. This optical sensor module is designed for easy integration into applications with serial interface (UART). We need two wires are for TX and RX and two wires for power supply (5V).\nThe main difference between GT521F32 and GT521F52 is fingerprint storage capacity.\n<br>\nThere are four types of fingerprint scanner: the optical scanner, the capacitance scanner, the ultrasonic scanner, and the thermal scanner. The GT521F52 Fingerprint Scanner Module is an optical scanner module. This optical scanner takes a visual image using a digital camera.\n<br>\nThe idle module is woken by a finger touching the metal frame of the sensor. The pictures of the fingerprints are processed on-board by the fingerprint algorithm (low power 32-bit ARM Cortex-M3 processor) and convert it into strings of data. These so-called templates are residing on the module configured as a USB mass storage device. They can store and share through a database with other modules in a network, allowing easy enrollment of many users.', 'Ultra-thin Optical Sensor. <br>\nHigh-accuracy & high-speed fingerprint <br>identification technology. <br>\nWorks well with dry, moist or rough fingerprints.<br>\n3000 fingerprints storage.<br>\nWake up on Finger Function.<br>\nEasy one-touch enrollment.<br>\n1: 1 verification, 1: N identification.<br>\nSimple UART & USB communication protocol.<br>\nexternal UART-to-USB converter required (TX & RX levels: 3.3V).<br>\nComplies with USB 2.0 full-speed (12Mbps) specifications.<br>\nReading & writing fingerprint template(s) (i.e. processed data) from/to the device.\nDownloading the raw bitmap image from the device (catalog fingerprints).\nAnti-Scratch with surface high hardness 5H.', 1, '2023-03-06 06:22:18'),
(4, 'test-equipment', '12V-60V DC Lead-Acid Digital Battery Capacity Indicator Charge Tester Voltmeter', '12v-60v-dc-lead-acid-digital-battery-capacity-indicator-charge-tester-voltmeter.jpg', 199, 'This 12-60V Dual Display Automatic Voltage Identification Meter-Blue can be used as a fuel gauge suitable for 12V, 24V, 36V, 48V, 60V battery cars, and similar electric Vehicle (common for batteries below 84V), and can also measure lithium batteries, polymer batteries, and nickel-metal hydride batteries to show the real-time battery level status on your vehicle dashboard The connection of this automatic Voltage meter is very simple by connecting it directly to the battery terminal parallelly. The meter comes with a dual display. The upper side of the display shows the battery level divided into 8 colorful bars with the last two red-colored alert bars to show low battery when it comes to 10%\n<br>\nCut you need to install this module on your dashboard will be 50mm  x 30mm', 'It can also be used for other power/voltage measurement purposes. <br>\nDouble display battery + voltage at a glance.<br>\nThe display is more intuitive.<br>\nThe upper 8 bars show the battery power (2 red and 6 green).<br>\nDownlink voltmeter (display battery voltage), voltmeter decimal point automatic shift accuracy is higher.<br>\nIt has a wide range of applications, including lithium battery packs, lead-acid batteries, car batteries, electric car batteries, and many other types of batteries and electric equipment.<br>\nThe calculation of the existing voltage is the same as that of the power display meter of an electric vehicle.<br>\nThe meter head automatically recognizes the voltage and electricity and has a reverse connection protection function (reverse connection will not burn).', 1, '2023-03-06 07:36:52'),
(10, 'test-equipment', 'BT-168D Battery Tester Digital Display Battery Capacity Tester', 'bt-168d-battery-tester-digital-display-battery-capacity-tester-400x400.jpg', 295, 'To test all different kinds of batteries (18650 16340 14500 10440 Lithium Battery, AA, AAA, C, D, 9V, mini cell) Check the power level of all 1.5V, 3.7V, 9V, and 1.5V miniature cells Can quickly test the capacity of your battery Easy-to-read, digit indicates power level Test multiple sizes of batteries in one unit. (1.5V: AAA, HP16, MN2400, R03, AA, HP7, MN1500, UM3, C, HP11, MN1400, SP11, LR14, UM2, D, HP2, MN1300, SP2, R20, UM1; 9V: PP3, MN1604, 6F22, 006P, 18650 16340 14500 10440 Lithium Battery)', 'The great small tool can tell you if your battery is good, low, or needs to be replaced.<br>\r\nA must buy for anyone who uses regular or rechargeable batteries on a regular basis<br>\r\nSimple but effective little battery tester checker, compact size and lightweight, easy to carry<br>\r\nEasy-to-read colour-coded display with good, low and replace/recharge indicators<br>\r\nTest standard and rechargeable batteries: 9V, AA, AAA, etc.<br>\r\nNo batteries are required to operate after the battery is docked with the positive and negative, and then guide the pointer to jump to the corresponding area<br>\r\n', 1, '2023-05-05 16:22:50'),
(11, 'test-equipment', 'Mastech MS8910 (Original) Smart SMD Tester Meter for Capacitor and Resistor', 'mastech-ms8910-smart-smd-tester-meter-for-capacitor-and-resistor-400x400.jpg', 2495, 'This smart SMD tester from Mastech is essentially a pair of multimeter tweezers. This allows you to troubleshoot circuits with small SMD parts without having to fumble with large probes or long wires. Test resistors, capacitors and diodes one-handed!', 'Display 3000 counts<br>\r\nAuto Ranging  <br>\r\nAuto Power Off <br>\r\nData Hold<br>\r\nLow Battery Display<br>\r\nAuto Scanning<br>\r\nDiode Check Open Voltage 2.8V<br>\r\nDiode Testing Current 2mA<br>\r\nContinuity Buzzer <30Ω<br>', 1, '2023-05-05 16:26:12'),
(12, 'test-equipment', 'Vartech MAS830L Digital Multimeter - Original', 'vartech-mas830l-digital-multimeter-2original-400x400.jpg', 650, 'Vartech MAS830L Digital Multimeter - Original', '', 1, '2023-05-05 16:27:06'),
(13, 'test-equipment', 'Lipo Battery Voltage Tester with Buzzer Alarm', 'lipo-voltage-checker-electronicscomp-india-400x400.jpg', 125, 'This Lipo Low Voltage Alarm can be used to get the voltage from a lipo battery. It connects to the lipo battery\'s balance plug and outputs the voltage of the induvidual cells and the total voltage of the battery pack. It also has an onboard alarm that beeps when the battery voltage gets low. Use this alarm to stop draining the lipo battery completely and this increases battery life and preserves the battery performance.\r\n\r\nThe alarm is small and light specifically designed for use in quadcopters and mulitrotors. A loud alarm will sound with flashing LED if the voltage on any of the individual cell drops below the adjustable threshold. \r\n\r\nWe highly recommend using a LiPo Low Voltage Alarm all the time while using a Lithium Polymer Battery. Since if the voltage of any of the cells of a Lithium Polymer Battery drops below 3 volts, then that particular cell can be permanently damaged. ', 'Used for testing 1-8S Lipo/Li-ion/LiMn/Li-Fe<br>\r\nVoltage Detection Precision: +/- 0.01V<br>\r\nUnit Voltage Display Range: 0.5~4.5V<br>\r\nTotal Voltage Display Range: 0.5~36V<br>\r\n1S Test Mode Voltage Range: 3.7~30V<br>\r\nLow voltage alarm mode for 2-8S<br>\r\nAlarm Set Value Range: OFF~2.7~3.8V<br>\r\nColor: As shown in the picture<br>\r\nSize: 4*2.5*1cm<br>\r\n', 1, '2023-05-05 16:29:48'),
(14, 'sensor', '12V 3A Touch Sensor Switch for Mirror Light', '12v-3a-touch-sensor-switch-for-mirror-light-400x400.jpg', 159, 'Touch Control Sensor Switch for Mirror Light can be powered by simply supplying a 12VDC. It has a switch control function to light up LED lights from a single touch. The product is specially designed for smart light mirrors. It is suitable for the control of two mirror lights, single touch switch controls both the LED’s one after the other, which means on the first touch the LED connected with blue wire will glow. On the second touch, the LED connected with white wire will glow and on the third touch both the LED’s will glow together. The fourth touch switches off both the LEDs. The module has a feature to control the brightness of both the LED strips. The touch switch has a feature of backlight, according to this as the power gets supplied to the module the touch switch starts glowing white and whenever the LED is switched on the white Colour changes to blue. INPUT gets connected to the input 12VDC supply to power the module. OUTPUT gets connected to two LED strips. The positive wire(red coloured ) will be common for both LED strips and the other two negative wires(blue and white-coloured) will get connected with the negative of both the LED strips. The LED’s intensity can be controlled by touching continuously the touch switch, it goes from bright to dim then removing the finger and placing it again, it goes from dim to bright. Both the LED strip’s intensity can be altered, either when the single LED is glowing or while both the LEDs are glowing.', 'LED can be made ON-OFF just by a single touch.<br>\r\nSensitive to touch<br>\r\nLighting control<br>\r\nGets connected with two LED strips and both the LED’s intensity can be altered.<br>\r\nEasy to connect with LEDs<br>', 1, '2023-05-05 16:42:06'),
(15, 'sensor', '5A 12V Overcurrent Protection AC Current Detection Sensor Module', '5a-12v-overcurrent-protection-ac-current-detection-sensor-module-400x400.jpg', 313, 'LC 5A 12V Overcurrent Protection AC Current Detection Sensor Module uses a current transformer to collect the AC signal to achieve the relay over-current signal output within 0-5A. Relay pull while over-current, relay released while not over-current. Users can use the relay COM; NC, NO three ports to control the external circuit on and off, in order to achieve over-current protection.', 'Current detection resolution can change the parameter of resistance parameters;<br>\r\nOutput over-current switching signal output;<br>\r\nThe over-current signal setting critical point adjustable. <br>', 1, '2023-05-05 16:43:18'),
(16, 'sensor', 'AC 220V Security PIR Human Body Motion Sensor Detector Coil LED Light Switch', 'ac-220v-security-pir-human-body-motion-sensor-detector-coil-led-light-switch-400x400.png', 332, 'This is a Security based Automatic PIR Human Body Motion Sensor Detector Coil LED Light Switch with automatic turn ON/OFF while detected people come or left feature. Wisdom delay, the load can work sustainably when people are within the detection range. Using a non-contact electronic switch, do not produce an electric spark, do not interfere with other electrical appliances.', 'Automatically locked in the daytime to save energy.<br>\r\nThe rate of saving electricity is greater than 85%.<br>\r\nStrong anti-jamming capability.<br>\r\nSimple installation, convenient and safe.<br>\r\nStandby power is small, long service life, and can effectively prolong the service life of the load.<br>', 1, '2023-05-05 16:44:54'),
(17, 'power-products', 'Power Sonic PS-640F1', '70115625_left.webp', 1999, 'Battery,Rechargeable,Rectangular,Lead Acid,6VDC,4.5Ah,Quick Disconnect:0.187,SLA', 'Sealed/Maintenance-Free<br>\r\nHigh Discharge Rate<br>\r\nEconomical<br>\r\nWide Operating Temperature Range<br>\r\nDesign Flexibility<br>\r\nEasy Handling<br>\r\nLong Shelf Life<br>\r\nRugged Construction<br>\r\nDeep Discharge Recovery<br>\r\nCompact<br>\r\nLong Service Life<br>', 1, '2023-05-05 17:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mypassword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mypassword`, `created_at`) VALUES
(1, 'admin', '200020116055ait@gmail.com', '$2y$10$n0N3xRpnq4jFXumBxvV1W.U1xpgXXpbalX6059HMFPkW7DA34voZK', '2023-03-06 05:07:23'),
(2, 'harsh', 'Harshpatel8320@gmail.com', '$2y$10$Zg2IT0gOB6JvbKBR9WhCc.6UQmmddpU4s3lfYyVh52n3BIwKuZftK', '2023-03-06 05:28:06'),
(3, 'user1', 'user1@gmail.com', '$2y$10$f9DJlw2TUw6EkqASUoKS..gmG86YA7AvzNXGyuQLbxcJxlWjQcRh6', '2023-05-11 06:26:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
