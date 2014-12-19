

--
-- Database: `cake_gamesfeatures`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `created` TEXT,
  `modified` TEXT
);

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Aston Martin', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(2, 'Acura', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(3, 'Audi', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(4, 'Bentley', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(5, 'Bmw', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(6, 'Bugatti', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(7, 'Buick', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(8, 'Cadillac', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(9, 'Chevrolet', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(10, 'Chrysler', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(11, 'Dodge', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(12, 'Ferrari', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(13, 'Ford', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(14, 'Gmc', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(15, 'Honda', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(16, 'Hyundai', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(17, 'Infiniti', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(18, 'Jaguar', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(19, 'Jeep', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(20, 'Lamborghini', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(21, 'Lexus', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(22, 'Lincoln', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(23, 'Maserati', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(24, 'Mazda', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(25, 'Mercedes-Benz', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(26, 'Mitsubishi', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(27, 'Tesla', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(28, 'Nissan', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(29, 'Porsche', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(30, 'Rolls Royce', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(31, 'Subaru', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(32, 'Tesla', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(33, 'Toyota', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(34, 'Volkswagen', '2014-11-17 10:46:13', '2014-11-17 10:46:13'),
(35, 'Volvo', '2014-11-17 10:46:13', '2014-11-17 10:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT
);

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`) VALUES
(1, 'GG'),
(2, 'Great Game'),
(3, 'Amazing game'),
(4, 'I approuve this game'),
(5, 'YOU SHOULD PLAY THIS');

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
`id` INTEGER PRIMARY KEY ASC,
  `name` TEXT,
  `details` TEXT,
  `created` TEXT,
  `modified` TEXT
);

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`id`, `name`, `details`, `created`, `modified`) VALUES
(1, 'ArenaNet', 'ArenaNet is a video game developer and subsidiary of NCsoft, founded in 2000 by Mike O''Brien, Patrick Wyatt and Jeff Strain and located in Bellevue, Washington. They are the developers of the online role-playing game series Guild Wars.\r\n\r\nsource : http://en.wikipedia.org/wiki/ArenaNet', '2014-10-21 00:00:00', '2014-10-21 00:00:00'),
(2, 'EA Digital Illusions CE AB', 'EA Digital Illusions Creative Entertainment AB[3] (also known as EA Digital Illusions CE, EA DICE, or DICE) is a Swedish video game developer, wholly owned by Electronic Arts. The company is best known for video games such as the Battlefield series and Mirror''s Edge.\r\n\r\nsource : http://en.wikipedia.org/wiki/EA_Digital_Illusions_CE', '2014-10-21 00:00:00', '2014-10-21 00:00:00'),
(3, 'Ubisoft', 'Ubisoft Entertainment S.A. is a French multinational video game developer and publisher, headquartered in Montreuil, France.[1] It is known for developing games for several acclaimed video game franchises including Assassin''s Creed, Far Cry, Ghost Recon, Just Dance, Rainbow Six, Prince Of Persia, Rayman and Splinter Cell.\r\nsource: http://en.wikipedia.org/wiki/Ubisoft', '2014-10-22 17:45:11', '2014-10-22 17:45:11'),
(4, 'Gala Inc.', 'Gala Inc.  is a holding company based in Tokyo, Japan, that administers GALA Group, which is made up of subsidiary companies of Gala Inc. The group of companies embraces three types of business: MMORPG games, web design and data mining. Within the group companies, Gala Lab Corp., established after the merger of Aeonsoft and nFlavor,[1] located in South Korea, develops games for the group''s online gaming portal gPotato. GALA Group focuses on developing massively multiplayer online role-playing games and licensing games from primarily Asian developers for a North American, European, Asian and South American audience. To cover local areas, there are Group companies located in the USA, Japan and South Korea', '2014-10-30 00:00:00', '2014-10-30 00:00:00'),
(5, 'Bungie', 'Bungie, Inc. is an American video game developer located in Bellevue, Washington, U.S. The company was established in May 1991 as Bungie Software Products Corporation by University of Chicago undergraduate student Alex Seropian, who later brought in programmer Jason Jones after publishing Jones'' game Minotaur: The Labyrinths of Crete. Originally based in Chicago, Illinois, the company concentrated primarily on Macintosh games during its early years and created two very successful video game franchises called Marathon and Myth. A West Coast offshoot produced the PC and console title Oni.', '2014-12-07 16:24:17', '2014-12-07 16:24:17'),
(9, '2K Games', '2K Games, Inc. is an American global developer, marketer, distributor and publisher of video games, like Borderlands, Civilization V, & NBA2K.[1] 2K Games is a subsidiary of Take-Two Interactive. It was created on January 25, 2005 after Take-Two acquired developer Visual Concepts and its wholly owned subsidiary Kush Games from Sega for US$24 million.[2] ', '2014-12-16 21:03:47', '2014-12-16 21:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
`id` INTEGER PRIMARY KEY ASC,
  `title` TEXT,
  `feature_name` TEXT,
  `created` TEXT,
  `modified` TEXT
);

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `feature_name`, `created`, `modified`) VALUES
(1, 'fantasy,sword and sorcery,character progression and social interaction', 'Massive multiplayer online Role-Playing Game', '2014-10-21 00:00:00', '2014-10-21 00:00:00'),
(2, 'shooter game,army,war, and cooperation', 'First-person shooter', '2014-10-21 00:00:00', '2014-10-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
`id` INTEGER PRIMARY KEY ASC,
  `creator_id` INTEGER,
  `feature_id` INTEGER,
  `title` TEXT,
  `discription` TEXT,
  `filename` TEXT,
  `comment_id` INTEGER,
  `created` TEXT,
  `modified` TEXT,
  `user_id` INTEGER
);

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `creator_id`, `feature_id`, `title`, `discription`, `filename`, `comment_id`, `created`, `modified`, `user_id`) VALUES
(1, 1, 1, 'Guild Wars 2', 'Guild Wars 2 is a massively multiplayer online role-playing game developed by ArenaNet and published by NCsoft. Set in the fantasy world of Tyria, the game follows the re-emergence of Destiny''s Edge, a disbanded guild dedicated to fighting the Elder Dragons, a Lovecraftian species that has seized control of Tyria in the time since the original Guild Wars. The game takes place in a persistent world with a story that progresses in instanced environments.\r\n\r\nsource :http://en.wikipedia.org/wiki/Guild_Wars_2', 'uploads/gw2.png', 0, '2014-10-21 00:00:00', '2014-12-16 20:25:38', 1),
(2, 2, 2, 'Battle Field 4', 'Battlefield 4 is a 2013 first-person shooter video game developed by Swedish video game developer EA Digital Illusions CE (DICE) and published by Electronic Arts. It is a sequel to 2011''s Battlefield 3 and was released on October 29, 2013 in North America, October 31, 2013 in Australia, November 1, 2013 in Europe and New Zealand and November 7, 2013 in Japan for Microsoft Windows, PlayStation 3, PlayStation 4, Xbox 360 and Xbox One.\r\n\r\nsource :http://en.wikipedia.org/wiki/Battlefield_4', 'uploads/bf4pgeouo.jpg', 0, '2014-10-21 00:00:00', '2014-12-07 15:14:25', 1),
(3, 4, 1, 'Rappelz', 'Rappelz is a free-to-play massively multiplayer online role-playing game. The game is developed by the Korean company Gala Lab, formerly nFlavor. It is published in Europe and North America by Webzen, Inc. in English, French, German, Italian, Polish and Turkish. As of October 2008, Rappelz was also being published by the South East Asia based game publishing company AsiaSoft as RappelzSEA.\r\nsource : http://en.wikipedia.org/wiki/Rappelz', 'uploads/rappelz.jpg', 0, '2014-10-30 00:00:00', '2014-12-07 16:27:43', 1),
(4, 3, 1, 'Assassin''s Creed', 'Assassin''s Creed is a historical fiction action-adventure open world stealth video game series that consists of eight main games and a number of supporting materials, as of 2013. The games have appeared on the PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Microsoft Windows, Mac OS X, Nintendo DS, PlayStation Portable, PlayStation Vita, iOS, HP webOS,[1] Android, Nokia Symbian Windows Phone platforms, and the Wii U.\r\nsource : http://en.wikipedia.org/wiki/Assassin''s_Creed', 'uploads/ac.jpg', 0, '2014-10-24 20:28:47', '2014-12-07 15:15:22', 1),
(5, 2, 2, 'Crysis 3', 'Crysis 3 is a first-person shooter video game developed by the German game developer Crytek and is published by Electronic Arts (EA) for Microsoft Windows, PlayStation 3, and Xbox 360. It was released in North America on February 19, 2013.[3] Officially announced April 14, 2012, it is the third main installment of the Crysis series, a sequel to the 2011 video game Crysis 2, and runs on the CryEngine 3 game engine. Crysis 3 has won PC Gamer Most Valuable Game, Game Informer Best of Show and Electric Playground Best of E3 awards. source : http://en.wikipedia.org/wiki/Crysis_3', 'uploads/Crysis_3_cover.jpg', 0, '2014-10-30 00:00:00', '2014-12-07 14:57:19', 1),
(9, 5, 2, 'Destiny', 'Destiny is an online first-person shooter video game in a "mythic science fiction" setting.[6] It was developed by Bungie and published by Activision as part of a ten-year publishing deal.[7] The game was released on the PlayStation 3, PlayStation 4,[8] Xbox 360, and Xbox One[9] video game consoles on September 9, 2014.[4]\r\n\r\nsource : http://en.wikipedia.org/wiki/Destiny_%28video_game%29', 'uploads/des.png', 0, '2014-12-07 16:27:09', '2014-12-07 16:27:09', 9),
(19, 2, 1, 'The Sims 4', 'The Sims 4 is a 2014 life simulation video game developed by EA Maxis and The Sims Studio and published by Electronic Arts. The Sims 4 was originally announced on May 6, 2013, and was released in North America on September 2, 2014 for Microsoft Windows.[1] A Mac release has not been confirmed.[2] There are currently no plans for a console release.[3][4] The Sims 4 is the first PC game to top all-format charts in two years and sold 408,150 copies worldwide in the first four days. As of November the game has sold over 1.10 million copies worldwide.[5][6][7] Critically the game had a mixed reception, generally less favourable than its predecessors.', 'uploads/sim4.jpg', 0, '2014-12-15 17:53:30', '2014-12-15 17:53:30', 1),
(22, 9, 2, 'BioShock Infinite', 'BioShock Infinite is a first-person shooter video game developed by Irrational Games and published by 2K Games. It was released worldwide for the Microsoft Windows, PlayStation 3, and Xbox 360 platforms on March 26, 2013; an OS X port by Aspyr was later released on August 29, 2013 and a Linux port has been announced for 2015. Infinite is the third installment in the BioShock series, and though it is not immediately part of the storyline of previous BioShock games, it does feature similar gameplay concepts and themes. Irrational Games and creative director Ken Levine based the game''s setting on historical events at the turn of the 20th century, such as the 1893 World''s Columbian Exposition, and based the story on the concept of American exceptionalism, while also incorporating influences from more recent events at the time such as the 2011 Occupy movement.', 'uploads/BioShockInfinite_Boxart_12012012.jpg', 0, '2014-12-16 21:04:50', '2014-12-16 21:04:50', 1),
(23, 9, 0, '', '', '', 5, '2014-12-16 21:14:00', '2014-12-16 21:14:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_features`
--

