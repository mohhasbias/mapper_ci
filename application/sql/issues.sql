CREATE TABLE IF NOT EXISTS `issues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL DEFAULT 'Untitled',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL, 
  PRIMARY KEY (`id`)
)
