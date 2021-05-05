SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uId` varchar(255) DEFAULT NULL,
  `uEmail` varchar(255) DEFAULT NULL,
  `uPass` varchar(255) DEFAULT NULL,
  `uRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `uId`, `uEmail`, `uPass`, `uRole`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$JDvjGGeEqIb.7pFetZaYxuz4jfYCwvuhOaNH38ApG40v1LxcIx/86', 1);

ALTER TABLE `users`
  ADD KEY `id` (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
