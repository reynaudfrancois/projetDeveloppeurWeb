-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 28 fév. 2020 à 21:37
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `dated` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comment`, `name`, `firstname`, `email`, `content`, `dated`, `id`) VALUES
(1, 'François', 'REYNAUD', 'UNKNOWN', 'huihuo', '2020-01-21 00:00:00', 1),
(2, 'François', 'REYNAUD', 'UNKNOWN', 'huihuo', '2020-01-21 00:00:00', 1),
(3, 'François', 'REYNAUD', 'UNKNOWN', 'huihuo', '2020-01-21 00:00:00', 1),
(4, 'REYNAUD', 'François', 'freynaud80@gmail.com', 'OK', '2020-01-21 00:00:00', 6),
(5, 'François', 'REYNAUD', 'UNKNOWN', 'hio', '2020-01-21 00:00:00', 8),
(6, 'jkh', 'bjkk', 'UNKNOWN', 'hoi', '2020-01-21 00:00:00', 8),
(7, 'François', 'REYNAUD', 'UNKNOWN', 'hiuhuio', '2020-01-21 00:00:00', 8),
(8, 'François', 'bjkk', 'UNKNOWN', 'no', '2020-01-21 00:00:00', 8),
(9, 'François', 'REYNAUD', 'UNKNOWN', 'bui', '2020-01-21 00:00:00', 8),
(10, 'François', 'REYNAUD', 'UNKNOWN', 'bui', '2020-01-21 00:00:00', 8),
(11, 'François', 'REYNAUD', 'freynaud80@gmail.com', 'guigui', '2020-01-21 00:00:00', 8),
(12, 'François', 'REYNAUD', 'UNKNOWN', 'guigi', '2020-01-21 00:00:00', 8),
(13, 'François', 'REYNAUD', 'UNKNOWN', 'guik', '2020-01-21 00:00:00', 8),
(14, 'hjkhj', 'REYNAUD', 'UNKNOWN', 'hio', '2020-01-21 00:00:00', 8),
(15, 'François', 'h_yo', 'UNKNOWN', 'uçà', '2020-01-21 00:00:00', 8),
(16, 'François', 'Chat', 'UNKNOWN', 'bj', '2020-01-21 00:00:00', 8),
(17, 'François', 'Minette', 'UNKNOWN', 'l', '2020-01-21 00:00:00', 8),
(18, 'François', 'hiohio', 'UNKNOWN', 'hui', '2020-01-21 00:00:00', 8),
(19, 'François', 'REYNAUD', 'UNKNOWN', 'hioh', '2020-01-21 00:00:00', 8),
(22, 'François', 'BOUDET', 'UNKNOWN', 'hio', '2020-01-21 00:00:00', 8),
(23, 'François', 'Minette', 'UNKNOWN', 'bguig', '2020-01-21 00:00:00', 8),
(24, 'François', 'BOUDET', 'UNKNOWN', 'huihuioh', '2020-01-21 00:00:00', 8),
(25, 'hio', 'hyiou', 'UNKNOWN', 'hio', '2020-01-21 00:00:00', 8),
(26, 'buik', 'bnhilo', 'UNKNOWN', 'nhiol', '2020-01-21 00:00:00', 8),
(27, 'MIAOU', 'Chat', 'UNKNOWN', 'hkl', '2020-01-22 00:00:00', 8),
(28, 'François', 'bhjk', 'UNKNOWN', 'hiol', '2020-01-22 06:52:54', 8),
(29, 'François', 'REYNAUD', 'UNKNOWN', 'jçp', '2020-01-22 06:53:07', 8),
(30, 'MIAOU', 'Chat', 'UNKNOWN', 'nhio', '2020-01-22 06:54:10', 8),
(31, 'François', 'hiohio', 'UNKNOWN', 'hio', '2020-01-22 14:06:26', 8),
(32, 'François', 'REYNAUD', 'UNKNOWN', 'nkjl', '2020-01-22 14:08:32', 8),
(33, 'François', 'REYNAUD', 'UNKNOWN', 'hiuo', '2020-01-22 14:50:05', 1),
(34, 'François', 'Chat', 'UNKNOWN', 'jio', '2020-01-22 15:40:34', 8),
(35, 'François', 'Minette', 'UNKNOWN', 'h', '2020-01-22 15:44:08', 8),
(36, 'François', 'REYNAUD', 'UNKNOWN', 'gui', '2020-01-23 11:11:55', 7),
(37, 'François', 'REYNAUD', 'UNKNOWN', 'hkj', '2020-01-23 11:41:17', 8),
(38, 'MIAOU', 'Chat', 'UNKNOWN', 'hj', '2020-01-23 11:43:38', 8),
(39, 'François', 'REYNAUD', 'UNKNOWN', 'njk', '2020-01-23 11:56:23', 8),
(40, 'François', 'Chat', 'UNKNOWN', 'bhj', '2020-01-23 12:00:20', 8),
(42, 'hjkhj', 'bjkk', 'UNKNOWN', 'hui', '2020-01-27 20:26:36', 8),
(44, 'François', 'REYNAUD', 'UNKNOWN', 'vhjj', '2020-01-28 11:36:55', 8),
(45, 'François', 'REYNAUD', 'freynaud80@gmail.com', 'bkj', '2020-01-28 11:37:10', 8),
(46, 'François', 'REYNAUD', 'UNKNOWN', 'hio', '2020-01-28 11:38:14', 8),
(47, '    ', '    ', 'UNKNOWN', '     ', '2020-01-28 11:42:30', 8),
(48, '/', '/', 'UNKNOWN', '/', '2020-01-28 11:49:21', 8),
(49, 'François', 'Chat', 'UNKNOWN', 'Je suis  ok\r\nJe suis ok', '2020-01-28 11:51:12', 8),
(50, 'François', 'REYNAUD Marchal', 'UNKNOWN', 'ok ok ok\r\nok ok ok', '2020-01-28 12:04:02', 5),
(51, 'François', 'REYNAUD     BOUDET', 'UNKNOWN', 'ok ok ok\r\nok\r\nok ok ok \r\n ok ok             ok', '2020-01-28 12:05:14', 8),
(52, 'François', 'REYNAUD', 'UNKNOWN', 'y', '2020-01-28 12:05:31', 8),
(53, 'François', 'REYNAUD', 'UNKNOWN', 'jio', '2020-01-28 15:22:09', 8),
(55, 'François', 'hiohio', 'UNKNOWN', '&lt;script&gt;alert(&quot;Il y a une faille XSS !!!&quot;);&lt;/script&gt;', '2020-01-28 16:25:55', 8),
(56, 'François', 'REYNAUD', 'UNKNOWN', '&lt;script&gt;alert(&quot;Il y a une faille XSS !!!&quot;);&lt;/script&gt;', '2020-01-28 16:41:33', 1),
(57, 'François', 'REYNAUD', 'UNKNOWN', 'g', '2020-01-29 13:34:55', 7),
(58, 'François', 'REYNAUD', 'UNKNOWN', '&lt;script&gt;alert(&quot;Il y a une faille XSS !!!&quot;);&lt;/script&gt;', '2020-01-29 13:35:40', 7),
(59, 'Francoi', 'REY', 'UNKNOWN', 'u', '2020-01-31 08:27:36', 8),
(60, 'fyufgyu', 'hioh', 'UNKNOWN', 'hioho', '2020-01-31 08:34:14', 8),
(61, 'gu', 'hui', 'UNKNOWN', 'gh', '2020-01-31 08:47:29', 8),
(62, 'h', 'h', 'UNKNOWN', 'h', '2020-01-31 08:48:30', 8),
(63, 'François', 'REYNAUD', 'UNKNOWN', 'n', '2020-01-31 18:25:08', 6),
(64, 'jkh', 'n', 'UNKNOWN', 'j', '2020-01-31 18:26:23', 8),
(65, 'François', 'REYNAUD', 'UNKNOWN', '&lt;script&gt;alert(&quot;Il y a une faille XSS !!!&quot;);&lt;/script&gt;', '2020-01-31 18:29:22', 1),
(66, 'François', 'REYNAUD', 'UNKNOWN', '&lt;script&gt;alert(&quot;Il y a une faille XSS !!!&quot;);&lt;/script&gt;', '2020-01-31 18:29:38', 1),
(67, 'n', 'n', 'UNKNOWN', 'n', '2020-01-31 18:32:50', 6),
(68, 'd', 'd', 'UNKNOWN', 'd', '2020-01-31 18:34:54', 3),
(69, 'f', 'f', 'UNKNOWN', 'f', '2020-01-31 18:40:31', 1),
(70, 't', 't', 'UNKNOWN', 't', '2020-01-31 18:42:45', 1),
(71, 'n', 'j', 'UNKNOWN', 'e', '2020-01-31 18:44:29', 6),
(72, 'g', 'h', 'UNKNOWN', 'i', '2020-01-31 18:44:55', 6),
(73, 'f', 'f', 'UNKNOWN', 'f', '2020-01-31 18:46:42', 6),
(74, 'g', 'h', 'UNKNOWN', 'i', '2020-01-31 18:47:08', 6),
(75, 'f', 'h', 'UNKNOWN', 'n', '2020-01-31 18:49:23', 6);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `dated` datetime NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `title_image` varchar(255) NOT NULL,
  `abstract` varchar(255) NOT NULL,
  `paragraph1` text NOT NULL,
  `paragraph2` text NOT NULL,
  `paragraph3` text NOT NULL,
  `paragraph4` text NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `image8` varchar(255) NOT NULL,
  `title_image1` varchar(255) NOT NULL,
  `title_image2` varchar(255) NOT NULL,
  `title_image3` varchar(255) NOT NULL,
  `title_image4` varchar(255) NOT NULL,
  `title_image5` varchar(255) NOT NULL,
  `title_image6` varchar(255) NOT NULL,
  `title_image7` varchar(255) NOT NULL,
  `title_image8` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `location`, `period`, `dated`, `image`, `title_image`, `abstract`, `paragraph1`, `paragraph2`, `paragraph3`, `paragraph4`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `title_image1`, `title_image2`, `title_image3`, `title_image4`, `title_image5`, `title_image6`, `title_image7`, `title_image8`) VALUES
(1, 'MON PARCOURS FAVORI', 'LYON ET ENVIRONS', 'Depuis avril 2015', '2020-01-14 13:51:20', 'public/images/2015_04_monParcoursFavori/0.JPG', 'Parc de Miribel : Lac des Eaux Bleues', 'Pour préparer mes grandes randonnées, je pars souvent marcher entre Beynost et Lyon, jusqu\'au quartier de Gerland, en passant par le Parc de Miribel-Jonage, les quais du Rhône, la Croix-Rousse et le Plateau des Dombes.', 'Je commence en quittant Beynost pour me rendre sur les bords du Rhône, que je longe jusqu\'à la ville de Miribel, en marchant dans les sous-bois. A cet endroit, je traverse pour passer dans le Parc de Miribel-Jonage, que je parcours en un peu moins de 2 heures, toujours dans les sous-bois au début, puis sur les bords d\'un lac, et enfin en longeant l\'autoroute qui mène à Lyon. J\'arrive alors à Villeurbanne, au quartier de Croix-Luizet, qui marque l\'entrée dans l\'agglomération lyonnaise. De là, je me rends sur le Campus de la Doua, où se trouve la faculté des sciences de Lyon. Puis je passe dans le Parc de la Tête d\'Or, où alternent bosquets, lacs et jardins fleuris.', 'Ensuite, je longe les berges du Rhône sur environ 5 km, en marchant sur la promenade aménagée pour vélos et piétons. Sur l\'autre rive, je peux apercevoir les quartiers de la Croix-Rousse et de la Presqu\'île. J\'arrive ainsi jusqu\'au quartier de la Guillotière, à partir duquel il ne me reste plus que 3 km pour atteindre le Stade de Gerland, le but final de la partie aller de cette marche, au bout d\'un parcours d\'environ 6 heures et 25 km de long.', 'La partie du retour commence en traversant le Rhône pour me rendre au quartier de la Confluence, dont le nom vient de la confluence avec la Saône, qui se trouve à cet endroit. Je me rends de là à la Gare de Perrache, puis à la Place Bellecour. Je traverse ensuite la Saône pour traverser le quartier du vieux Saint-Jean, puis je la traverse pour grimper sur la colline de la Croix-Rousse. De là, je me rends à l\'entrée de Caluire, d\'où part la Voie Verte, un chemin boisé pour piétons et cyclistes de 4 km de long qui relie l\'arrêt de métro de Cuire à la gare de Sathonay. Une fois à cette gare, je traverse la ville de Rillieux.', 'Je marche ensuite sur le Plateau des Dombes, pendant environ 8 km. Je longe Neyron par la grande route, puis je traverse le village du Mas-Rillier, où je repasse sur des routes de campagne. De là, je me rends 3 km plus loin à la ferme de Margnolas, puis à l\'arboretum de Beynost. C\'est de là que commence la descente finale par le vallon de la Conche, qui me permet de regagner mon domicile.', 'public/images/2015_04_monParcoursFavori/1.JPG', '\r\npublic/images/2015_04_monParcoursFavori/2.JPG', 'public/images/2015_04_monParcoursFavori/3.JPG', 'public/images/2015_04_monParcoursFavori/4.JPG', 'public/images/2015_04_monParcoursFavori/5.JPG', 'public/images/2015_04_monParcoursFavori/6.JPG', 'public/images/2015_04_monParcoursFavori/7.JPG', 'public/images/2015_04_monParcoursFavori/8.JPG', 'Parc de Miribel : piste cyclable', 'Parc de la Tête d\'Or', 'La Croix-Rousse', 'Pause au Ninkasi de Gerland', 'Le Rhône à la Confluence', 'La Voie Verte', 'Plateau des Dombes', 'Arboretum de Beynost'),
(2, 'LA BIGUE', 'DIGNE-LES-BAINS', '18 mai 2015', '2020-01-14 13:51:29', 'public/images/2015_05_18_bigue/0.JPG', 'Sommet à 700 m', 'En mai 2015, je suis allé randonner 2 jours à Digne-les-Bains, pour préparer une randonnée de 3 semaines, entre Monaco et Valloire. Le premier jour, je suis monté au Sommet de la Bigue (1653 m), pour un total d\'environ 1200 m de dénivelé.', 'La montée au Sommet de la Bigue commence juste au-dessus de la ville de Digne et se découpe en 3 parties. Il faut d\'abord effectuer la longue ascension, 600 m plus haut, jusqu\'au Sommet de l\'Andran (1217 m), facile à repérer avec son relais de télé. Après une courte descente, arrive la courte, mais très raide, montée jusqu\'au sommet du Martignon (1430 m), pour 300 m de dénivelé. Suit une nouvelle descente, puis l\'ascension finale vers la Bigue (1653 m), environ 250 m plus haut.', 'Il est 8 h lorsque je quitte le centre-ville de Digne sous le soleil pour commencer mon ascension. La première partie, la plus longue, me mène jusqu\'à l\'Andran. Il faut d\'abord franchir la Bléone, le cours d\'eau qui traverse la ville, puis dépasser les dernières maisons sur les hauteurs de la ville, avant d\'atteindre une première crête, d\'où je peux apercevoir le Martignon, deuxième point intermédiaire du parcours, ainsi que le hameau de Courbons, situé sur ses flancs. Suit une brève descente de 5 minutes, puis la montée reprend, sur une piste à travers la pinède, pendant environ 2 h, jusqu\'au Sommet de l\'Andran, que j\'atteins à 11 h. De là-haut s\'offre un premier panorama sur Digne et la vallée de la Bléone, ainsi que sur les sommets environnants.', 'La suite du parcours se poursuit par une petite descente de 10 minutes avant le raidard vers le Martignon. La montée est assez courte, mais très exigeante car très abrupte. Tout au long de l\'ascension, je peux profiter de la vue d\'ensemble sur la vallée de la Bléone, ainsi que sur l\'Andran, juste en contrebas. Je commence également à apercevoir par moments le Sommet de la Bigue, le but final.  A midi, après 1 heure de montée, j\'atteins le Martignon.', 'Le chemin se poursuit par une petite descente de 5 minutes, puis un léger replat, avant la montée finale vers la Bigue, qui dure environ 1 heure et demi, au milieu d\'une végétation aride. Lorsque j\'atteins le sommet vers 14 h, le ciel commence à se voiler et le vent à se lever, ce qui n\'empêche pas de profiter du magnifique panorama sur les alentours : la vallée de la Bléone du côté de Digne, la vallée des Duyes sur l\'autre versant. Il ne me reste plus qu\'à repartir à 14 h pour la longue descente du retour vers Digne, où j\'arrive à 17 h.', 'public/images/2015_05_18_bigue/1.JPG', 'public/images/2015_05_18_bigue/2.JPG', 'public/images/2015_05_18_bigue/3.JPG', 'public/images/2015_05_18_bigue/4.JPG', 'public/images/2015_05_18_bigue/5.JPG', 'public/images/2015_05_18_bigue/6.JPG', 'public/images/2015_05_18_bigue/7.JPG', 'public/images/2015_05_18_bigue/8.JPG', 'L\'objectif du jour : la Bigue', 'Digne-les-Bains', 'Courbons et le Martignon', 'Dans la pinède', 'L\'Andran', 'Le Martignon et la Bigue', 'Vallée des Duyes', 'Vallée de la Bléone'),
(3, 'LE COUSSON', 'DIGNE-LES-BAINS', '19 mai 2015', '2020-01-14 18:30:04', 'public/images/2015_05_19_cousson/0.JPG', 'Montagne du Cousson', 'En mai 2015, je suis allé randonner 2 jours à Digne-les-Bains, pour préparer une randonnée de 3 semaines, entre Monaco et Valloire. Le second jour, je suis monté au Sommet du Cousson (1516 m), pour un total d\'environ 1000 m de dénivelé.', 'Le Cousson est une montagne située juste au-dessus de la ville de Digne-les-Bains. Elle a la particularité d\'avoir 2 sommets différents, situés quasiment à la même altitude : l\'un à 1516 m, l\'autre à 1511 m. Elle offre une très belle vue panoramique sur la ville de Digne-les-Bains, ainsi que sur les vallées de la Bléone et de l\'Asse, qu\'elle surplombe. La montée commence juste au-dessus de Digne et s\'est faite en 3 parties : la première partie constitue l\'essentiel de l\'ascension et mène à peine 100 m en-dessous du sommet, après 800 m de dénivelé ; la seconde partie consiste à monter au premier sommet du Cousson ; et la troisième à grimper au second sommet.', 'La montée commence sous le soleil en face du collège Gassendi. Je commence par suivre le Chemin des Oreilles d\'Ane qui grimpe en lacets dans les bois jusqu\'à une première crête située un peu moins de 400 m plus haut. Celle-ci offre une vue sur la Vallée des Eaux Chaudes d\'un côté, et sur celle de la Bléone de l\'autre.', 'Le chemin continue de longer cette crête sur un peu plus de 1 km. Une fois passées les ruines du lieu-dit Hautes Bâties de Cousson, on aperçoit l\'imposante Barre des Dourbes et le Pic du Couard. On se trouve alors à environ 1100 m de haut et le sommet se rapproche. La moitié du dénivelé est en effet déjà accompli.', 'Une fois passé cette crête, le chemin continue dans les bois avant de grimper  à flanc de falaise pendant quelques centaines de mètres, puis de suivre de nouveau une crête sur 1 km environ. On arrive ainsi à environ 1400 m de haut au pied des 2 sommets du Cousson, situés un peu plus de 100 m au-dessus. Il ne me reste plus qu\'à grimper sur chacun des 2 sommets, qui offrent une magnifique vue panoramique, sur les vallées de la Bléone, de l\'Asse et des Eaux Chaudes, ainsi que sur le Couard, la Bigue, les Dourbes, le Pic d\'Oise et les autres montagnes des environs.', 'public/images/2015_05_19_cousson/1.JPG', 'public/images/2015_05_19_cousson/2.JPG', 'public/images/2015_05_19_cousson/3.JPG', 'public/images/2015_05_19_cousson/4.JPG', 'public/images/2015_05_19_cousson/5.JPG', 'public/images/2015_05_19_cousson/6.JPG', 'public/images/2015_05_19_cousson/7.JPG', 'public/images/2015_05_19_cousson/8.JPG', 'Les 2 sommets du Cousson', 'Cousson : vue d\'ensemble', 'Digne et la Bléone', 'Passage sous un tronc', 'Le sommet du Cousson se rapproche', 'Au lieu-dit Hautes Bâties de Cousson', 'Vallée de l\'Asse : Clue de Chabrières', 'Sommet du Cousson : 1516 m'),
(4, 'LA MONTAGNETTE', 'AVIGNON - TARASCON', '21 mai 2015', '2020-01-14 18:30:09', 'public/images/2015_05_21_montagnette/0.JPG', 'Panorama depuis la Montagnette', 'En mai 2015, je suis allé randonner 3 jours dans les massifs de la Montagnette et des Alpilles, pour préparer une randonnée de 3 semaines, entre Monaco et Valloire. Le premier jour, j\'ai traversé la Montagnette, entre Avignon et Tarascon.', 'Arrivé la veille sur Avignon, je visite rapidement le centre-ville : le Pont d\'Avignon, derrière lequel se dresse au loin l\'imposant Mont Ventoux ; le Palais des Papes et le Jardin des Doms ; ainsi que les remparts et les rues piétonnes du centre-ville.', 'Je pars le lendemain autour de 9 heures. Je retraverse le centre-ville jusqu\'à la gare SNCF, puis je traverse la Durance pour me rendre 6 km plus loin au bourg de Barbentane, qui se trouve au pied de la Montagnette. J\'effectue une courte montée au-dessus du village et me voici dans le massif. La végétation y est typique de la Provence, avec de nombreux oliviers et des paysages de garrigues. Après avoir laissé derrière moi les dernières maisons de Barbentane autour de midi, je longe la grande route qui traverse la Montagnette.', 'Celle-ci me mène jusqu\'à l\'Abbaye de Saint-Michel-de-Frigolet, où je quitte le bitume pour des chemins et des pistes serpentant à travers les garrigues de la Montagnette, d\'où je peux voir, à l\'Est, les massifs des Alpilles et du Lubéron, le Ventoux au Nord, la vallée du Rhône à l\'Ouest. On est alors en pleine après-midi et la chaleur devient presque caniculaire. Heureusement, la distance restant à parcourir est assez courte : 10 km.', 'Je poursuis donc tranquillement mon chemin jusqu\'à Tarascon, le but final de cette journée. Comme à Avignon, j\'effectue une visite rapide du centre-ville : les rues piétonnes à l\'intérieur des remparts, ainsi que la château. Puis je me rends au camping pour me reposer en vue du lendemain. Les 2 jours suivants, je poursuis en effet ma randonnée en traversant les Alpilles.', 'public/images/2015_05_21_montagnette/1.JPG', 'public/images/2015_05_21_montagnette/2.JPG', 'public/images/2015_05_21_montagnette/3.JPG', 'public/images/2015_05_21_montagnette/4.JPG', 'public/images/2015_05_21_montagnette/5.JPG', 'public/images/2015_05_21_montagnette/6.JPG', 'public/images/2015_05_21_montagnette/7.JPG', 'public/images/2015_05_21_montagnette/8.JPG', 'Pont d\'Avignon et Mont Ventoux', 'Palais des Papes', 'Oliviers', 'Paysage de garrigues', 'Abbaye de Saint-Michel-de-Frigolet', 'Vallée du Rhône', 'Tarascon : entrée de la vieille ville', 'Château de Tarascon'),
(5, 'LES ALPILLES', 'TARASCON - ORGON', '22 et 23 mai 2015', '2020-01-14 18:33:11', 'public/images/2015_05_22_alpilles/0.JPG', 'Colline des Alpilles', 'En mai 2015, je suis allé randonner 3 jours dans les massifs de la Montagnette et des Alpilles, pour préparer une randonnée de 3 semaines, entre Monaco et Valloire. Les deuxième et troisième jours, j\'ai traversé les Alpilles, entre Tarascon et Orgon.', 'Après avoir traversé le massif de la Montagnette la veille, je m\'attaque à celui des Alpilles pour les 2 jours à venir. Je pars à 8 h de Tarascon pour suivre durant 6 km la grande route qui mène à la Chapelle Saint-Gabriel, au pied des Alpilles. Je suis alors le GR6 pour une première montée, d\'environ 200 m de dénivelé, pour redescendre sur la plaine intérieure de Fontvieille, que je traverse. A l\'autre bout, j\'atteins le célèbre village des Baux-de-Provence. De là, je grimpe le Val d\'Enfer jusqu\'à la crête, que je parcours sur environ 4 km le long d\'une piste. J\'aperçois en face le Sommet de la Caume, que je dois gravir le lendemain.', 'Je redescends ensuite vers le Lac du Peiroou, avant une nouvelle ascension courte, mais très technique, au bout de laquelle je dois gravir une vingtaine d\'échelons. Je plonge ensuite sur le bourg de Saint-Rémy-de-Provence, que je visite rapidement : les Antiques, le Temple, et le centre-ville. Puis je me rends au camping pour reprendre des forces en vue du lendemain.', 'Je repars comme la veille à 8 h. L\'étape commence par la montée au sommet de la Caume, que j\'atteins vers 10 h. Puis je poursuis sur le Chemin des Crêtes, qui s\'effectue essentiellement sur la rocaille, en une succession de montées et de descentes courtes, mais exigeantes. Fatigué par cet enchaînement, je redescends rapidement dans la vallée, pour continuer par les pistes et les routes jusqu\'au village d\'Eygalières.  ', 'J\'avais initialement prévu de rejoindre Orgon en passant par le Plateau des Plaines, pour terminer sur Cavaillon. Mais je commence à avoir de plus en plus mal à la plante des pieds. Il est alors 15 h passé, et je décide d\'avancer le terminus de mon étape à Orgon, 8 km plus loin, en m\'y rendant directement par la grande route. Ayant de plus en plus de mal à marcher, je finis par y arriver tant bien que mal vers 19 h. Il me reste 1 km et demi pour arriver au Lac de Lavau, où se trouve le camping d\'Orgon. J\'y arrive un petit quart d\'heure avant la fermeture de l\'accueil, pour y prendre un repos bien mérité.', 'public/images/2015_05_22_alpilles/1.JPG', 'public/images/2015_05_22_alpilles/2.JPG', 'public/images/2015_05_22_alpilles/3.JPG', 'public/images/2015_05_22_alpilles/4.JPG', 'public/images/2015_05_22_alpilles/5.JPG', 'public/images/2015_05_22_alpilles/6.JPG', 'public/images/2015_05_22_alpilles/7.JPG', 'public/images/2015_05_22_alpilles/8.JPG', 'Les Baux-de-Provence', 'Sommet de la Caume', 'Lac du Peiroou', 'Saint-Rémy-de-Provence : les Antiques', 'Chemin des Crêtes', 'Falaise', 'Lac de Lavau face au Lubéron', 'Arrivée au camping d\'Orgon'),
(6, 'LA LYONSAINTE', 'LYON - SAINT-ETIENNE', 'Du 24 au 28 avril 2018', '2020-01-14 18:37:49', 'public/images/2018_04_24_lyonSainte/0.JPG', 'Rochetaillée', 'En avril 2018, je suis allé randonner 3 jours entre Lyon et Saint-Etienne. La première journée, j\'ai marché à travers les Monts du Lyonnais. Après 2 jours de repos, j\'ai passé les 2 autres étapes dans le Massif du Pilat.', 'Je pars de Lyon sous le soleil, à 8 h, du quartier du Vieux-Saint-Jean. Je grimpe sur la Colline de Fourvière, puis je traverse Sainte-Foy-lès-Lyon et Francheville pour arriver, vers 11 h, et après 8 km, sur les premiers plateaux des Monts du Lyonnais. Je continue sur environ 10 km relativement plats à travers les bourgs de Brindas et Messimy, pour arriver vers 16 h à Thurins, au pied de la grosse ascension du jour, celle qui mène sur la crête au village de Saint-André-la-Côte. La montée fait environ 500 m de dénivelé et s\'effectue en 3 temps : il faut d\'abord grimper jusqu\'au village de Rontalon, environ 150 m plus haut ; puis jusqu\'au lieu-dit la Croix Forest 200 m au-dessus, où le chemin recroise la grande route ; enfin il faut effectuer les 200 derniers mètres de dénivelé jusqu\'à la crête où se trouve Saint-André-la-Côte. C\'est vers 18 h que j\'y parviens, après 2 heures de grimpette. De là, je peux profiter du panorama sur les alentours : le Pilat, la plaine de l\'Ain, le Jura et les Alpes au loin. Il me reste encore à descendre sur Saint-Maurice-sur-Dargoire, distant de 8 km. Je commence alors à ressentir la fatigue, car cela fait déjà 30 km que je marche. Les villages se succèdent : Riverie, Saint-Didier-sous-Riverie. Après 2 heures de descente et 12 h de marche au total, j\'arrive tant bien que mal vers 20 h à Saint-Maurice-sur-Dargoire, terme de l\'étape.', 'Après 2 jours de repos, je repars pour une première journée dans le Massif du Pilat. L\'étape doit me conduire jusqu\'au bourg de Pélussin, situé au pied du Crêt de l\'Oeillon. Je commence par descendre vers 8 h en direction de Rive-de-Gier, au fond de la vallée. Puis je grimpe sur les premières hauteurs du Pilat, avant de redescendre vers le Barrage de Couzon. Je marche sur les bords du lac pendant environ 2 km, avant de regagner la route qui me mène au magnifique village de Sainte-Croix-en-Jarez, où je m\'arrête pour la pause déjeuner, après en avoir fait une rapide visite. Il me reste à grimper au Col de Pavezin, 200 m plus haut, avant de faire la descente sur Pélussin, 8 km plus loin, au cours de laquelle j\'aperçois le Crêt de l\'Oeillon, l\'un des sommets où je dois passer le lendemain.', 'La dernière étape étant plutôt longue (35 km) et pentue (1000 m de dénivelé environ), je pars dès 6 h du matin de Pélussin pour la dernière étape. Celle-ci commence sous les nuages par la montée vers le Crêt de l\'Oeillon, perché 900 m plus haut au-dessus du bourg de Pélussin. La montée s\'effectue essentiellement dans la forêt, sur des chemins assez raides, jusqu\'aux pics des Trois Dents, à peine 150 m plus bas que le Crêt de l\'Oeillon, où le sentier devient plus technique, empruntant la rocaille sur un peu plus de 500 m. Je rejoins le Col de l\'Oeillon 500 m plus loin, où l\'essentiel du dénivelé de la journée est effectué. Il ne me reste alors plus qu\'à suivre un ancien téléski pour parvenir au sommet du Crêt de l\'Oeillon 100 m plus haut, à 1364 m d\'altitude. Puis je descends sur l\'Auberge de la Jasserie, 4 km plus loin, où j\'arrive vers midi pour y faire ma pause déjeuner. ', 'Je repars vers 14 h en direction de Saint-Etienne, situé à encore 25 km. Je grimpe d\'abord au Crêt de la Perdrix 100 m au-dessus (1431 m d\'altitude), point culminant du Massif du Pilat. Comme au Crêt de l\'Oeillon, je profite du panorama sur les vallées du Rhône et du Gier.  Il ne me reste plus qu\'à effectuer tranquillement la longue descente sur Saint-Etienne, longue d\'un peu plus de 20 km. Celle-ci s\'effectue essentiellement en forêt, et sous un peu plus de soleil qu\'en matinée, en passant notamment par le Col de la Croix de Chaubouret, les villages du Bessat et de Rochetaillée. Il est environ 20 h lorsque j\'atteins Saint-Etienne. ', 'public/images/2018_04_24_lyonSainte/1.JPG', 'public/images/2018_04_24_lyonSainte/2.JPG', 'public/images/2018_04_24_lyonSainte/3.JPG', 'public/images/2018_04_24_lyonSainte/4.JPG', 'public/images/2018_04_24_lyonSainte/5.JPG', 'public/images/2018_04_24_lyonSainte/6.JPG', 'public/images/2018_04_24_lyonSainte/7.JPG', 'public/images/2018_04_24_lyonSainte/8.JPG', 'Lyon', 'Saint-André-la-Côte', 'Sainte-Croix-en-Jarez', 'Pavezin', 'Crêt de l\'Oeillon', 'Auberge de la Jasserie', 'Le Bessat', 'Saint-Etienne'),
(7, 'LE MONT MEZENC', 'ARDECHE & HAUTE-LOIRE', '6 mai 2018', '2020-01-14 18:37:54', 'public/images/2018_05_06_montMezenc/0.JPG', 'Mont Mézenc', 'En mai 2018, je suis allé marcher 2 jours dans le Pays des Sucs, à cheval sur les départements de l\'Ardèche et la Haute-Loire. Le premier jour, j\'ai fait l\'ascension du Mont Mézenc, entre Saint-Martial et Les Estables.', 'La montée au Mont Mézenc se fait en 3 parties. Après le départ du Lac de Saint-Martial, et une petite descente, je dois d\'abord monter vers le village de Borée, 400 m plus haut. Une nouvelle petite descente, et je regrimpe de 350 m pour me retrouver à 1 km seulement du raidard final. Je redescends un peu, puis il ne me reste plus qu\'à faire la montée finale vers le Mézenc, 400 m au-dessus, sans chemin, au milieu des buissons et de la caillasse. Une fois là-haut, je redescends vers le village voisin des Estables, pour y passer la nuit.', 'Je pars donc de Saint-Martial, sous le soleil, vers 8 h, pour descendre 100 m plus bas. Puis commence la première partie de l\'ascension, vers le village de Borée. Celle-ci s\'effectue essentiellement en forêt, tout en profitant régulièrement du panorama sur les alentours, notamment le Lac de Saint-Martial ainsi que les Sucs, ces anciens volcans éteints qui parsèment le coin. J\'aperçois ainsi le Mont Gerbier de Jonc, où je dois me rendre le lendemain. J\'arrive un peu avant midi au charmant village de Borée, situé sous le Suc du même nom, après être passé au Tchier de Borée, un champ de menhirs où 70 pierres s\'élèvent au milieu d\'un cercle.', 'Je poursuis ensuite en redescendant de nouveau 100 m plus bas, jusqu\'au fond du vallon de la Saliouse, puis je regrimpe de 350 m jusqu\'au gîte d\'étape de Médille, quasiment situé au pied du raidard final. Pendant la montée, le temps se couvre et tourne à l\'orage. Il se met à pleuvoir des cordes. J\'avise alors un abri dans un hameau, où je m\'arrête pendant 1 heure, puis une fois que le soleil revient, je termine rapidement cette montée, avant une petite descente vers le hameau de la Charra, au pied de la dernière ascension. Il reste alors 400 m de dénivelé, sans chemin, à travers buissons et rocaille. Je grimpe tranquillement et vers 17 h, j\'atteins le sommet (1753 m d\'altitude).', 'Il ne reste alors plus qu\'à descendre vers les Estables, petite station de la Haute-Loire située 5 km plus loin. J\'aperçois quelques névés au cours de cette descente. Il est vrai que le temps a été pluvieux quelques jours auparavant, et que je suis presque à une altitude de haute montagne. Vers 18h30, j\'arrive aux Estables, pour me reposer en vue de l\'étape du lendemain, où je dois monter au Mont Gerbier de Jonc', 'public/images/2018_05_06_montMezenc/1.JPG', 'public/images/2018_05_06_montMezenc/2.JPG', 'public/images/2018_05_06_montMezenc/3.JPG', 'public/images/2018_05_06_montMezenc/4.JPG', 'public/images/2018_05_06_montMezenc/5.JPG', 'public/images/2018_05_06_montMezenc/6.JPG', 'public/images/2018_05_06_montMezenc/7.JPG', 'public/images/2018_05_06_montMezenc/8.JPG', 'Lac de Saint-Martial', 'Saint-Martial', 'Madone face au Mont Gerbier de Jonc', 'Village de Borée', 'Montée sur le flanc Est du Mézenc', 'Sommet du Mont Mézenc', 'Névés', 'Les Estables'),
(8, 'LE MONT GERBIER DE JONC', 'ARDECHE & HAUTE-LOIRE', '7 mai 2018', '2020-01-15 10:16:35', 'public/images/2018_05_07_montGerbierDeJonc/0.JPG', 'Mont Gerbier de Jonc', 'En mai 2018, je suis allé marcher 2 jours dans le Pays des Sucs, à cheval sur les départements de l\'Ardèche et la Haute-Loire. Le second jour, j\'ai fait l\'ascension du Mont Gerbier de Jonc, entre Les Estables et Burzet.', 'A côté de l\'ascension du Mont Mézenc, effectuée la veille, celle du Mont Gerbier de Jonc, depuis le village des Estables, apparaît comme un jeu d\'enfant, même si cette étape est plus longue que la précédente (30 km). En effet, il faut d\'abord grimper un peu moins de 100 m de dénivelé, sur 10 km, pour arriver au pied du raidard final. Celui-ci permet d\'accéder au sommet, un peu moins de 150 m plus haut. Puis, le parcours est relativement plat avant de descendre sur Burzet, terme de cette étape. Je pars un peu après 8 h, sous un ciel voilé, pour passer rapidement dans la forêt.', 'La montée est très progressive, faite d\'une succession de faux-plats et de replats. Assez rapidement, j\'aperçois au loin le Mont Gerbier de Jonc. J\'arrive au pied du raidard final vers midi, après une matinée de marche tranquille, essentiellement sur des chemins bordant les grandes routes.', 'L\'ascension finale est raide, mais très courte, et donc peu exigeante. Au cours de celle-ci, qui s\'effectue sur le versant Sud, je profite du panorama sur le début de la vallée de la Loire, ainsi que sur les plateaux et les sucs du Vivarais des environs. Le temps étant couvert et venteux, je ne m\'attarde pas trop au sommet et regagne la route en contrebas, pour y prendre ma pause pique-nique.', 'Il me reste désormais un peu plus de 15 km pour atteindre Burzet, un village situé à 25 km d\'Aubenas. Je marche ainsi tout l\'après-midi à travers les plateaux du Vivarais, avant d\'entamer la descente vers Burzet. Des coups de tonnerre commencent à se faire entendre, et je presse un peu le pas. Un quart d\'heure avant l\'arrivée, l\'orage arrive au-dessus de ma tête, et j\'accélère encore un peu plus la cadence. Vers 18 h, j\'arrive enfin à Burzet, terme de ma traversée de la région des Sucs.', 'public/images/2018_05_07_montGerbierDeJonc/1.JPG', 'public/images/2018_05_07_montGerbierDeJonc/2.JPG', 'public/images/2018_05_07_montGerbierDeJonc/3.JPG', 'public/images/2018_05_07_montGerbierDeJonc/4.JPG', 'public/images/2018_05_07_montGerbierDeJonc/5.JPG', 'public/images/2018_05_07_montGerbierDeJonc/6.JPG', 'public/images/2018_05_07_montGerbierDeJonc/7.JPG', 'public/images/2018_05_07_montGerbierDeJonc/8.JPG', 'Les Estables', 'Entrée en forêt', 'Mont Gerbier de Jonc au loin', 'Sommet en vue', 'Début de la vallée de la Loire', 'Vue plongeante du sommet', 'Sagnes-et-Goudoulet', 'Burzet');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