CREATE TABLE `game_features` (
`id` INTEGER PRIMARY KEY ASC,
  `engine` TEXT,
  `plateform` TEXT,
  `game_id` INTEGER,
  `feature_id` INTEGER,
  `created` TEXT,
  `modified` TEXT
);

--
-- Dumping data for table `game_features`
--

INSERT INTO `game_features` (`id`, `engine`, `plateform`, `game_id`, `feature_id`, `created`, `modified`) VALUES
(1, 'CryEngine 3', 'Microsoft Windows, PlayStation 3, Xbox 360', 5, 2, '2014-10-30 00:00:00', '2014-10-30 00:00:00'),
(2, 'Frostbite 3', 'Microsoft WindowsPlayStation 3PlayStation 4Xbox 360Xbox One', 2, 2, '2014-10-30 00:00:00', '2014-10-30 14:28:02'),
(3, 'Anvil', 'Microsoft Windows\r\nPlayStation 3\r\nPlayStation 4\r\nPlayStation Vita\r\nWii U\r\nXbox 360\r\nXbox One', 4, 1, '2014-10-30 00:00:00', '2014-10-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` INTEGER PRIMARY KEY ASC,
  `username` TEXT,
  `password` TEXT,
  `role` TEXT,
  `email` TEXT,
  `created` TEXT,
  `modified` TEXT
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created`, `modified`) VALUES
(1, 'conrad', '$2a$10$JnU/M4RXJm.nDi3dCHR4LOl7HeDdOt.3eeHbejHWRJqSI5ndoPAxi', 'admin', 'conrad@hotmail.com', '2014-10-21 20:46:38', '2014-10-21 20:46:38'),
(2, 'conrad2', '$2a$10$omXCd1QxtM4D05b1shd8ees2DnqZ19yGqHh/om2gyJB2DQJxdchOS', '', 'coco@coco.com', '2014-10-22 14:28:49', '2014-10-22 14:28:49'),
(9, 'al', '$2a$10$.MtzWSTlkm8KlEtYfTXBMuep2Y7Iukhik4jeWRNtbzsNIHj9onaCu', '', 'al@al.com', '2014-12-07 16:21:45', '2014-12-07 16:21:45');

--
-- Indexes for dumped tables
--