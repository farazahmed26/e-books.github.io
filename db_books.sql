-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 07:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_details` text NOT NULL,
  `bs_details` text NOT NULL,
  `b_price` double NOT NULL,
  `b_img` varchar(500) NOT NULL,
  `g_id` int(11) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `b_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_name`, `b_details`, `bs_details`, `b_price`, `b_img`, `g_id`, `author`, `publisher`, `b_year`) VALUES
(1, 'Missadventure', 'The Misadventures of David and Sam (SEG Geophysical Monograph Series No. 15) is a collection of the first six years of David and Sam columns from THE LEADING EDGE. It contains commentary on both the humorous and serious sides of an David and\'s day from the point of view of the fictitious David and Sam, our Everyman of interpretation. Sam introduces each chapter with a caricature of himself (an interpretation of his own reflection, if you will, created by the talented artist David Carman), and in the epilogue, he offers a special gift to his friends in data processing. This book can be read and enjoyed by anyone who has ever interpreted even a single seismic line, by eager students who aspire to be David and, and by nongeo scientists who presume that they know how David and think.', 'The Misadventures of David and Sam is a collection of the first six years of David and Sam. It contains commentary on both the humorous and serious sides of an interpreter\'s day from the point of view of the fictitious David and Sam.\r\n\r\n', 54, 'images/books/grid/book12.jpg', 1, 'Donald A. Herron', 'Society of Exploration', 2009),
(2, 'A Heavy Lift', 'Peter Ash’s friend Lewis has helped him out of jam more times than he can count, and has saved his life more than once. So he doesn’t hesitate when Lewis asks a favor. Lewis has left his criminal past behind, but a former associate may be in trouble, and he and Peter must make a trip to check in on the man. But their visit immediately takes a dark turn when they arrive to find a smoldering cabin. They soon realize that someone has stolen notebooks full of incriminating secrets about Lewis’s long-ago crimes.Lewis and Peter must find the notebooks: They are full of details that not only endanger the family and home that Lewis has built, but place his very life at risk. With June\'s help, they begin to search. Soon they find themselves up against professional criminals, and the two men may have to tap into the dark sides that they have worked to keep hidden in order to take on particularly ruthless enemies.\r\n\r\n', 'War veteran Peter Ash must follow his friend Lewis into a criminal underworld when secrets from the past threaten everything they hold dear in this propulsive new thriller in this bestselling and award-winning series.', 60, 'images/books/grid/book14.jpg', 2, 'Nick Petrie', 'G.P. Putnam\'s Sons', 2010),
(3, 'The Madness', 'Sixteen-year-old Marnie lives in the idyllic coastal village of Clevedon. Despite being crippled by a childhood exposure to polio, she seems set to follow in her mother\'s footsteps, and become a dipper, escorting fragile female bathers into the sea. Her life is simple and safe. But then she meets Noah. Charming, handsome, son-of-the-local-Lord, Noah. She quickly develops a passion for him - a passion which consumes her. As Marnie\'s infatuation turns to fixation she starts to lose her grip on reality, and a harrowing and dangerous obsession develops that seems certain to end in tragedy. Set in the early Victorian era when propriety, modesty and repression were the rule, this is a taut psychological drama in which the breakdown of a young woman\'s emotional state will have a devastating impact on all those around her.\r\n\r\n', 'Sixteen-year-old Marnie lives in the idyllic coastal village of Clevedon. Despite being crippled by a childhood exposure to polio, she seems set to follow in her mother\'s footsteps, and become a \'dipper\', escorting fragile female bathers into the sea', 53, 'images/books/grid/book15.jpg', 4, 'Alison Rattle', 'Hot Key Books', 2016),
(4, 'Such Fun Age', 'Alix Chamberlain is a woman who gets what she wants and has made a living, with her confidence-driven brand, showing other women how to do the same. So she is shocked when her babysitter, Emira Tucker, is confronted while watching the Chamberlains\' toddler one night, walking the aisles of their local high-end supermarket. The store\'s security guard, seeing a young black woman out late with a white child, accuses Emira of kidnapping two-year-old Briar. A small crowd gathers, a bystander films everything, and Emira is furious and humiliated. Alix resolves to make things right\r\n\r\n', 'A striking and surprising debut novel from an exhilarating new voice, Such a Fun Age is a page-turning and big-hearted story about race and privilege, set around a young black babysitter, her well-intentioned employer, and a surprising connection that threatens to undo them both.', 89, 'images/books/grid/book4.jpg', 3, 'Geri Weis-Corbley', 'White Cloud Press', 2018),
(5, 'Pushing Clouds', 'Pushing Clouds Against the Wind is the second book by South Texas second life poet Allen Itz. His first book, \'Seven Beats a Second\' was described by one reviewer as \'humerous...compelling and lovable...leaving out the pretentious, the politically correct and memory manipulation.\' This new book is like his first, simple, casual reading for both poetry lovers and those who think poetry is not for them.\r\n\r\n', 'Pushing Clouds Against the Wind is the second book by South Texas second life poet Allen Itz. His first book, \'Seven Beats a Second\' was described by one reviewer as \'humerous...compelling and lovable...leaving out the pretentious, the politically correct and memory manipulation.\' This new book is like his first, simple, casual reading for both poetry lovers and those who think poetry is not for them.', 52, 'images/books/grid/book9.jpg', 1, 'L.M.Montgomery', 'Little Brown', 2014),
(6, 'Homie', 'Homie is Danez Smith’s magnificent anthem about the saving grace of friendship. Rooted in the loss of one of Smith’s close friends, this book comes out of the search for joy and intimacy within a nation where both can seem scarce and getting scarcer. In poems of rare power and generosity, Smith acknowledges that in a country overrun by violence, xenophobia, and disparity, and in a body defined by race, queerness, and diagnosis, it can be hard to survive, even harder to remember reasons for living. But then the phone lights up, or a shout comes up to the window, and family―blood and chosen―arrives with just the right food and some redemption. Part friendship diary, part bright elegy, part war cry, Homie is the exuberant new book written for Danez and for Danez’s friends and for you and for yours.\r\n\r\n', 'FINALIST FOR THE 2020 NATIONAL BOOK CRITICS CIRCLE AWARD FOR POETRY FINALIST FOR THE 2021 NAACP IMAGE AWARD FOR POETRY Danez Smith is our president Homie is Danez Smith\'s magnificent anthem about the saving grace of friendship.', 46, 'images/books/grid/book2.jpg', 4, 'Alison Rattle', 'Hot Key Books', 2016),
(7, 'Seconds', '36 hours ago: A vicious serial killer is arrested on the streets of north London after a two-year reign of terror. Known only as the Night Creeper, he’s earned his reputation by torturing five young women to death.24 hours ago: Undercover cop Sean Egan has infiltrated one of the country’s most notorious criminal gangs. Now he’s about to risk his life in a desperate bid to bring its members to justice.12 hours ago: DI Tina Boyd has discovered that the Night Creeper’s murders are part of a much larger criminal conspiracy. But her quest for the truth has brought her into contact with some very dangerous people who want to silence her—permanently.The last 10 seconds: A man, a woman, a sadistic killer. As they race toward a terrifying confrontation only one thing is certain: when time runs out, not everyone will still be alive.\r\n\r\n', 'Tina Boyd discovers that the work of the Night Creeper, a serial killer arrested two years prior, is part of a much larger criminal conspiracy. By the #1 internationally best-selling author of Target. Original. 30,000 first printing.', 55, 'images/books/grid/book7.jpg', 7, 'Kiley Reid', 'G.P. Putnam\'s Sons', 2014),
(8, 'Rework', 'The truth is, you need less than you think. You don\'t need to be a workaholic. You don\'t need to staff up. You don\'t need to waste time on paperwork or meetings. You don\'t even need an office. Those are all just excuses. What you really need to do is stop talking and start working. This book shows you the way. You\'ll learn how to be more productive, how to get exposure without breaking the bank, and tons more counterintuitive ideas that will inspire and provoke you.With its straightforward language and easy-is-better approach, Rework is the perfect playbook for anyone who’s ever dreamed of doing it on their own. Hardcore entrepreneurs, small-business owners, people stuck in day jobs they hate, and artists who don’t want to starve anymore will all find valuable guidance in these pages.\r\n\r\n', 'You don\'t need to staff up. You don\'t need to waste time on paperwork or meetings. You don\'t even need an office. Those are all just excuses. What you really need to do is stop talking and start working. This book shows you the way.', 39, 'images/books/grid/book13.jpg', 5, 'Richard Gilling', 'Author House', 2010),
(9, 'All Good News', 'To get where you want to go, you first need to know where you are.Though Jesus is God’s sinless Son, he became a human in order to substitute himself in place of us and pay the penalty for our sins. The Bible says “there is one God, and there is one mediator between God and men, the man Christ Jesus” (1 Timothy 2:5). “Christ…suffered once for sins, the righteous for the unrighteous, that he might bring us to God” (1 Peter 3:18). It also says “God shows his love for us in that while we were still sinners, Christ died for us….the free gift of God is eternal life in Christ Jesus our Lord” (Romans 5:8, 6:23).Christ died on a cross and rose from the grave (1 Corinthians 15:3-4). By doing that he bridged the otherwise uncrossable chasm between God and us, providing us the only way to have forgiveness of sin, a personal relationship with God, and eternal life.\r\n\r\n', 'This collection celebrates GNN\'s 20th anniversary of publishing positive news from around the world at GNN.org. Founded in 1997 by former TV news editor Geri Weis-Corbley, these are among her favorite GNN stories from two decades.', 25, 'images/books/grid/book11.jpg', 5, 'Danez Smith', 'Graywolf Press', 2020),
(10, 'Emily Backbone', 'Emily Starr never knew what it was to be lonely—until her beloved father died. Now Emily\'s an orphan, and her mother\'s snobbish relatives are taking her to live with them at New Moon Farm. She\'s sure she won\'t be happy. Emily deals with stiff, stern Aunt Elizabeth and her malicious classmates by holding her head high and using her quick wit. Things begin to change when she makes friends: with Teddy, who does marvelous drawings; with Perry, who\'s sailed all over the world with his father yet has never been to school; and above all, with Ilse, a tomboy with a blazing temper. Amazingly, Emily finds New Moon beautiful and fascinating. With new friends and adventures, Emily might someday think of herself as Emily of New Moon.\r\n\r\n', 'They decide to draw lots for her, and Emily is sent to live at New Moon with stern Aunt Elizabeth, the head of the clan. Kind Aunt Laura and friendly, eccentric Cousin Jimmy also live at New Moon,though so she is not without hope.', 40, 'images/books/grid/book10.jpg', 5, 'Simon Kernick', 'Printarea Studios', 2019),
(11, 'Real Life', 'Almost everything about Wallace is at odds with the Midwestern university town where he is working uneasily toward a biochem degree. An introverted young man from Alabama, black and queer, he has left behind his family without escaping the long shadows of his childhood. For reasons of self-preservation, Wallace has enforced a wary distance even within his own circle of friends—some dating each other, some dating women, some feigning straightness. But over the course of a late-summer weekend, a series of confrontations with colleagues, and an unexpected encounter with an ostensibly straight, white classmate, conspire to fracture his defenses while exposing long-hidden currents of hostility and desire within their community. Real Life is a novel of profound and lacerating power, a story that asks if it’s ever really possible to overcome our private wounds, and at what cost.\r\n\r\n', 'Almost everything about Wallace is at odds with the Midwestern university town where he is working uneasily toward a biochem degree. An introverted young man from Alabama, black and queer, he has left behind his family without escaping the long shadows of his childhood', 60, 'images/books/grid/book1.jpg', 8, 'Jason Fried', 'Crown', 2010),
(12, 'Cat Adventure', 'Begin your exploration of the Realm with the Core Rulebook for the Cat Adventures Fantasy Roleplaying Game! Magical forests, treacherous mountains, deadly dungeons, and more await you between these pages.Begin your adventures as any of ten classes (assassin, druid, minstrel, priest, prophet, scout, sorcerer, thief, warrior, or wizard) and seven ancestries (elf, dwarf, human, ghoul, leywalker, troll, and sprite).The Cat Adventures Fantasy Roleplaying Game is a hardcover book divided into two sections: the Player\'s Guide and the Game Master’s Guide. In the back of the book, you\'ll find Light and Dark Fate tokens, character sheets, and six pre-gen characters. It also includes a short, starting adventure, Death’s Messenger, so that you can jump right into the action.\r\n\r\n', 'The Cat Adventures Fantasy Roleplaying Game is a hardcover book divided into two sections: the Player\'s Guide and the Game Master\'s Guide. In the back of the book, you will find Light and Dark Fate tokens, character sheets, and six pre-gen characters', 60, 'images/books/grid/book8.jpg', 4, 'Jason Fried', 'Crown', 2010),
(22, 'Think and Grow Rich', 'Think and Grow Rich has been called the \"Granddaddy of All Motivational Literature.\" It was the first book to boldly ask, \"What makes a winner?\" The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world\'s winners himself. The most famous of all teachers of success spent \"a fortune and the better part of a lifetime of effort\" to produce the \"Law of Success\" philosophy that forms the basis of his books and that is so powerfully summarized in this one.  In the original Think and Grow Rich, published in 1937, Hill draws on stories of Andrew Carnegie, Thomas Edison, Henry Ford, and other millionaires of his generation to illustrate his principles. In the updated version, Arthur R. Pell, Ph.D., a nationally known author, lecturer, and consultant in human resources management and an expert in applying Hill\'s thought, deftly interweaves anecdotes of how contemporary millionaires and billionaires, such as Bill Gates, Mary Kay Ash, Dave Thomas, and Sir John Templeton, achieved their wealth. Outmoded or arcane terminology and examples are faithfully refreshed to preclude any stumbling blocks to a new generation of readers.', 'Think and Grow Rich has been called the \"Granddaddy of All Motivational Literature.\" It was the first book to boldly ask, \"What makes a winner?\" The man who asked and listened for the answer, Napoleon Hill, is now counted in the top ranks of the world\'s winners himself.', 10, 'images/books/grid/book17.png', 3, 'Arthur R. Pell ', 'Printarea Studios', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `comp_id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `title_file` varchar(50) NOT NULL,
  `comp_category` varchar(50) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`comp_id`, `title`, `title_file`, `comp_category`, `customer_id`) VALUES
