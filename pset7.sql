--
-- Database: `project`
--

CREATE DATABASE IF NOT EXISTS  `project`;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `project`.`users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8;

--
-- Dumping data for table `project`.`users`
--

INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(1, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(2, 'hirschhorn', '$1$50$lJS9HiGK6sphej8c4bnbX.');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(4, 'malan', '$1$HA$azTGIMVlmPi9W9Y12cYSj/');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(5, 'milo', '$1$HA$6DHumQaK4GhpX8QE23C8V1');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(6, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.');
INSERT INTO `project`.`users` (`id`, `username`, `hash`) VALUES(7, 'zamyla', '$1$50$uwfqB45ANW.9.6qaQ.DcF.');
