-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 04:04 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ansid` int(11) NOT NULL,
  `questions_questid` int(11) NOT NULL,
  `subject_subid` int(11) NOT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ansid`, `questions_questid`, `subject_subid`, `answer`, `status`) VALUES
(413, 91, 12, 'World Worm Web', 0),
(414, 91, 12, 'World Word Web', 0),
(415, 91, 12, 'World Wide Web', 1),
(416, 91, 12, 'None of the above', 0),
(417, 92, 12, 'MAN', 1),
(418, 92, 12, 'LAN', 0),
(419, 92, 12, 'WAN', 0),
(420, 92, 12, 'All of the above', 0),
(421, 93, 12, 'Internet', 0),
(422, 93, 12, 'E-mail', 0),
(423, 93, 12, 'Network', 1),
(424, 93, 12, 'All of the above', 0),
(425, 94, 12, 'Hybrid', 1),
(426, 94, 12, 'Digital', 0),
(427, 94, 12, 'Analog', 0),
(428, 94, 12, 'None of the above', 0),
(433, 95, 12, 'Internet Browser', 0),
(434, 95, 12, 'Page Browser', 0),
(435, 95, 12, 'Web Browser', 1),
(436, 95, 12, 'All of the above', 0),
(437, 96, 12, 'MS-Word', 0),
(438, 96, 12, 'Ms-Excel', 0),
(439, 96, 12, 'Ms-Power Point', 1),
(440, 96, 12, 'Ms- Access', 0),
(441, 97, 12, 'International Service Provider', 0),
(442, 97, 12, 'Internet Service Provider', 1),
(443, 97, 12, 'Internet Service Presenter', 0),
(444, 97, 12, 'None of the above', 0),
(453, 99, 12, '1MB', 0),
(454, 99, 12, '1GB', 0),
(455, 99, 12, '1TB', 0),
(456, 99, 12, '1KB', 1),
(457, 100, 12, 'Downloading', 0),
(458, 100, 12, 'Uploading', 0),
(459, 100, 12, 'All of the above', 1),
(460, 100, 12, 'None of the above', 0),
(461, 101, 12, 'Hard Disk', 0),
(462, 101, 12, 'USB Disk', 0),
(463, 101, 12, 'Floppy Disk', 0),
(464, 101, 12, 'All of the above', 1),
(465, 102, 13, 'Conduction', 0),
(466, 102, 13, 'Convection', 1),
(467, 102, 13, 'Radiation', 0),
(468, 102, 13, 'Both conduction and convection', 0),
(469, 103, 13, 'conduction', 0),
(470, 103, 13, 'convection', 0),
(471, 103, 13, 'radiation', 1),
(472, 103, 13, 'modulation', 0),
(473, 104, 13, 'Geo Thermal Energy ', 0),
(474, 104, 13, 'Wind Energy', 0),
(475, 104, 13, 'Nuclear Energy ', 0),
(476, 104, 13, 'Solar Energy', 1),
(477, 105, 13, 'white ', 1),
(478, 105, 13, 'violet', 0),
(479, 105, 13, 'red', 0),
(480, 105, 13, 'yellow', 0),
(481, 106, 13, '12', 0),
(482, 106, 13, '9', 1),
(483, 106, 13, '6', 0),
(484, 106, 13, '3', 0),
(485, 107, 12, 'Cache memory ', 0),
(486, 107, 12, 'RAM ', 0),
(487, 107, 12, 'ROM', 1),
(488, 107, 12, ' None of the above', 0),
(489, 108, 12, 'Abacus ', 0),
(490, 108, 12, 'Analytical Engine', 1),
(491, 108, 12, 'Calculator', 0),
(492, 108, 12, 'Processor', 0),
(493, 109, 12, 'Monitor', 1),
(494, 109, 12, 'Printer', 0),
(495, 109, 12, 'Sound System', 0),
(496, 109, 12, 'Semiconducter', 0),
(497, 110, 12, 'Android', 1),
(498, 110, 12, 'Excel ', 0),
(499, 110, 12, 'Powerpoint', 0),
(500, 110, 12, 'Word', 0),
(501, 111, 12, 'Open Access', 0),
(502, 111, 12, 'Open Source', 1),
(503, 111, 12, 'Windows Based ', 0),
(504, 111, 12, 'Mac Based', 0),
(505, 112, 12, 'Six', 0),
(506, 112, 12, 'Five ', 0),
(507, 112, 12, 'Four', 0),
(508, 112, 12, 'Seven ', 1),
(509, 113, 12, ' make copies of documents.', 0),
(510, 113, 12, 'save changes to documents.', 0),
(511, 113, 12, 'delete text in documents.', 0),
(512, 113, 12, 'format your documents.', 1),
(513, 114, 12, ' Fetching ', 0),
(514, 114, 12, 'Executing', 1),
(515, 114, 12, 'Decoding ', 0),
(516, 114, 12, ' Storing', 0),
(517, 115, 12, 'e-selling-n-buying ', 0),
(518, 115, 12, 'e-finance', 0),
(519, 115, 12, 'e-commerce', 1),
(520, 115, 12, 'e-trading', 0),
(521, 116, 12, 'Output', 0),
(522, 116, 12, 'Intput', 1),
(523, 116, 12, 'Throughput', 0),
(524, 116, 12, 'Reports', 0),
(525, 117, 12, 'Plotter', 0),
(526, 117, 12, 'Scanner', 1),
(527, 117, 12, 'Printer', 0),
(528, 117, 12, 'Mouse', 0),
(529, 118, 12, 'Input data ', 0),
(530, 118, 12, 'Store data', 0),
(531, 118, 12, 'Scan data', 0),
(532, 118, 12, 'View or print data', 1),
(537, 120, 12, 'Logical ', 0),
(538, 120, 12, 'Data Series ', 1),
(539, 120, 12, 'Financial', 0),
(540, 120, 12, 'Text', 0),
(541, 121, 12, 'read and write information.', 0),
(542, 121, 12, 'only read information.', 0),
(543, 121, 12, 'only write information.', 0),
(544, 121, 12, 'read, write and rewrite information', 1),
(545, 122, 12, 'Compiler', 0),
(546, 122, 12, 'Loader', 0),
(547, 122, 12, 'Operating System', 1),
(548, 122, 12, 'Assembler', 0),
(549, 123, 12, 'Batch Operating System', 0),
(550, 123, 12, 'Real-time Operating System', 0),
(551, 123, 12, 'Embedded Operating System ', 1),
(552, 123, 12, 'Multi-Processor Operating System', 0),
(553, 124, 12, 'Simpelx', 0),
(554, 124, 12, 'Half-duplex ', 1),
(555, 124, 12, 'Full-duplex', 0),
(556, 124, 12, 'Three-quarter duples', 0),
(557, 125, 13, '6 to 9 V ', 0),
(558, 125, 13, '50 to 60 V ', 0),
(559, 125, 13, '200 to 250 V ', 1),
(560, 125, 13, '90 to 100 V', 0),
(561, 126, 13, 'Actual weight of the body', 0),
(562, 126, 13, 'Zero', 0),
(563, 126, 13, 'Weight of the body minus weight of the liquid ', 1),
(564, 126, 13, 'Weight of the body plus upward thrust', 0),
(565, 127, 13, 'Copper ', 0),
(566, 127, 13, 'Silver', 1),
(567, 127, 13, 'Aluminum', 0),
(568, 127, 13, 'Iron', 0),
(569, 128, 13, 'AGC', 0),
(570, 128, 13, 'Loud Speaker', 0),
(571, 128, 13, 'Volume control ', 1),
(572, 128, 13, 'Audio stage', 0),
(573, 129, 13, '1 F stage ', 0),
(574, 129, 13, 'R F stage', 1),
(575, 129, 13, 'Audio stage', 0),
(576, 129, 13, 'None of these', 0),
(577, 130, 13, 'Is kept reverse biased', 0),
(578, 130, 13, 'Is kept forward biased', 0),
(579, 130, 13, 'Depends upon current requireemnt ', 1),
(580, 130, 13, 'Depends upon rated voltage', 0),
(581, 131, 13, '1.18v ', 0),
(582, 131, 13, '2.0v', 0),
(583, 131, 13, '2.2v ', 0),
(584, 131, 13, '2.4v ', 1),
(585, 132, 13, '7 MHZ', 0),
(586, 132, 13, '5.5 MHZ', 1),
(587, 132, 13, '5 MHZ', 0),
(588, 132, 13, 'None of these', 0),
(589, 133, 13, 'Using more tuned circuit', 0),
(590, 133, 13, ' Decreasing number of tuned circuits', 1),
(591, 133, 13, 'Using loud speaker', 0),
(592, 133, 13, 'Increasing gain of the receiver', 0),
(593, 134, 13, 'It will induce more voltage ', 0),
(594, 134, 13, ' Its reactance will increase ', 0),
(595, 134, 13, 'The primary will burn out and no emf will be induced in the secondary', 1),
(596, 134, 13, 'None of these', 0),
(597, 135, 13, 'Mixer stage ', 0),
(598, 135, 13, '1 F stage', 1),
(599, 135, 13, 'Detector stage', 0),
(600, 135, 13, 'Audio stage', 0),
(601, 136, 13, ' field', 1),
(602, 136, 13, ' flux ', 0),
(603, 136, 13, 'induction', 0),
(604, 136, 13, 'moment', 0),
(605, 137, 13, ' decibel', 1),
(606, 137, 13, 'decimal', 0),
(607, 137, 13, 'ppm', 0),
(608, 137, 13, 'None of these', 0),
(609, 138, 13, 'visible region', 1),
(610, 138, 13, 'infrared region ', 0),
(611, 138, 13, 'ultraviolet region ', 0),
(612, 138, 13, 'microwave region', 0),
(613, 139, 13, 'photo current is constant', 0),
(614, 139, 13, 'photo current increases with voltage', 0),
(615, 139, 13, 'photo current decreases with voltage', 0),
(616, 139, 13, 'photo electric emission is not possible', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(100) NOT NULL,
  `fullname` varchar(200) CHARACTER SET latin1 NOT NULL,
  `username` varchar(200) CHARACTER SET latin1 NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `confirmpassword` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `fullname`, `username`, `password`, `confirmpassword`) VALUES