(1, 'project', 'Design-Document Bright World LED.docx', 'Story', 3),
(2, 'my story', 'Design-Document Bright World LED.docx', 'Story', 0),
(3, 'my story', 'Developers-Guide Bright World.docx', 'Story', 0),
(4, 'hfhf', 'e-Project Report e-books 2.docx', 'Story', 0),
(5, 'hjjjy', 'eProject_Status_Report(e-books).xls', 'Story', 0),
(6, 'pakistan', 'Design-Document Bright World LED.docx', 'Story', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `f_name`, `l_name`, `u_name`, `email`, `pass`, `gen`, `address`, `phone`, `city`, `profile`) VALUES
(1, 'Bilal', 'Hussain', 'bilal21', 'bilal21@gmail.com', '12345', 'male', 'R-90 street 02, North Nazimabad Karachi.', '03002456789', 'Karachi', 'images/clients/male.jpg'),
(3, 'hareem', 'imran', 'hareem', 'hareem@gmail.com', 'hareem', 'female', 'R-90 street 02, North Nazimabad Karachi.', '03004547782', 'Karachi', 'images/clients/female.png'),
(4, 'umer', 'saleem', 'umer4458', 'umer@gmail.com', '123456789', 'male', 'R-90 street 02, North Nazimabad Karachi.', '4454545', 'Lahore', 'images/clients/male.jpg'),
(5, 'Munazza', 'Bashir', 'munazza12', 'munazza@gmail.com', '123456', 'female', 'R-90 street 02, North Nazimabad Karachi.', '033245565', 'Quetta', 'images/clients/female.png'),
(6, 'faraz', 'khan', 'farazfk', 'faraz@gmail.com', 'faraz', 'male', 'R-90 street 02, North Nazimabad Karachi.', '03142305771', 'Islamabad', 'images/clients/male.jpg'),
(7, 'bilal', 'shah', 'bilal2100', 'bilal21@gmail.com', 'bilal', 'male', 'North Nazimabad Karachi.', '03142305771', 'Hydeabad', 'images/clients/male.jpg'),
(8, 'umer', 'saleem', 'umer12', 'umer@gmail.com', 'umer', 'male', 'nazimabad ,karachi', '123456789', 'Lahore', 'images/clients/male.jpg'),
(9, 'Arshman', 'Imran', 'arsh18', 'arsh18@gmail.com', 'arsh', 'male', 'abcd efg hging hhj', '030012345677', 'Karachi', '');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `g_id` int(10) NOT NULL,
  `g_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`g_id`, `g_name`) VALUES
(1, 'Academic'),
(2, 'Biographies'),
(3, 'Classic'),
(4, 'Drama'),
(5, 'Fiction'),
(6, 'Non-Fiction'),
(7, 'History'),
(8, 'Romace');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `o_date` date NOT NULL,
  `o_qty` int(10) NOT NULL,
  `b_id` int(10) DEFAULT NULL,
  `c_id` int(10) DEFAULT NULL,
  `o_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_date`, `o_qty`, `b_id`, `c_id`, `o_total`) VALUES
(1361456, '2022-01-18', 1, 12, 3, 60),
(1361457, '2023-01-18', 1, 3, 3, 53),
(1361458, '2023-01-18', 2, 1, 3, 110),
(1361459, '2023-01-18', 1, 12, 3, 60),
(1361460, '2023-01-18', 3, 2, 3, 180),
(1361461, '2023-01-18', 1, 22, 3, 10),
(1361462, '2023-01-18', 3, 9, 3, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `g_index` (`g_id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `b_id` (`b_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `g_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1361463;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`g_id`) REFERENCES `genre` (`g_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_books` FOREIGN KEY (`b_id`) REFERENCES `books` (`b_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cust` FOREIGN KEY (`c_id`) REFERENCES `customers` (`c_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
