-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2020 at 02:36 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaykhaj_questiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(200) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `status`) VALUES
(1, 'Fiqh', 'Question'),
(2, 'Aqeedah', 'Question'),
(3, 'Solat', 'Question'),
(4, 'Hajj', 'Question'),
(5, 'Sawm', 'Question'),
(6, 'Dressing', 'Question'),
(7, 'Contempory Issues', 'Question'),
(8, 'Romadan', 'Question'),
(9, 'USOOL-TEFSEER (ROMADAN CLASS)', 'Classes'),
(10, 'FM Programme', 'Classes'),
(11, 'Eid', 'Question'),
(12, 'Eid', 'Question'),
(13, 'Bulugul-marom ', 'Classes'),
(14, 'Zakat', 'Question');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(800) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `code`, `title`, `category`, `summary`, `eventBanner`, `startDate`, `status`) VALUES
(1, 'MSHK1', 'Hadeeth Haleeqoh ', 'Hadeeth', 0x3c703e486164656574682048616c69716f683c2f703e0d0a0d0a3c703e446174653a20377468204a756c792c20323031393c2f703e0d0a, 'https://soundcloud.com/user-71335749/fatawa-sheikh-ajia', '2019-07-07', 'Authorised'),
(2, 'MSHK2', 'Fiqh Class ', 'Fiqh', 0x3c703e4669716820436c6173733c2f703e0d0a0d0a3c703e446174653a2031302f30372f323031393c2f703e0d0a, 'https://soundcloud.com/user-71335749/can-a-muslim-father-inherit-his-apostate-child', '2019-07-10', 'Authorised'),
(3, 'MSHK3', 'Types of Water', 'FM Programme', 0x3c703e5479706573206f662057617465723c2f703e0d0a, 'soundcloud.com/user-71335749/05-type-of-water', '2019-07-18', 'Authorised'),
(4, 'MSHK4', 'Using Silver And gold Plate', 'FM Programme', 0x3c703e5573696e672053696c76657220416e6420676f6c6420506c6174653c2f703e0d0a, 'soundcloud.com/user-71335749/4-fm-usin-silver-and-old-plate', '2019-07-18', 'Authorised'),
(5, 'MSHK5', 'Explanation of Hadith no 339, Rulings on teslim on solat', 'Bulugul-marom', 0x3c703e4578706c616e6174696f6e206f6620486164697468206e6f203333392c2052756c696e6773206f6e207465736c696d206f6e20736f6c61743c2f703e0d0a, 'https://soundcloud.com/user-71335749/bulugul23072019', '2019-02-03', 'Authorised');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `summary` blob NOT NULL,
  `eventBanner` varchar(500) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `res_date` text NOT NULL,
  `postedby` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `code`, `title`, `category`, `summary`, `eventBanner`, `startDate`, `res_date`, `postedby`, `status`) VALUES
