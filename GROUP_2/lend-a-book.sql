-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 12:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lend-a-book`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `book_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descriptions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `descriptions`) VALUES
(1, 'Action', ''),
(2, 'Adult', ''),
(3, 'Children', ''),
(4, 'Fantasy', ''),
(5, 'Horror', ''),
(6, 'Mystery', ''),
(7, 'Nature', ''),
(8, 'Romance', ''),
(9, 'Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(255) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `cart_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `phone_no` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pay_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(100) NOT NULL,
  `pay_mode` varchar(50) NOT NULL DEFAULT 'COD',
  `user_id` int(100) NOT NULL,
  `book_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` int(50) NOT NULL,
  `image_source` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_price`, `image_source`, `category_id`) VALUES
(1, 'The Dark Rising', 'On the Midwinter Day that is his eleventh birthday, Will Stanton discovers a special gift -- that he is the last of the Old Ones, immortals dedicated to keeping the world from domination by the forces of evil, the Dark. At once, he is plunged into a quest for the six magical Signs that will one day aid the Old Ones in the final battle between the Dark and the Light. And for the twelve days of Christmas, while the Dark is rising, life for Will is full of wonder, terror, and delight.', 350, 'RESOURCES/Books//list-of-books/thedarkisrising.jpg', 4),
(2, 'Starsight', 'All her life, Spensa\'s dreamed of becoming a pilot and proving herself a hero like her father. She made it to the sky, but the truths she learned there were crushing. The rumors of her father\'s cowardice are true--he deserted his Flight during battle against the Krell. Worse, though, he turned against his team and attacked them.', 600, 'RESOURCES/Books//list-of-books/starsight.jpg', 4),
(3, 'Harry Potter', 'Turning the envelope over, his hand trembling, Harry saw a purple wax seal bearing a coat of arms; a lion, an eagle, a badger and a snake surrounding a large letter H.\r\n\r\nHarry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry`s eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!', 380, 'RESOURCES/Books//list-of-books/harry potter.jpg', 4),
(4, 'Scythe', 'Two teens must learn the \"art of killing\" in this Printz Honor-winning book, the first in a chilling new series from Neal Shusterman, author of the New York Times best-selling Unwind Dystology series.\r\n\r\nA world with no hunger, no disease, no war, no misery: Humanity has conquered all those things and has even conquered death. Now Scythes are the only ones who can end life - and they are commanded to do so in order to keep the size of the population under control.', 280, 'RESOURCES/Books//list-of-books/scythe.jpg', 4),
(5, 'The Blackness', 'When Lisa discovers a deadly virus that has the potential to spread across the globe and wipe out millions of people, she knows she must find a way to stop it. In this suspenseful novel, Lisa embarks on a desperate mission to find a cure before it\'s too late. With the help of a brilliant scientist and their daring experiments, Lisa races against the clock to save the world from the virus. Along the way, she faces personal and professional challenges, and must confront the limits of her own courage and strength. Will Lisa be able to find a way to stop the virus before it\'s too late?', 250, 'RESOURCES/Books//list-of-books/1.jpg', 1),
(6, 'The Days Lost', 'In The Days Lost, Chris—a loving father and husband—is struggling to come to terms with the unexpected death of his young son. As his wife and daughter struggle to find their footing in this new reality, Chris embarks on a painful journey of grief and self-discovery. With the support of his family and friends, Chris slowly begins to heal and find joy in life again, but the tragedy continues to haunt him. Through Chris’s journey, The Days Lost offers readers a glimpse into the depths of grief, showing how even in the darkest moments of loss, hope and light can be found.', 200, 'RESOURCES/Books//list-of-books/2.jpg', 2),
(7, 'Married in The Park', 'Anna is a heart breaker. She loves the thrill of the chase and has no regrets about playing the field. Until she meets Jacob. Jacob is the one she\'s been looking for all along and he changes everything. She can’t help but fall in love with him, and they soon plan to get married in the park. As the day of the wedding approaches, Anna realizes the true cost of her past indiscretions. Will her newfound commitment to Jacob be enough to make up for her past? In this romantic story, Anna\'s journey will have readers laughing, crying and rooting for a happily ever after.', 300, 'RESOURCES/Books//list-of-books/20.jpg', 8),
(8, 'Skies of Heaven', 'Kevin was just a kid with a kind heart and the world at his feet. But when he died in an accident, he was given a second chance at life. In Skies of Heaven, Kevin embarks on a journey of self-discovery and healing, learning to make the most of the life he was given. With the help of his newfound friends, Kevin must learn to let go of the pain of his past and embrace the joy of the future. Along the way, Kevin will discover the power to create his own destiny and make the most out of his second chance at life.', 200, 'RESOURCES/Books//list-of-books/43.jpg', 3),
(9, 'The Siege', 'In The Siege, acclaimed medical journalist and author Dr. Michael J. Klaper takes readers on a captivating journey through the human body’s sophisticated and complex defense system. From the moment of conception, our bodies are constantly bombarded with dangerous pathogens and viruses, yet our immune systems are tirelessly at work to protect us. Dr. Klaper examines our body’s intricate network of defenses, shedding light on how it works to protect us from disease and infection, and how modern medicine has impacted the body’s ability to fight back. Through vivid descriptions, Dr. Klaper reveals the fascinating strategies our immune system uses to win the battle against disease, and the ways in which we can help our body to defend itself.', 200, 'RESOURCES/Books//list-of-books/41.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'Admin', 'Admin', 'Admin@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id_message` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id_message`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
