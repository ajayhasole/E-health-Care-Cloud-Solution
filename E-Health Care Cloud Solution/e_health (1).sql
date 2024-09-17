-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 04:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e health`
--

-- --------------------------------------------------------

--
-- Table structure for table `regp`
--

CREATE TABLE `regp` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `date` text NOT NULL,
  `email` text NOT NULL,
  `moblie` text NOT NULL,
  `adhar` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` text NOT NULL,
  `state` text NOT NULL,
  `height` text NOT NULL,
  `disease` text NOT NULL,
  `operations` text NOT NULL,
  `current` text NOT NULL,
  `iv` text NOT NULL,
  `dname` text NOT NULL,
  `remark` text NOT NULL,
  `date1` text NOT NULL,
  `file` text NOT NULL,
  `iv1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regp`
--

INSERT INTO `regp` (`id`, `fname`, `mname`, `lname`, `date`, `email`, `moblie`, `adhar`, `gender`, `address`, `city`, `pin`, `state`, `height`, `disease`, `operations`, `current`, `iv`, `dname`, `remark`, `date1`, `file`, `iv1`) VALUES
(3, 'BoHwtNA=', 'Fo/ooM2i', 'HI/rutKo', 'Rdeh7JOMlhrhwoY=', 'BoHwtNClhxvnws6u0cXf+zU13Th1Og==', 'Q9qs4oz60Vq8mA==', 'Qdyt5on+1Fi/n5in', 'OY/0sA==', 'PI/1vNq6hwzp', 'PI/1vNq6hwzp', 'QN+u5434', 'OQ==', 'Qto=', 'NYD9uNes', 'GoE=', 'OovusMw=', '164fdfeba1fc03e779b7f94d931c1f7b', '', '', '', '', ''),
(4, '4VawSQ==', '81SwQ85JnRShYQ==', '6F2iX8pF', 'kQXoCYtqlxu6dK99jw==', 'wVawSc5BhRqjcO4y4gd9sKjrqZA8eQ==', 'lwvlBJYZwUf7Iw==', 'lA3pBpMTx0H4Iukw', '7V29VQ==', '6F28WcJXlxGuGNdQwwwwmqDg5p9zUFdIGEjMGkAY1m0HAQ==', '61O9WMdQgwc=', 'lA3nApUV', '7V25UdRBhR27Z7w=', 'lQw=', '4VK0Xc9B', 'zlM=', '7lmnVdQ=', '76b53cbf9a04b1df9967d578e094c61c', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regph`
--

CREATE TABLE `regph` (
  `name` text NOT NULL,
  `user` text NOT NULL,
  `id` text NOT NULL,
  `phoneno` text NOT NULL,
  `mail` text NOT NULL,
  `adhar` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `iv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regph`
--

INSERT INTO `regph` (`name`, `user`, `id`, `phoneno`, `mail`, `adhar`, `password`, `gender`, `iv`) VALUES
('9uFFXN6nJ5b29xOQfC6kTrINIzJUlA==', '', 'hrkQEMbD', 'gLwQEc7NeMWxqQ==', '1uFFXJaVPJjp+knNXSe9D5MAfj5XnA==', 'g7ocE8vHfsOyqE7P', '9uFFXMnGe8HF', '2OU=', '2c5c6bc5add77e4a7dc3eba53613b63d'),
('uOFhq2/sMDaqtq7eLJ/7Bfew7EZOSQ==', '', 'yLk053eI', 'zrw05n+Gb2Xt6A==', 'mOFhqyfeKzi1u/SDDZbiRNa9sUpNQQ==', 'zbo45HqMaWPu6fOB', 'uOFhq3iNbGGZ', 'luU=', '133732a5370f38b453f9f32e3a861a40'),
('DrWRy1CVWZ3Viw4Hn2dko04nlIBLJA==', 'DrWRyxinQpPKhg==', 'fu3Eh0jx', 'eOjEhkD/Bs6S1Q==', 'LrWRyxinQpPKhlRavm594m8qyYxILA==', 'e+7IhEX1AMiR1FNY', 'DrWRy0f0Bcrm', 'ILE=', 'c13d51f1744c2ef2ec3a7718b0f9dacc'),
('e019Jxdmg3TP43PkY1RUcGGAfTuEtw==', 'e019J19UmHrQ7g==', 'CxUoaw8C', 'DRAoagcM3CeIvQ==', 'W019J19UmHrQ7im5Ql1NMUCNIDeHvw==', 'DhYkaAIG2iGLvC67', 'e019JwAH3yP8', 'VUk=', 'affb031730e2554cc5159b285f95159e'),
('Kx/R6Hs6uy+AzW9NksDUAQBLNfnmMw==', 'Kx/R6DMIoCGfwA==', 'W0eEpGNe', 'XUKEpWtQ5HzHkw==', 'Cx/R6DMIoCGfwDUQs8nNQCFGaPXlOw==', 'XkSIp25a4nrEkjIS', 'Kx/R6Gxb53iz', 'BRs=', '40cd76c50794e12262e6be3f25d7ad4e'),
('OLJx1ctp8b72mB/Lwup37iNmpFJ2Yg==', 'OLJx1YNb6rDplQ==', 'SOokmdMN', 'Tu8kmNsDru2xxg==', 'GLJx1YNb6rDplUWW4+NurwJr+V51ag==', 'Tekomt4JqOuyx0KU', 'OLpz7NoIqus=', 'FrY=', '512559d3a29b3366749ae5cfef55cb21'),
('8oGAN7WlOuWhnR2uioZntC8fnHvtRg==', 'Ajayhasole', 'gtnVe63B', 'hNzVeqXPZbbmww==', '0oGAN/2XIeu+kEfzq49+9Q4SwXfuTg==', 'h9rZeKDFY7DlwkDx', '8omCDqTEYbA=', '3IU=', 'e9bb2b3cf058a45997545c267b606a65'),
('uFmc', 'abc', '8RLS8i8O', '9xfS8ycA+EvN2A==', 'oUqHvn9YvBaVi7ngu7zrK/uiZLyDmg==', '8RLS8iAB+kvM1r3i', 'gUKFhyYL/E0=', 'r04=', '6fbe2b79d47d4076a74961edbd4c1738'),
('KcYm', 'MN0/', 'YI1ol1bE', 'Zoholl7KhdSdUg==', 'MNU92waSwYnFAbhRglzj//H0RSnxzg==', 'ZY5klFvAg9KeU79T', 'EN0/4l/BgdI=', 'PtE=', '0a6b071029dbd1f8fcfb5bc2309d65bc'),
('l8sCGSvKA95fduCskNc0/sf1L49qAg==', 'vsAQD2f8CtVNZw==', '55NXVTOu', '5pZUVD+pUogeKg==', 't8sCGWP4GNBAe7rxsd4tv+b4coNpCg==', '4pBbVj6qWosbKb3z', 'l8sCGTyrX4ls', 'uc8=', '54c72f33fc2e768e35b0ea4dc0b01d41'),
('oqxHU6UHxyyfs8i7y/WjDsi4Y7FubA==', 'gqxHU7Jmm3s=', '0vQSH71j', '1PESHrVtmH/Y7Q==', 'gqxHU+013CKAvpLm6vy6T+m1Pr1tZA==', '1/ceHLBnnnnb7JXk', 'oqRFarRmnHk=', 'jKg=', '04aa5d7a744577b4812271022385cadb'),
('M66pkBvINTkrktQ=', 'E66pkBuYBCw2lw==', 'UP310E/f', 'Vvnz1UDbUmhnyw==', 'AKWgnB+JFjcznovHpx7Gug8BcbsKJQ==', 'UP310EDQXGBozok=', 'IK2ipUbaVmw=', 'DqE=', '47731192f52d41a05b65133d17deab5c'),
('ERD8jy6JoH457FrIrvA=', 'MRD8jy7Ki3kj/kjRpw==', 'b0+j22Se', 'aU2k3m2e0idkrQ==', 'PRX4mzvcj3M59FbcsKA39maqf8lcIR+pb/w=', 'Z0ug222Q2iJvrgSL', 'ERD8jy6Y2i9u2Q==', 'MRM=', '1f69d72b57ef719893754e4e598a17f9'),
('+dQXHtpP', '+dQXHtpP', 'oIdQRI4d', 'poJQRYYTYqWVUg==', '8N8FCN5LJvjNAZH7ALncC+K6cxusag==', 'pYRcR4MZZKOWU5b5', '0NcHMYcYZqM=', '/ts=', 'ae5a1284dc8203cd7a1e92007c7f369a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regp`
--
ALTER TABLE `regp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regp`
--
ALTER TABLE `regp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