(1, 'qtn001', 'Ruling of using Siwak during day of Ramadan?', 'Sawm', 0x536f6d656f6e652061736b65642061626f7574207468652072756c696e67206f66207573696e6720536977616b2028737469636b29207768696c652066617374696e6720647572696e672074686520646179206f662052616d6164616e, 'https://soundcloud.com/user-71335749/fatawa-sheikh-ajia', '16/01/2019', '', 'Abdulahi Abdulazeez', 'answered'),
(2, 'qtn002', 'If a woman seeing her menses more than ten days, what is she going to do?', 'Fiqh', '', '', '16/04/2019', '', 'Ajibade Surajudeen', 'unanswered'),
(3, 'qtn609003', 'Is it a must we use the name  \'Allah\'  to call God?', 'Aqeedah', 0x736f6d652070656f706c65207573656420746f2073617920746861742077652073686f756c64206e6f742075736520616e6f74686572206e616d6520746f2063616c6c20416c6c61682c206d61792062652063616c6c696e672068696d20476f642c204f6c6f68756e2c2077686174206973207468652072756c696e67206f662049736c616d20726567617264696e67206974, ' ', 'Sun 28-Apr-2019', '', 'odeyale.k@gmail.com', 'unanswered'),
(31, 'qtn59990030', 'Blood donation during Romadan', 'Romadan', 0x43616e204920646f6e61746520626c6f6f642020647572696e672066617374696e672e, 'https://soundcloud.com/user-71335749/can-i-give-blood-during-fasting', 'Thu 09-May-2019', ' 09-05-2019', 'oluwasinaalexrufai@gmail.com', 'answered'),
(4, 'qtn7809004', 'What is the ruling of young boy to lead the solat?', 'Solat', 0x496e206f7572204d6f73717565207468657265206973206120796f756e6720626f79207468617420686173206d656d6f72697a652061206c6f74206f6620636861707465727320696e2074686520486f6c7920517572616e2063616e207765206d616b652068696d20617320496d616d, ' ', 'Sun 28-Apr-2019', '', 'odeyale_kehinde@yahoo.com', 'unanswered'),
(5, 'qtn8610005', 'Can someone who is doing haram business use his money to send us to Hajj?', 'Hajj', 0x49206861766520612073697374657220746861742069732073656c6c696e6720416c636f686f6c20616e64207368652077616e7420746f2070617920666f72206d792048616a6a2c206966206920676f207769746820686572206d6f6e6579206973206d792048616a6a2061636365707461626c653f, ' ', 'Sun 28-Apr-2019', '', 'odeyale.k@gmail.com', 'unanswered'),
(7, 'qtn8221006', 'Question', 'Fiqh', 0x5175657374696f6e5175657374696f6e5175657374696f6e5175657374696f6e, '', 'Mon 29-Apr-2019', '', '', 'unanswered'),
(8, 'qtn6645007', 'Debt of fasting', 'Sawm', 0x6d79206d6f746865722070617374206177617920616e64206861766520736f6d652066617374696e6720736865206e65656420746f20706179206261636b2063616e20492068656c70206865722020746f20706179, 'https://soundcloud.com/user-71335749/can-i-help-someone-to-repay-his-fast-comprehensively', 'Mon 29-Apr-2019', '08-05-2019', 'oluwasinaalexrufai@gmail.com', 'answered'),
(9, 'qtn9086008', 'asalamalaykum, please is it permissible for woman to use relaxer ?', 'Dressing', 0x492077616e7420746f206b6e6f7720746865207065726d6973736962696c697479206f66207573696e672072656c6178657220627920776f6d656e, ' ', 'Thu 02-May-2019', '', 'odeyale_kehinde@yahoo.com', 'unanswered'),
(32, 'qtn1520031', 'What is the ruling and evidence of saying  ', 'Aqeedah', 0x4e6f7468696e6720, '', 'Mon 13-May-2019', '', 'tawfeequeyee@yahoo.com', 'unanswered'),
(10, 'qtn2631009', 'what is the ruling on quranic competition ?', 'Fiqh', 0x77686174206973207468652072756c696e67206f6e20717572616e696320636f6d7065746974696f6e203f, 'https://soundcloud.com/user-71335749/ruling-on-quran-competition', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(11, 'qtn62790010', 'Asalamaykum, please what is the best time for tarrowe ?', 'Solat', 0x4173616c616d61796b756d2c20706c6561736520776861742069732074686520626573742074696d6520666f7220746172726f7765203f, 'https://soundcloud.com/user-71335749/best-time-of-praying-taroowee', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(12, 'qtn97800011', 'Asalamallaykum warahmatulla, is it permissible to stand for people in honouring them?', 'Aqeedah', 0x4973206974207065726d69737369626c6520746f207374616e6420666f722070656f706c6520696e20686f6e6f7572696e67207468656d3f, 'https://soundcloud.com/user-71335749/ruling-on-standing-to-greet-someone-to-honour-him', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(13, 'qtn97500012', 'Asalamualaykum warahmatullah, A brother ask does urination nulify ghusl ? I mean urinating while per', 'Fiqh', 0x412062726f746865722061736b20646f6573207572696e6174696f6e206e756c6c69667920676875736c203f2049206d65616e207572696e6174696e67207768696c6520706572666f726d696e6720676875736c2e, 'https://soundcloud.com/user-71335749/ruling-on-urinating-during-guslu', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(14, 'qtn40250013', 'Is it sunatic to say jum\'at Mubarak?', 'Aqeedah', 0x77686174206973207468652072756c696e67206f6e20736179696e67206a756d6d6168206d75626172616b, 'https://soundcloud.com/user-71335749/ruling-on-greeting-people-jummuah-mubarak', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(15, 'qtn39890014', 'Asalam alaykum warahmatulla , can a menstruating women carry mushaf(qur\'an)', 'Fiqh', 0x63616e2061206d656e737472756174696e6720776f6d656e206361727279206d75736861662871757227616e293f, 'https://soundcloud.com/user-71335749/ruling-on-menstruating-women-carry-mushafquran', 'Thu 02-May-2019', '03-05-2019', 'odeyale_kehinde@yahoo.com', 'answered'),
(16, 'qtn35700015', 'can females be the witnesses in aqdu nikah ?', 'Fiqh', 0x63616e2066656d616c657320626520746865207769746e657373657320696e2061716475206e696b6168203f, 'https://soundcloud.com/user-71335749/can-a-woman-be-a-witness-during-akidu-nikkah', 'Thu 02-May-2019', '02-05-2019', 'odeyale_kehinde@yahoo.com', 'answered'),
(17, 'qtn40700016', 'Assalamu alaikum, Does a woman have a right to perform her iddah where she will be duly taken care', 'Fiqh', 0x446f6573206120776f6d616e2068617665206120726967687420746f20706572666f726d20686572206964646168207768657265207368652077696c6c2062652064756c792074616b656e2063617265206f6620686572206368696c6472656e206f722069742069732061206d6f737420666f7220746f20646f20697420696e206865722068757362616e64277320686f757365203f, 'https://soundcloud.com/user-71335749/can-a-widow-do-idda-in-other-place-that-is-not-are-husbands-house', 'Thu 02-May-2019', '02-05-2019', 'odeyale_kehinde@yahoo.com', 'answered'),
(18, 'qtn82320017', 'Asalamalaykum , what is the ruling of saying romadan kareem', 'Sawm', 0x4173616c616d616c61796b756d202c2077686174206973207468652072756c696e67206f6620736179696e6720726f6d6164616e206b617265656d, 'https://soundcloud.com/user-71335749/ruling-on-saying-ramadan-kareem', 'Thu 02-May-2019', '02-05-2019', 'odeyale.k@gmail.com', 'answered'),
(19, 'qtn4710018', 'Birthday', 'Contempory Issues', 0x4120706572736f6e2077617320676976656e2061206269727468646179206769667420652e67206269736375697420616e64206472696e6b20627574206865206469646e27742074616b6520697420616e64206761766520697420746f206d652c2063616e204920616363657074207375636820612067696674206d65206b6e6f77696e6720746861742074686520736f757263652069732066726f6d2062697274686461792e, '', 'Fri 03-May-2019', '', 'Ibnsalimon@gmail.com', 'unanswered'),
(20, 'qtn69610019', 'Ø§Ù„Ø³Ù„Ø§Ù… Ø¹Ù„ÙŠÙƒÙ… ÙˆØ±Ø­Ù…Ø© Ø§Ù„Ù„Ù‡ ÙˆØ¨Ø±ÙƒØªÙ‡ ÙŠØ§ Ø´ÙŠØ®Ù†Ø§ Ø§Ù„Ø¹Ù„Ø§Ù…Ø©.  Ø³Ø¤Ø§Ù„ÙŠ', 'Aqeedah', 0xd8b3d8a4d8a7d98420d98ad8a8d8add8ab20d8b9d98620d8aad988d8b6d98ad8ad20d8b9d984d98920d982d8b5d8a920d8b0d98a20d8a7d984d982d8b1d986d98ad98620d8a7d984d988d8a7d8b1d8afd8a920d981d98a20d8a8d8b9d8b620d983d8aad8a820d8a7d984d8aad981d8b3d98ad8b120d8a7d984d8aad98a20d8aad988d987d98520d8a7d984d8aad8b9d8a7d8b1d8b62e20, '', 'Fri 03-May-2019', '', 'sulaimonayelaagbe@gmail.com', 'unanswered'),
(21, 'qtn90310020', 'Ù‡Ù„ Ø¹Ù„ÙŠ Ø§Ù„Ù…Ø±Ø¶Ø¹ Ø£Ùˆ Ø§Ù„Ø­Ø¨Ù„Ù‰ Ù‚Ø¶Ø§Ø¡ Ø§Ù„ÙØ§Ø¦Øª Ù…Ù† Ø§Ù„ØµÙŠØ§Ù… Ø£Ù… Ø¹Ù„ÙŠÙ‡Ø§ ï', 'Sawm', 0xd8a7d984d985d8b1d8b6d8b920d8a3d98820d8a7d984d8add8a8d984d98920d8a7d984d8aad98a20d8aad8b1d983d8aa20d8b5d988d98520d8b1d985d8b6d8a7d986d88c20d987d98420d8aad982d8b6d98ad98720d8a8d8b9d8af20d8b1d985d8b6d8a7d98620d8a3d98520d8aad983d8aad981d98a20d8a8d8a7d984d981d8afd98ad8a9, 'https://soundcloud.com/user-71335749/what-should-a-pregnant-women-do-consining-romodan', 'Fri 03-May-2019', '03-05-2019', 'ridoh84@gmail.com', 'answered'),
(22, 'qtn8780021', 'Contemporary Issues', '', 0x4173616c616d7520616c61796b756d2e200d0a202057686174206973207468652072756c696e67206f662061204d75736c696d206772616475617465206170706c79696e6720666f72206d696c6974617279206f7220706172616d696c6974617279206a6f623f2e5468656e2c206973206b656570696e672062656172642061202777616a696227206f7220276661726475273f2e20556e64657220776861742063697263756d7374616e63652063616e20612062656172646564204d75736c696d206861766520686973206265617264206375743f, '', 'Fri 03-May-2019', '', 'abubakrashafa@gmail.com', 'unanswered'),
(23, 'qtn55310022', 'Hair and beards', 'Fiqh', 0x417373616c616d75616c61696b756d2077617261686d6174756c6c6168207761626172616b616174756820736865696b682e204d617920416c6c616820636f6e74696e756520746f206d616b6520796f75207374656164666173742e0d0a57686174206973207468652049736c616d69632072756c696e67206f6e206170706c79696e67206861697220626f6f7374657220746f207468652062656172647320746f206d616b652069742067726f77206661737465722c736f667420616e64206f7267616e697365642e, 'https://soundcloud.com/user-71335749/can-i-use-cream-and-relaxer-on-my-beared', 'Fri 03-May-2019', '03-05-2019', 'aowodeinde@gmail.com', 'answered'),
(24, 'qtn25590023', 'Romadan', 'romadan', 0x417373616c61616d752061276c61796b756d207761726f686d6174754c6c616869207761626161726f6b61747568750d0a0d0a506c732077686174206973207468652072756c696e6720666f72206120707265676e616e7420776f6d616e207468697320636f6d696e6720526f6d6164616e2c2069732073686520746f2070656e64207468652066617374206f7220666565642074686520706f6f720d0a0d0a4a617a61616b614c6c61616875206b686f79726f, 'https://soundcloud.com/user-71335749/what-should-a-pregnant-women-do-consining-romodan', 'Sat 04-May-2019', '04-05-2019', 'edunabdulwahhaab@gmail.com', 'answered'),
(25, 'qtn34810024', 'Growing of bears', 'Fiqh', 0x417373616c61616d7520616c61796b756d20796120736861796b682c0d0a54686572652061726520637265616d206f72206f696c206d61646520666f72206661737420616e64206c617267652067726f77696e67206f662062656172732c2063616e2061204d75736c696d20757365207375636820637265616d206f72206f696c20666f7220746865206265617220746f2067726f77206661737420616e6420706c656e74792e, '', 'Sat 04-May-2019', '', 'Hilaalenter@gmail.com', 'unanswered'),
(26, 'qtn58090025', 'Marrying a man that is not very knowledgeable', 'Contempory Issues', 0x41732053616c616d20616c61796b756d207761207261686d6174756c6c616820776120626172616b617475687520596120536865696b68206d617920416c6c616820707265736572766520796f752075706f6e206b6861797220616e64206d616b6520796f75207374656164666173742041616d65656e2e0d0a4d79207175657374696f6e20697320492072656365697665642061206d617272696167652070726f706f73616c2066726f6d20612062726f746865722077686f206973207374726976696e672062757420646f6573206e6f742068617665206d7563682049736c616d6963206b6e6f776c656467652c20697320697420616476697361626c6520746865206d617272792073756368206120706572736f6e206173206865207365656d7320746f20626520746865207479706520746861742077696c6c20636f6e74696e756520746f207365656b206b6e6f776c656467652062757420746865726520617265206e6f2067756172616e74656573207468617420686520737572656c792077696c6c2e0d0a4a617a616b616c6c616875206b68616972616e20536972, '', 'Sat 04-May-2019', '', 'ummmazeedah7@gmail.com', 'unanswered'),
(27, 'qtn65500026', 'What are the criteria for choosing wife? ', 'Fiqh', '', '', 'Sat 04-May-2019', '', 'abdulrafihiolokonla@gmail.com', 'unanswered'),
(28, 'qtn62340027', 'On prayer combination', 'Fiqh', 0x417373616c616d7520616c61696b756d20736b65696b2c202043616e20776520636f6d62696e6520736f6c6174756c206d616772696220616e6420736f6c6174756c2069736861682062656361757365206f66207261696e20636c6f75643f, '', 'Sat 04-May-2019', '', 'alaomuideen55@gmail.com', 'unanswered'),
(29, 'qtn88210028', 'Can we eat food prepared by non muslims to break fast', 'Fiqh', 0x52616d6164616e, 'https://soundcloud.com/user-71335749/can-my-mother-who-is-a-christien-cook-iftor-for-me', 'Sun 05-May-2019', '', 'Pamelaoakland@gmail.com', 'answered'),
(30, 'qtn73550029', 'islamic ruling on sex with sex doll', 'Contempory Issues', 0x417373616c61616d7520616c61796b756d2c206d617920416c6c61682072657761726420796f752c20776861742069732074686520617070726f7072696174652070756e6973686d656e7420666f7220686176696e6720736578207769746820612073657820646f6c6c2c207468652073657820646f6c6c2069732061207370656369616c6c79206d61646520726f626f7469632068756d616e206d616368696e722c207468657920706f73657373202d74686f756768206172746966696369616c6c79206275696c742d207468652061747472696275746573206f66206e61747572616c2068756d616e206265696e6773206c696b652074616c6b696e672c2077616c6b696e6720616e6420636f6d6d756e69636174696e672c207468657962617265206d61646520696e20646966666572656e742067656e64657273206c696b65206d616c652c2066656d616c652c2062697365786975616c20616e64207472616e7367656e6465722e2074686579206d616b652073657875616c20616476616d63657320616d6420726573706f6e6420746f2073616d652c207468657920676976652073657820696e2074686520657861637420776179206e61747572616c2068756d616e206265696e677320646f20616e642063616e20656e6761676520696e20646966666572656e7420736578207374796c65732c20746865206d616b652073657875616c20736f756e647320616e642072656c65617365732073696d656e206c696b652068756d616e206265696e677320646f207768696c6520686176696e67207365782e20696e2073756d6d6172792c2061206d657265206c6f6f6b206174207468652073657820646f6c6c2077696c6c206769766520612070657266656374207265706c696361206f66206e61747572616c2068756d616e206265696e672c20696e20666163742c206f6e65206d6179206e6f742064697374696e6775697368206265747765656e20697420616e64206e61747572616c2068756d616e206265696e6720617420666972737420676c616e6365, '', 'Mon 06-May-2019', '', 'jamiu2greats@gmail.com', 'unanswered'),
(33, 'qtn72270032', 'Public Speaking by Muslimah', 'Contempory Issues', 0x41732073616c61616d752027616c61796b756d20536861796b680d0a4d617920416c6c61616820707265736572766520796f752e0d0a4d79207175657374696f6e207369723a200d0a312e20417265205075626c6963206c6563747572657320616e64206c6563747572696e67206a6f62732061636365707461626c6520666f7220776f6d656e20696e2061206d697820656e7669726f6e6d656e743f0d0a322e20417265204f6e6c696e6520536f6369616c204d6564696120506f64636173742c20596f7554756265204368616e6e656c73202c576861747341707020436c6173736573206f7267616e6973656420627920776f6d656e207468617420696e766f6c766573206d656e20616e6420776f6d656e20616c6c6f7765643f20506c65617365206e6f746520697420696e766f6c76657320566964656f20636c697073202c617564696f20636c6970732c652e742e630d0a200d0a4a617a61616b756d756c6c6f6f6875206b686f79726f6f2e0d0a4920617761697420796f7520726573706f6e736520736f6f6e207369722e, '', 'Fri 07-Jun-2019', '', 'hameedatadepo@yahoo.com', 'unanswered'),
(34, 'qtn62610033', 'As sunnan Ar rawatib', 'Solat', 0x49206861766520616c77617973206b6e6f776e2073756e6e616e207261776174696220746f2062652031322052616b61e2809961682c20492077696c6c206c696b6520746f206b6e6f772061626f75742031302052616b61e2809961682061732049206a7573742068656172642061626f7574206974206e6f772e205468616e6b73, '', 'Wed 12-Jun-2019', '', 'aliyuamuinat@gmail.com', 'unanswered'),
(35, 'qtn23840034', 'Praying for muslim that committed suicide.', 'Fiqh', 0x4173616c616d20416c61796b756d2077617261686d6174756c6c6168202c20506c656173652063616e207765207072617920666f72204d75736c696d207468617420646f207072617920647572696e6720686973206c69666574696d6520627574206c6174657220636f6d6d697474656420737569636964652e, 'https://soundcloud.com/user-71335749/socide', 'Tue 09-Jul-2019', '09-07-2019', 'Abdu,busari123@gmail.com', 'answered'),
(36, 'qtn43440035', 'Helping someone to perform Hajj', 'Hajj', 0x4d7920626f737320697320616e206f6c64204d75736c696d2072696368206d616e2077686f736520686173206e6f7420706572666f726d20616e792068616a6a20696e206973206c69666520616e64206e6f7720697320746f6f206f6c6420746f20676f20746f2048616a6a20616e642068652077616e747320746f2073656e64206d65207769746820696e74656e74696f6e206f662068656c70696e672068696d20746f20706572666f726d2069742e0d0a2057696c6c20416c6d69676874792020416c6c61682061636365707420697420666f722068696d3f, 'https://soundcloud.com/user-71335749/can-i-help-to-someone-to-perform-hajj', 'Tue 09-Jul-2019', '09-07-2019', 'oolore22@gmail.com,oluwasinaalexrufai@gmail.com', 'answered'),
(37, 'qtn71790036', 'Which day is Hakeekoh', 'Fiqh', 0x686f77206d616e79206461797320616674657220676976696e6720626972746820697320746865204e616d696e6720636572656d6f6e79, 'https://soundcloud.com/user-71335749/which-day-is-naming-ceremony', 'Tue 09-Jul-2019', '09-07-2019', '', 'answered'),
(38, 'qtn12500037', 'Can a Muslim inherit a khafir', 'Fiqh', 0x41206661746865722077686f206973204d75736c696d207468617420686176652061206368696c642077686f20697320612043687269737469616e207768656e20746865206368696c642064696573206865206c65667420736f206d616e79207468696e67732063616e207468652066617468657220696e68657269742068696d3f, 'https://soundcloud.com/user-71335749/can-a-muslim-father-inherit-his-apostate-child', 'Wed 10-Jul-2019', '10-07-2019', '', 'answered'),
(39, 'qtn46200038', 'what is Islamic ruling on incision', 'Fiqh', 0x776861742069732049736c616d69632072756c696e67206f6e20696e636973696f6e3f, 'https://soundcloud.com/user-71335749/islamic-ruling-on-incision', 'Wed 10-Jul-2019', '10-07-2019', '', 'answered'),
(40, 'qtn58500039', 'Can I help my Father repay his Solat', 'Solat', 0x4d792064616420776173207369636820666f7220736f6d65207765656b206265666f72652068652070617373656420617761792c20647572696e6720746869732074696d65206865206469646e277420706572666f726d2073616c61742c2063616e20492068656c702068696d20746f207265706179207468652073616c6174206865206d69737365642e, 'https://soundcloud.com/user-71335749/can-i-help-my-dad-repay-his-solat', 'Thu 11-Jul-2019', '11-07-2019', '', 'answered'),
(41, 'qtn18170040', 'What should i do if my menstruation days change.', 'Solat', 0x49206e6f726d616c6c792068617665206d79206d6f6e74686c792020706572696f6420666f7220352064617973206265666f72652062757420666f7220746865206c6173742074776f206d6f6e746820492068617665206265656e20736565696e6720697420666f7220372064617973, 'https://soundcloud.com/user-71335749/if-my-menstruasion-increase-beyond-nomal', 'Wed 17-Jul-2019', '17-07-2019', '', 'answered'),
(42, 'qtn89440041', 'Can we use rosary Islamically?', 'Fiqh', 0x63616e2077652075736520726f736572792049736c616d6963616c6c7920616e6420616c736f2063616e2077652075736520636f756e7465723f, 'https://soundcloud.com/user-71335749/ruling-on-using-counter-or-subha', 'Wed 17-Jul-2019', '17-07-2019', '', 'answered'),
(43, 'qtn99810042', 'Hakeeko', 'figh', 0x77686963682064617920697320616b65656b6f3f20736576656e746820646179206f722065696768746820646179, 'https://soundcloud.com/user-71335749/which-day-is-naming-ceremony-1', 'Wed 17-Jul-2019', '17-07-2019', '', 'answered'),
(44, 'qtn30910043', 'family want to distribute estate unIslamically', 'figh', 0x4265666f726520746865206661746865722070617373656420617761792068652077726f746520612077696c6c207468617420686973206573746174652073686f756c642062652064697374726962757465642049736c616d6963616c6c79206275742061667465722068696d2c207468652066616d696c79206465636964656420746f206469737472696275746520697420756e49736c616d6963616c6c792c20506c656173652073686f756c6420746865206368696c6472656e20646f206c65617665207468656d20746f20646f20746861743f, 'https://soundcloud.com/user-71335749/the-family-want-to-shere-inheritanse-unislamically', 'Thu 18-Jul-2019', '18-07-2019', '', 'answered'),
(45, 'qtn34070044', 'Removing Nikhob during Umra', 'hajj', 0x506c6561736520697320746865726520616e792065766964656e636520746861742073617973206120776f6d616e2073686f756c642072656d6f766520686572206e696b686f6220647572696e6720556d72613f, 'https://soundcloud.com/user-71335749/will-i-remove-my-nikob-if-i-want-to-perform-umra', 'Thu 18-Jul-2019', '23-07-2019', '', 'answered'),
(46, 'qtn91510045', 'Can we as a Family contribute money together to kill a ram ?', 'Eid', 0x43616e20776520617320612046616d696c7920636f6e74726962757465206d6f6e657920746f67657468657220746f206b696c6c20612072616d3f, 'https://soundcloud.com/user-71335749/can-a-family-contribute-money-together-to-kill-a-ram', 'Tue 23-Jul-2019', '23-07-2019', '', 'answered'),
(47, 'qtn22900046', 'can I collect ram from an Islamic cooperative and be paying installmentally after eid?', 'Eid', 0x63616e204920636f6c6c6563742072616d2066726f6d20616e2049736c616d696320636f6f706572617469766520616e6420626520706179696e6720696e7374616c6c6d656e74616c6c79206166746572206569643f, 'https://soundcloud.com/user-71335749/can-an-islamic-cooprative-buy-ram-for-her-member', 'Thu 25-Jul-2019', '25-07-2019', '', 'answered'),
(48, 'qtn18340047', 'Opening A Gaming Center', 'Contempory Issues', 0x53616c616d756e20416c61796b756d20536861796b2c2063616e2061206d75736c696d206f70656e20612067616d696e672063656e7465723f, '', 'Fri 26-Jul-2019', '', 'imudathir3@gmail.com', 'unanswered'),
(49, 'qtn27370048', 'Combing beard during the first days of Dhulhijjah', 'Eid', 0x492068617665207665727920746869636b2062656172647320616e64207768656e6576657220492074727920746f20636f6d6220697420736f6d65206f662069742077696c6c2066616c6c2c2073686f756c64206c2073746f7020636f6d62696e6720697420647572696e67207468652066697273742074656e2064617973206f66204468756c68696a6a61682062656361757365204920686176652074686520696e74656e74696f6e206f66206b696c6c696e672052616d2e, 'https://soundcloud.com/user-71335749/can-i-stop-combing-my-beared-becouse-i-want-to-kill-ram', 'Tue 30-Jul-2019', '30-07-2019', '', 'answered'),
(50, 'qtn74960049', 'Ruling on naming child Abuhurayro.', 'Fiqh', 0x4166746572206e616d696e67206d79206368696c6420416264756c7261686d616e2063616e20492067697665204162756875726179726f20746f2068696d2061732061206b756e6979613f, 'https://soundcloud.com/user-71335749/can-i-name-my-child-abuhurayro', 'Wed 31-Jul-2019', '31-07-2019', '', 'answered'),
(51, 'qtn67120050', 'Ruling on including parent in intention of killing ram', 'Eid', 0x492068617665206d6f6e657920746f206b696c6c20612072616d20647572696e672065696420627574206d7920706172656e7420646f6e277420686176652063616e204920696e636c756465207468656d20696e206d7920696e74656e73696f6e206f722063616e2049206576656e206769766520746865206d6f6e657920746f206d7920706172656e7420746f206b696c6c20697420616e6420492077696c6c206e6f74206b696c6c, 'https://soundcloud.com/user-71335749/can-i-include-my-parent-in-my-intension', 'Wed 31-Jul-2019', '31-07-2019', '', 'answered'),
(52, 'qtn94390051', 'Dhul Hijjah', 'Fiqh', 0x417373616c616d7520616c65696b756d20736865696b6821200d0a43616e206120776f6d616e2077686f20696e74656e647320736c61756768746572696e6720616e696d616c20647572696e672066697273742074656e2064617973206f66206468756c2068696a6a616820706c6169742068657220686169723f, 'https://soundcloud.com/user-71335749/woman-platting-hair-during-dhulhija', 'Fri 02-Aug-2019', '10-08-2019', 'arima4link@gmail.com', 'answered'),
(53, 'qtn72650052', 'Must a traveller on the journey answer the call to Salaah while on the road?', 'Solat', 0x4966204920616d20206f6e2061206a6f75726e65792064726976696e67206d792063617220616e6420492068656172642074686520616468616e202c20497320697420636f6d70756c736f7279206f6e206d6520746f20616e73776572207468652063616c6c20746f20707261796572206f7220492063616e20636f6e74696e7565206d79206a6f75726e65792c207468656e2070726179207768656e2049207265616368206d792064657374696e6174696f6e3f, '', 'Sat 03-Aug-2019', '', '', 'unanswered'),
(54, 'qtn48940053', 'on inheritance', 'Fiqh', 0x486f772063616e207468652070726f7065727479206f662074686973206d616e206265206469766964656420616d6f6e672068697320d988d8b1d8abd8a9202e2048652068616420666f757220666c6174732c2074776f20206f6620746865736520666f75722020666c6174732077657265207370656369666963616c6c79206275696c7420666f72206869732074776f207769766573203b6f6e6520666f7220656163682e204865206c65667420626f746820706172656e74732c38206368696c6472656e20283420736f6e7320616e642034206461756768746572732920616e642074776f2077697665732e, '', 'Mon 12-Aug-2019', '', 'ambali.abdulrahman@medisendgec.org', 'unanswered'),
(55, 'qtn70670054', 'Using Harom Money for Hajj', 'Hajj', 0x49206861766520612062726f74686572207468617420646f657320776f726b20696e20726962612062617365642062616e6b20616e6420646f20696e766f6c766520696e206861726f6d20627573696e657373206973206f776e20697320616e797468696e6720746861742077696c6c206272696e67206d6f6e657920776f72746820646f696e67202c20696620686520676f657320746f2068616a6a20776974682074686973206d6f6e65792077696c6c20416c6d696768747920416c6c6168206163636570742069743f, 'https://soundcloud.com/user-71335749/ruling-of-using-harom-money-for-hajj', 'Sat 24-Aug-2019', '24-08-2019', '', 'answered'),
(56, 'qtn2110055', 'ruling of praying on a raise minbar', 'Fiqh', 0x536f6d65206f6620746865206d6f737175657320696e206d7920617265612068617665206120726169736564206d696e6261722c20576861742069732074686973202072756c696e67206f662070726179696e6720696e207468657365206d6f7371756573, 'https://soundcloud.com/user-71335749/can-imam-pray-on-a-raised-place', 'Wed 04-Sep-2019', '04-09-2019', '', 'answered'),
(57, 'qtn11920056', 'Qura\'atul Quran ', 'Solat', 0x496620616e204920616d206973206120706572736f6e20746861742063616e2774207265636974652074686520517572616e20776974682074616a7765656420616e64206865206f6674656e206d616b6573206d697374616b657320647572696e672072656369746174696f6e206f6e20736f6c616174207768657265206172652063616e20776520706c616365207375636820696d616d, '', 'Thu 05-Sep-2019', '', 'Muzycutea@gmail.com', 'unanswered'),
(58, 'qtn89750057', 'congregational prayer', 'Solat', 0x77686174206973207468652072756c696e67206f6620636f6e677265676174696f6e616c207072617965723f, 'https://soundcloud.com/user-71335749/ruling-of-congregational', 'Sat 07-Sep-2019', '07-09-2019', '', 'answered'),
(59, 'qtn11030058', 'Zakat for Salary earner', 'Zakat', 0x4920616d20612073616c617279206865616e65722c20486f772063616e204920706179205a616b61743f, 'https://soundcloud.com/user-71335749/how-can-salary-earner-pay-zakat', 'Sat 07-Sep-2019', '07-09-2019', '', 'answered'),
(60, 'qtn49280059', 'Profit rate on a goods', 'Fiqh', 0x41732061207472616465722077686174206973207468652070726f666974207261746520492063616e20616464206f6e20612070726f6475637420492077616e7420746f2073656c6c3f, 'https://soundcloud.com/user-71335749/what-is-the-profit-rate-in-islam', 'Wed 11-Sep-2019', '11-09-2019', '', 'answered'),
(61, 'qtn36230060', 'Islamic rulling on the use of POS', 'Fiqh', 0x4173616c616d20416c61796b756d20202c20706c7320536865696b682077686174206973207468652072756c696e67206f66207573696e6720504f533f, 'https://soundcloud.com/user-71335749/islamic-ruling-on-the-use-of-pos', 'Wed 25-Sep-2019', '26-09-2019', '', 'answered'),
(62, 'qtn46030061', 'Islamic Ruling on monthly contribution', '', 0x506c656173652c207369722c20492077616e7420436c6172696669636174696f6e206f66207468652049736c616d69632072756c696e67206f6e20746865206d6f6e74686c7920636f6e747269627574696f6e2028416a6f292e, '', 'Thu 26-Sep-2019', '', '', 'unanswered'),
(63, 'qtn18990062', 'Sports', 'Contempory Issues', 0x4d617920416c6c616820626520706c656173656420616e64206265207769746820796f75207369722e0d0a57686174206973207468652072756c696e67206f6e20706c6179696e6720666f6f7462616c6c20616e64207761746368696e672069743f, '', 'Sat 28-Sep-2019', '', 'Ishaqyusufolajide@gmail.com', 'unanswered'),
(64, 'qtn68630063', 'What is the islamic ruling for men dying of hair to any colour order than black (beard and head)', 'Contempory Issues', 0x5768617420646f6573207468652073686161726927612074616c6b732061626f7574206479696e67206f66206861697220746f20616e7920636f6c6f7572206f72646572207468616e20626c61636b20666f72206d656e2c2065697468657220746865206265617264206f7220686561642068616972, '', 'Wed 13-Nov-2019', '', 'smk.seebawaih@gmail.com', 'unanswered'),
(65, 'qtn36750064', '', '', '', '', 'Wed 13-Nov-2019', '', '', 'unanswered'),
(66, 'qtn45620065', 'What is the Islamic rulings on a person that did an introduction/engagement wit a lady(according to ', '', 0x322e, '', 'Sun 01-Dec-2019', '', 'Kareemadeola65@gmail.com', 'unanswered');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(20) NOT NULL,
  `sName` varchar(50) NOT NULL,
  `fName` varchar(250) NOT NULL,
  `lName` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `profilePics` varchar(200) NOT NULL,
  `state` varchar(120) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `userLoginId` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `acct_name` varchar(100) NOT NULL,
  `acct_no` varchar(300) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `customer_class` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `postedby` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `cust_id`, `sName`, `fName`, `lName`, `phone`, `gender`, `profilePics`, `state`, `doj`, `userLoginId`, `address`, `acct_name`, `acct_no`, `bank_name`, `customer_class`, `type`, `postedby`) VALUES
(1, '', 'Odeyale', 'Ajibola', '', '+2348053456634', 'Male', 'user/profilePics/profilePix1.jpg', 'Oyo', '', 1, '', '', '', '0', '', 'Admin', ''),
(25, 'M128118008', 'Akindele', 'Akinsola', 'Adewale', '07019660070', 'Male', 'user/profilePics/profilePix46.jpg', '', 'Tue 09-Jan-2018 | 11 : 46 : 00', 46, 'osungbade molete', '', '', '', 'Basic', 'Customer', ''),
(24, 'M124646007', 'kolade', 'Adisa', 'Adewale', '0805644532', 'Female', 'user/profilePics/profilePix45.jpg', '', 'Sun 17-Dec-2017 | 05 : 44 : 38', 45, 'Sango Ibadan', '', '', '', 'Premium', 'Customer', ''),
(20, 'M121391003', 'Oladele', 'Onaselu', 'Alade', '07019660070', 'Male', 'user/profilePics/profilePix41.jpg', '', 'Mon 30-Oct-2017 | 02 : 23 : 16', 41, 'Ajibade Mokola Ibadan', '', '', '', 'Silver', 'Customer', ''),
(28, 'KXY5715007', 'Musiliudeen', 'Odeyale', 'Kehinde', '8053456634', 'Male', 'user/profilePics/profilePix49.jpg', '', 'Mon 08-Oct-2018 | 21 : 14 : 41', 49, '89, Awolowo Road Okebola Ibadan', '', '', '', 'Basic', 'Customer', ''),
(26, 'M126729005', 'Mustapha', 'Abdul', 'Razaq', '08067829299', 'Male', 'user/profilePics/profilePix47.jpg', '', 'Fri 14-Sep-2018 | 17 : 47 : 59', 47, 'osungbade molete', '', '', '', 'Silver', 'Customer', ''),
(29, 'KXY4382008', 'Musiliudeen', 'Odeyale', 'David', '9023531375', 'Male', 'user/profilePics/profilePix50.jpg', '', 'Mon 08-Oct-2018 | 21 : 49 : 06', 50, 'Allen Avenue Ikeja, Lagos, Ifewumi Street gbaremu Ibadan', '', '', '', 'Silver', 'Customer', 'Odeyale Ajibola ');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `eMail` varchar(250) NOT NULL,
  `password` blob NOT NULL,
  `type` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `userName`, `eMail`, `password`, `type`, `status`) VALUES
(1, 'admin2019', 'odeyale_kehinde@yahoo.com', 0x64326c7a5a4739744f546c4151413d3d, 'Admin', 'Confirmed'),
(46, 'afo', 'afo@yahoo.com', 0x59575a76, 'Customer', 'Pending'),
(45, 'dddd', 'dd@yahoo.com', 0x5a47526b5a413d3d, 'Customer', 'Pending'),
(44, 'akindele', 'ishola@yahoo.com', 0x59577470626d526c6247553d, 'Customer', 'Pending'),
(43, 'kolade', 'odeyale.k@gmail.com', 0x613239735957526c, 'Customer', 'Pending'),
(42, 'admin', 'admin@mile12connect.com', 0x62576c735a544579, 'Staff', 'Pending'),
(41, 'oladele', 'oladele@yahoo.com', 0x623278685a4756735a513d3d, 'Customer', 'Confirmed'),
(40, 'satlink', 'satlinkhost@yahoo.com', 0x6332463062476c75617a453d, 'Customer', 'Confirmed'),
(47, 'mustoy', 'mustoy@yahoo.com', 0x6258567a64473935, 'Customer', 'Pending'),
(48, 'staff1', 'davidnsima@yahoo.com', 0x633352685a6d5978, 'Staff', 'Pending'),
(49, 'odeyale', 'info@markazradio.com', 0x6232526c655746735a513d3d, 'Customer', 'Confirmed'),
(50, 'ode', 'ode@yahoo.com', 0x6232526c, 'Customer', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
