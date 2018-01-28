SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `news` (`id`, `title`, `description`) VALUES
(0, "We're expanding our core cosmetics collection to include over 100 new items—including skins, sprays, player icons, emotes, and more—for all 26 heroes. And, starting January 23, you’ll be able to earn these cosmetics in standard Loot Boxes as well as unlock them via the Hero Gallery all year round. We've already announced a few of the items included in this update at BlizzCon 2017, but there's so much more to share! Leading up to the official release next week, we'll be unveiling new cosmetics each day for the next six days. Check out the galleries below to see what's already been revealed, and be sure to visit this page daily for a first look at some of the newest collectibles coming soon.");


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `mail`, `user`, `pass`) VALUES
(0, 'stepanic.mateja@gmail.com', 'tea', '123123');