(1, 'a', 'a', 'a', 'a'),
(2, 'aaa', 'aaa', 'b', 'b'),
(3, 'suresh', 'suresh', 'b', 'b'),
(4, 'ram', 'ram', 'ram', 'ram'),
(5, 'v', 'v', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questid` int(11) NOT NULL,
  `subject_subid` int(11) NOT NULL,
  `quest` varchar(255) DEFAULT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questid`, `subject_subid`, `quest`, `option1`, `option2`, `option3`, `option4`) VALUES
(91, 12, 'WWW stands for?', 'World Worm Web', 'World Word Web', 'World Wide Web', 'None of the above'),
(92, 12, '________ is used to communicate from one city to another.\r\n', 'MAN', 'LAN', 'WAN', 'All of the above'),
(93, 12, 'A________________ is a group of independent computers attached to one another through communication media.', 'Internet', 'E-mail', 'Network', 'All of the above'),
(94, 12, 'Speedometer is an example of ____________ computers\r\n', 'Hybrid', 'Digital', 'Analog', 'None of the above'),
(95, 12, 'Which of the following software is used to view web pages?\r\n', 'Internet Browser', 'Page Browser', 'Web Browser', 'All of the above'),
(96, 12, 'Which of the following is a presentation program?\r\n', 'MS-Word', 'Ms-Excel', 'Ms-Power Point', 'Ms- Access'),
(97, 12, 'ISP stands for\r\n', 'International Service Provider', 'Internet Service Provider', 'Internet Service Presenter', 'None of the above'),
(99, 12, 'Collection of 1024 Bytes\r\n', '1MB', '1GB', '1TB', '1KB'),
(100, 12, '________________ is the process in which a user sends computer information from his computer to another computer through modem.\r\n', 'Downloading', 'Uploading', 'All of the above', 'None of the above'),
(101, 12, 'Which of the following is a storage device?\r\n', 'Hard Disk', 'USB Disk', 'Floppy Disk', 'All of the above'),
(102, 13, 'Heat is transmitted from higher temperature to lower temperature through the actual motion of the molecules in - \r\n', 'Conduction', 'Convection', 'Radiation', 'Both conduction and convection'),
(103, 13, 'Energy travels from Sun to Earch through \r\n', 'conduction', 'convection', 'radiation', 'modulation'),
(104, 13, 'Photovoltaic cell is related to - ', 'Geo Thermal Energy ', 'Wind Energy', 'Nuclear Energy ', 'Solar Energy'),
(105, 13, 'When beams of red, blue and green lights fell on the same spot, the colour of the light becomes - \r\n', 'white ', 'violet', 'red', 'yellow'),
(106, 13, 'How many units of electricity will be consumed if you use a 60 watt electric bulb for 5 hours everyday for 30 days ? \r\n', '12', '9', '6', '3'),
(107, 12, 'Which of the following is an example of non-volatile memory? \r\n', 'Cache memory ', 'RAM ', 'ROM', ' None of the above'),
(108, 12, 'The first mechanical computer designed by Charles Babbage was called -', 'Abacus ', 'Analytical Engine', 'Calculator', 'Processor'),
(109, 12, 'LED, LCD, CRT are the names related to different types of -', 'Monitor', 'Printer', 'Sound System', 'Semiconducter'),
(110, 12, 'Microsoft Office does not include -', 'Android', 'Excel ', 'Powerpoint', 'Word'),
(111, 12, 'Ubuntu is which type of operating system -', 'Open Access', 'Open Source', 'Windows Based ', 'Mac Based'),
(112, 12, 'The OSI reference model is divided into how many layers? ', 'Six', 'Five ', 'Four', 'Seven '),
(113, 12, ' In word, you can use Styles to - ', ' make copies of documents.', 'save changes to documents.', 'delete text in documents.', 'format your documents.'),
(114, 12, ' ___is the process of carrying out commands.', ' Fetching ', 'Executing', 'Decoding ', ' Storing'),
(115, 12, 'The process of trading goods over the Internet is known as - ', 'e-selling-n-buying ', 'e-finance', 'e-commerce', 'e-trading'),
(116, 12, 'Information that comes from an external source and fed into computer software is called - ', 'Output', 'Intput', 'Throughput', 'Reports'),
(117, 12, 'Which of the following can input graphical images and pictures for a computer? ', 'Plotter', 'Scanner', 'Printer', 'Mouse'),
(118, 12, 'Using output devices one can -', 'Input data ', 'Store data', 'Scan data', 'View or print data'),
(120, 12, 'This is not a function category in Excel -', 'Logical ', 'Data Series ', 'Financial', 'Text'),
(121, 12, 'On a CD-RW you can', 'read and write information.', 'only read information.', 'only write information.', 'read, write and rewrite information'),
(122, 12, 'To be able to boot, the computer must have a', 'Compiler', 'Loader', 'Operating System', 'Assembler'),
(123, 12, 'The operating system that is self-contained in a device and resident in the ROM is - ', 'Batch Operating System', 'Real-time Operating System', 'Embedded Operating System ', 'Multi-Processor Operating System'),
(124, 12, 'Which of the following communication modes support two-ways traffic, but in only one direction at a time?', 'Simpelx', 'Half-duplex ', 'Full-duplex', 'Three-quarter duples'),
(125, 13, 'The required DC voltage for arc welding is - ', '6 to 9 V ', '50 to 60 V ', '200 to 250 V ', '90 to 100 V'),
(126, 13, 'For a body floating in water, the apparent weight is equal to - \r\n', 'Actual weight of the body', 'Zero', 'Weight of the body minus weight of the liquid ', 'Weight of the body plus upward thrust'),
(127, 13, 'Good conductor of electricity is', 'Copper ', 'Silver', 'Aluminum', 'Iron'),
(128, 13, 'If signal distorts on increasing the volume, where is the fault?', 'AGC', 'Loud Speaker', 'Volume control ', 'Audio stage'),
(129, 13, 'In a broadcast receiver, most of the selectivity is achieved in -', '1 F stage ', 'R F stage', 'Audio stage', 'None of these'),
(130, 13, ' In a zener diode regulator, zener -', 'Is kept reverse biased', 'Is kept forward biased', 'Depends upon current requireemnt ', 'Depends upon rated voltage'),
(131, 13, 'The EMF of every cell of full charge battery is - ', '1.18v ', '2.0v', '2.2v ', '2.4v '),
(132, 13, 'The spacing between picture carrier and sound carrier frequency in T.V. is - ', '7 MHZ', '5.5 MHZ', '5 MHZ', 'None of these'),
(133, 13, 'Selectivity of a receiver can be increased by - ', 'Using more tuned circuit', ' Decreasing number of tuned circuits', 'Using loud speaker', 'Increasing gain of the receiver'),
(134, 13, 'What will happen if a transformer is connected to D.C. voltage? ', 'It will induce more voltage ', ' Its reactance will increase ', 'The primary will burn out and no emf will be induced in the secondary', 'None of these'),
(135, 13, '1 KHZ signal is used to test which stage?', 'Mixer stage ', '1 F stage', 'Detector stage', 'Audio stage'),
(136, 13, 'Tesla is a unit of magnetic - ', ' field', ' flux ', 'induction', 'moment'),
(137, 13, 'The unit of noise pollution (level) is - ', ' decibel', 'decimal', 'ppm', 'None of these'),
(138, 13, 'Transition ions absorb light in -', 'visible region', 'infrared region ', 'ultraviolet region ', 'microwave region'),
(139, 13, 'The threshold frequency is the frequency below which -', 'photo current is constant', 'photo current increases with voltage', 'photo current decreases with voltage', 'photo electric emission is not possible');

-- --------------------------------------------------------

--
-- Table structure for table `quizscore`
--

CREATE TABLE `quizscore` (
  `scoreid` int(11) NOT NULL,
  `login_userid` int(11) NOT NULL,
  `subject_subid` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quizscore`
--

INSERT INTO `quizscore` (`scoreid`, `login_userid`, `subject_subid`, `date`, `score`) VALUES
(19, 1, 13, '', 20),
(20, 1, 12, '', 0),
(22, 1, 15, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subid` int(11) NOT NULL,
  `subname` varchar(200) DEFAULT NULL,
  `duration` int(45) DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `subname`, `duration`, `state`) VALUES
(12, 'Computer', 10, 1),
(13, 'Physics', 10, 1),
(15, 'Agriculture', 12, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ansid`),
  ADD KEY `subject_subid` (`subject_subid`),
  ADD KEY `questions_questid` (`questions_questid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questid`),
  ADD KEY `fk_questions_subject_idx` (`subject_subid`);

--
-- Indexes for table `quizscore`
--
ALTER TABLE `quizscore`
  ADD PRIMARY KEY (`scoreid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ansid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `quizscore`
--
ALTER TABLE `quizscore`
  MODIFY `scoreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer_questions1` FOREIGN KEY (`questions_questid`) REFERENCES `questions` (`questid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_questions_subject` FOREIGN KEY (`subject_subid`) REFERENCES `subject` (`subid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
