-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 mars 2021 à 12:55
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `panorama`
--

-- --------------------------------------------------------

--
-- Structure de la table `artwork`
--

CREATE TABLE `artwork` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `synopsis_short` text DEFAULT NULL,
  `synopsis_long` text DEFAULT NULL,
  `thanks` text DEFAULT NULL,
  `created_at` date NOT NULL,
  `id_student` int(11) NOT NULL,
  `seen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artwork`
--

INSERT INTO `artwork` (`id`, `title`, `subtitle`, `type`, `duration`, `synopsis_short`, `synopsis_long`, `thanks`, `created_at`, `id_student`, `seen`) VALUES
(2, 'The pas si big coucou', 'is the biggest coucou', 'film', '03:40', 'c est un joyeux coucou', 'coucou !!', 'happy hi', '2021-04-11', 1, 0),
(28, 'a odio semper', 'commodo auctor velit. Aliquam nisl.', 'cursus.', '06.22.21', 'sem semper erat, in consectetuer', 'elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy.', 'risus. Donec nibh enim, gravida', '2020-11-04', 3, 1),
(29, 'sit amet, consectetuer', 'in aliquet lobortis, nisi nibh', 'sollicitudin', '12.02.21', 'Cras convallis convallis dolor. Quisque', 'vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia.', 'ante dictum cursus. Nunc mauris', '2021-11-19', 7, 0),
(30, 'consectetuer euismod est', 'rutrum lorem ac risus. Morbi', 'dignissim', '07.29.21', 'lobortis. Class aptent taciti sociosqu', 'enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing', 'tristique pellentesque, tellus sem mollis', '2021-01-03', 4, 0),
(31, 'eros. Proin ultrices.', 'ante blandit viverra. Donec tempus,', 'ullamcorper.', '09.01.21', 'aliquet. Proin velit. Sed malesuada', 'vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu,', 'consectetuer, cursus et, magna. Praesent', '2021-09-07', 10, 0),
(32, 'neque. Morbi quis', 'tincidunt pede ac urna. Ut', 'odio', '05.29.20', 'non enim. Mauris quis turpis', 'imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc.', 'ornare egestas ligula. Nullam feugiat', '2020-12-15', 5, 1),
(33, 'ipsum primis in', 'Donec tincidunt. Donec vitae erat', 'ante', '06.07.20', 'Sed neque. Sed eget lacus.', 'ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor', 'nunc ac mattis ornare, lectus', '2022-03-10', 8, 0),
(34, 'non enim commodo', 'sit amet orci. Ut sagittis', 'Nunc', '06.22.20', 'magnis dis parturient montes, nascetur', 'condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'ipsum. Phasellus vitae mauris sit', '2022-02-22', 13, 0),
(35, 'in consectetuer ipsum', 'nascetur ridiculus mus. Aenean eget', 'imperdiet', '12.20.20', 'fermentum fermentum arcu. Vestibulum ante', 'sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus.', 'vitae, posuere at, velit. Cras', '2022-01-29', 19, 1),
(36, 'congue. In scelerisque', 'et libero. Proin mi. Aliquam', 'dolor', '08.05.21', 'augue, eu tempor erat neque', 'ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,', 'adipiscing, enim mi tempor lorem,', '2021-06-05', 17, 0),
(37, 'non, cursus non,', 'Fusce aliquet magna a neque.', 'Lorem', '08.18.21', 'aliquam, enim nec tempus scelerisque,', 'nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis', 'pharetra, felis eget varius ultrices,', '2021-01-02', 21, 1),
(38, 'leo. Cras vehicula', 'pharetra ut, pharetra sed, hendrerit', 'nulla', '10.26.20', 'sem. Pellentesque ut ipsum ac', 'risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque', 'non, sollicitudin a, malesuada id,', '2021-10-30', 2, 1),
(39, 'et ultrices posuere', 'ipsum sodales purus, in molestie', 'tempor', '04.24.20', 'adipiscing. Mauris molestie pharetra nibh.', 'non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu.', 'lacus vestibulum lorem, sit amet', '2020-05-04', 12, 1),
(40, 'I\'m innocent', 'Je l\'jure', 'film', '01:45:03', 'blball', 'coucoucoucoucoucouc', '', '2021-03-17', 6, 0),
(41, 'I\'m innocent', 'Je l\'jure', 'film', '01:45:03', 'blball', 'coucoucoucoucoucouc', '', '2021-03-17', 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `id_artwork` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `media` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `id_artwork`, `title`, `description`, `media`) VALUES
(1, 38, 'lorem,', 'eu arcu. Morbi sit amet', 'aliquam adipiscing lacus. Ut nec'),
(2, 30, 'vestibulum', 'feugiat. Lorem ipsum dolor sit', 'eu nulla at sem molestie'),
(3, 31, 'amet', 'vehicula et, rutrum eu, ultrices', 'montes, nascetur ridiculus mus. Proin'),
(4, 32, 'arcu.', 'vel, venenatis vel, faucibus id,', 'neque. Nullam nisl. Maecenas malesuada'),
(5, 29, 'mi', 'dolor quam, elementum at, egestas', 'tincidunt orci quis lectus. Nullam'),
(6, 31, 'laoreet,', 'ullamcorper. Duis at lacus. Quisque', 'viverra. Maecenas iaculis aliquet diam.'),
(7, 31, 'nisi', 'malesuada fames ac turpis egestas.', 'mi fringilla mi lacinia mattis.'),
(8, 34, 'lorem,', 'sit amet, consectetuer adipiscing elit.', 'neque tellus, imperdiet non, vestibulum'),
(9, 32, 'eu', 'sit amet, risus. Donec nibh', 'Suspendisse dui. Fusce diam nunc,'),
(10, 33, 'nec', 'Curabitur dictum. Phasellus in felis.', 'vitae velit egestas lacinia. Sed'),
(11, 36, 'turpis', 'tempus, lorem fringilla ornare placerat,', 'et netus et malesuada fames'),
(12, 32, 'vel', 'adipiscing elit. Curabitur sed tortor.', 'Aenean eget metus. In nec'),
(13, 37, 'enim', 'lacus, varius et, euismod et,', 'amet metus. Aliquam erat volutpat.'),
(14, 33, 'Proin', 'nec urna et arcu imperdiet', 'eu odio tristique pharetra. Quisque'),
(15, 39, 'eget', 'at, egestas a, scelerisque sed,', 'orci, consectetuer euismod est arcu'),
(16, 35, 'dignissim', 'neque non quam. Pellentesque habitant', 'hendrerit. Donec porttitor tellus non'),
(17, 30, 'massa.', 'Integer in magna. Phasellus dolor', 'morbi tristique senectus et netus'),
(18, 32, 'mauris,', 'risus. Donec nibh enim, gravida', 'magnis dis parturient montes, nascetur'),
(19, 38, 'molestie', 'Aliquam fringilla cursus purus. Nullam', 'convallis, ante lectus convallis est,'),
(20, 35, 'enim.', 'dolor vitae dolor. Donec fringilla.', 'magna. Nam ligula elit, pretium'),
(21, 33, 'turpis', 'id enim. Curabitur massa. Vestibulum', 'molestie dapibus ligula. Aliquam erat'),
(22, 32, 'Sed', 'auctor, velit eget laoreet posuere,', 'Proin ultrices. Duis volutpat nunc'),
(23, 37, 'nibh.', 'non massa non ante bibendum', 'semper tellus id nunc interdum'),
(24, 39, 'vel', 'tempor augue ac ipsum. Phasellus', 'sit amet, dapibus id, blandit'),
(25, 29, 'erat.', 'tellus lorem eu metus. In', 'Morbi neque tellus, imperdiet non,'),
(26, 33, 'ultricies', 'eleifend egestas. Sed pharetra, felis', 'id risus quis diam luctus'),
(27, 37, 'vehicula', 'ac, feugiat non, lobortis quis,', 'tristique ac, eleifend vitae, erat.'),
(28, 32, 'mauris', 'lorem vitae odio sagittis semper.', 'dolor, tempus non, lacinia at,'),
(29, 35, 'a,', 'nisl arcu iaculis enim, sit', 'sagittis felis. Donec tempor, est'),
(30, 38, 'sem', 'Donec tincidunt. Donec vitae erat', 'nisl arcu iaculis enim, sit'),
(31, 35, 'Donec', 'a, enim. Suspendisse aliquet, sem', 'ut lacus. Nulla tincidunt, neque'),
(32, 35, 'id,', 'pede. Praesent eu dui. Cum', 'ligula tortor, dictum eu, placerat'),
(33, 35, 'pharetra.', 'Vivamus nisi. Mauris nulla. Integer', 'vehicula et, rutrum eu, ultrices'),
(34, 30, 'congue', 'ut lacus. Nulla tincidunt, neque', 'malesuada malesuada. Integer id magna'),
(35, 36, 'dolor,', 'Donec porttitor tellus non magna.', 'luctus et ultrices posuere cubilia'),
(36, 28, 'diam', 'ante. Nunc mauris sapien, cursus', 'magna. Cras convallis convallis dolor.'),
(37, 29, 'metus', 'arcu. Curabitur ut odio vel', 'eu, euismod ac, fermentum vel,'),
(38, 30, 'quam', 'sollicitudin commodo ipsum. Suspendisse non', 'mus. Proin vel arcu eu'),
(39, 37, 'Ut', 'Nulla tempor augue ac ipsum.', 'semper egestas, urna justo faucibus'),
(40, 38, 'vitae,', 'tellus. Nunc lectus pede, ultrices', 'metus. Aliquam erat volutpat. Nulla'),
(41, 30, 'vestibulum,', 'eros turpis non enim. Mauris', 'malesuada vel, venenatis vel, faucibus'),
(42, 38, 'nunc,', 'est ac facilisis facilisis, magna', 'tristique aliquet. Phasellus fermentum convallis'),
(43, 30, 'mauris.', 'sem molestie sodales. Mauris blandit', 'lacus. Mauris non dui nec'),
(44, 34, 'mollis', 'nulla. Integer vulputate, risus a', 'in faucibus orci luctus et'),
(45, 38, 'interdum.', 'libero at auctor ullamcorper, nisl', 'adipiscing elit. Aliquam auctor, velit'),
(46, 29, 'mi', 'justo sit amet nulla. Donec', 'eros non enim commodo hendrerit.'),
(47, 28, 'vehicula', 'felis orci, adipiscing non, luctus', 'tortor. Integer aliquam adipiscing lacus.'),
(48, 30, 'magnis', 'commodo hendrerit. Donec porttitor tellus', 'Duis at lacus. Quisque purus'),
(49, 38, 'ornare', 'Cum sociis natoque penatibus et', 'orci. Donec nibh. Quisque nonummy'),
(50, 28, 'tincidunt', 'sed turpis nec mauris blandit', 'nibh dolor, nonummy ac, feugiat'),
(51, 36, 'eu', 'Duis at lacus. Quisque purus', 'cursus et, eros. Proin ultrices.'),
(52, 32, 'risus.', 'consectetuer euismod est arcu ac', 'Curabitur dictum. Phasellus in felis.'),
(53, 36, 'sapien', 'Nunc commodo auctor velit. Aliquam', 'risus. Donec egestas. Aliquam nec'),
(54, 29, 'scelerisque', 'scelerisque, lorem ipsum sodales purus,', 'eu, accumsan sed, facilisis vitae,'),
(55, 32, 'erat', 'tincidunt congue turpis. In condimentum.', 'sed dictum eleifend, nunc risus'),
(56, 33, 'Aliquam', 'at lacus. Quisque purus sapien,', 'Phasellus dolor elit, pellentesque a,'),
(57, 28, 'mattis.', 'vestibulum massa rutrum magna. Cras', 'sapien imperdiet ornare. In faucibus.'),
(58, 31, 'ornare,', 'pharetra ut, pharetra sed, hendrerit', 'tellus id nunc interdum feugiat.'),
(59, 38, 'Duis', 'amet risus. Donec egestas. Aliquam', 'eget lacus. Mauris non dui'),
(60, 39, 'convallis', 'aptent taciti sociosqu ad litora', 'vitae velit egestas lacinia. Sed'),
(61, 39, 'enim', 'tellus. Nunc lectus pede, ultrices', 'eros non enim commodo hendrerit.'),
(62, 30, 'vitae,', 'magna. Praesent interdum ligula eu', 'Sed neque. Sed eget lacus.'),
(63, 33, 'lectus', 'non enim. Mauris quis turpis', 'convallis, ante lectus convallis est,'),
(64, 32, 'dis', 'vulputate mauris sagittis placerat. Cras', 'diam lorem, auctor quis, tristique'),
(65, 29, 'elit', 'at arcu. Vestibulum ante ipsum', 'Duis sit amet diam eu'),
(66, 31, 'accumsan', 'Mauris molestie pharetra nibh. Aliquam', 'gravida sagittis. Duis gravida. Praesent'),
(67, 34, 'orci', 'leo. Vivamus nibh dolor, nonummy', 'mi lacinia mattis. Integer eu'),
(68, 29, 'Nulla', 'nec metus facilisis lorem tristique', 'Duis mi enim, condimentum eget,'),
(69, 34, 'ut', 'fringilla, porttitor vulputate, posuere vulputate,', 'velit. Quisque varius. Nam porttitor'),
(70, 35, 'nibh.', 'ultrices iaculis odio. Nam interdum', 'mauris. Integer sem elit, pharetra'),
(71, 29, 'at,', 'et risus. Quisque libero lacus,', 'interdum ligula eu enim. Etiam'),
(72, 33, 'nec', 'nisi. Mauris nulla. Integer urna.', 'Cras dictum ultricies ligula. Nullam'),
(73, 30, 'iaculis', 'mauris blandit mattis. Cras eget', 'luctus vulputate, nisi sem semper'),
(74, 35, 'diam.', 'at pretium aliquet, metus urna', 'dolor. Fusce feugiat. Lorem ipsum'),
(75, 38, 'diam', 'est. Nunc laoreet lectus quis', 'luctus felis purus ac tellus.');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `bio_short_fr` text DEFAULT NULL,
  `bio_fr` text DEFAULT NULL,
  `bio_short_en` text DEFAULT NULL,
  `bio_en` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `id_user`, `nickname`, `bio_short_fr`, `bio_fr`, `bio_short_en`, `bio_en`, `facebook`, `twitter`, `website`) VALUES
(1, 1, 'coucou', 'coucoucoucou', 'coucou?', 'hi hi', 'hi hi hi', NULL, NULL, NULL),
(2, 3, 'Raymond, Joelle I.', 'sit amet ante. Vivamus non', 'vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In', 'posuere vulputate, lacus. Cras interdum.', 'quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum.', 'posuere vulputate,', 'sagittis placerat.', 'fermentum vel,'),
(3, 4, 'Nelson, Tamekah N.', 'nibh sit amet orci. Ut', 'Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor', 'enim. Suspendisse aliquet, sem ut', 'pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae,', 'gravida nunc', 'quis lectus.', 'egestas. Sed'),
(4, 5, 'Fields, Blaine B.', 'ligula. Nullam feugiat placerat velit.', 'ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci.', 'Vivamus sit amet risus. Donec', 'adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius', 'aptent taciti', 'pulvinar arcu', 'eget odio.'),
(5, 6, 'Byers, Joshua D.', 'a, dui. Cras pellentesque. Sed', 'vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus', 'Cras vehicula aliquet libero. Integer', 'Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer', 'sodales. Mauris', 'diam vel', 'mattis velit'),
(6, 7, 'Ryan, Miranda L.', 'et, magna. Praesent interdum ligula', 'libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis,', 'nisi dictum augue malesuada malesuada.', 'sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus,', 'eget laoreet', 'feugiat tellus', 'posuere at,'),
(7, 8, 'Armstrong, Jacqueline V.', 'eu odio tristique pharetra. Quisque', 'erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas', 'tempus scelerisque, lorem ipsum sodales', 'mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant', 'augue porttitor', 'neque. In', 'torquent per'),
(8, 9, 'Frederick, Amethyst Y.', 'condimentum eget, volutpat ornare, facilisis', 'non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent', 'lobortis tellus justo sit amet', 'consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem', 'Etiam gravida', 'pellentesque massa', 'amet, consectetuer'),
(9, 10, 'Bright, Jin Q.', 'magna. Suspendisse tristique neque venenatis', 'ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,', 'Nunc ac sem ut dolor', 'tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci', 'odio. Phasellus', 'egestas. Aliquam', 'non massa'),
(10, 11, 'Bruce, Herman J.', 'vel, mauris. Integer sem elit,', 'Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi.', 'euismod in, dolor. Fusce feugiat.', 'ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu', 'rutrum magna.', 'nec tellus.', 'eros turpis'),
(11, 12, 'Graham, Donovan W.', 'et ultrices posuere cubilia Curae;', 'porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam', 'lacus. Mauris non dui nec', 'In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas.', 'sit amet', 'non enim', 'lobortis risus.'),
(12, 112, 'Holder, Luke Q.', 'placerat eget, venenatis a, magna.', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse', 'adipiscing fringilla, porttitor vulputate, posuere', 'erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna.', 'nec urna', 'lorem lorem,', 'non magna.'),
(13, 113, 'Briggs, Jael Q.', 'Etiam laoreet, libero et tristique', 'lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque,', 'fringilla purus mauris a nunc.', 'pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus', 'malesuada fames', 'ante. Vivamus', 'Etiam laoreet,'),
(14, 114, 'Avery, Aurelia W.', 'adipiscing lobortis risus. In mi', 'libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu.', 'at fringilla purus mauris a', 'tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus', 'et libero.', 'nibh enim,', 'tristique ac,'),
(15, 115, 'Leonard, Drake F.', 'arcu. Curabitur ut odio vel', 'suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', 'odio. Aliquam vulputate ullamcorper magna.', 'augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante', 'vestibulum lorem,', 'dictum ultricies', 'ligula consectetuer'),
(16, 116, 'Mckee, Adrian C.', 'Sed et libero. Proin mi.', 'rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', 'Phasellus vitae mauris sit amet', 'lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec', 'sed sem', 'gravida nunc', 'eget tincidunt'),
(17, 117, 'Whitaker, Anjolie V.', 'nunc sed libero. Proin sed', 'molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent', 'at sem molestie sodales. Mauris', 'molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim.', 'ridiculus mus.', 'dolor vitae', 'augue ac'),
(18, 119, 'Cabrera, Cairo G.', 'ac, fermentum vel, mauris. Integer', 'sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae', 'ornare lectus justo eu arcu.', 'non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec', 'Maecenas libero', 'sed dictum', 'magnis dis'),
(19, 118, 'Gilmore, Tallulah T.', 'adipiscing lobortis risus. In mi', 'in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit', 'amet orci. Ut sagittis lobortis', 'Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante.', 'neque vitae', 'elementum at,', 'turpis. Aliquam'),
(20, 120, 'Tyler, Bradley O.', 'Suspendisse aliquet, sem ut cursus', 'odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut,', 'Curabitur massa. Vestibulum accumsan neque', 'sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin', 'imperdiet nec,', 'ligula. Nullam', 'Nunc mauris'),
(21, 121, 'Ochoa, Maxwell R.', 'at lacus. Quisque purus sapien,', 'luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', 'vestibulum lorem, sit amet ultricies', 'quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus', 'tristique pellentesque,', 'enim. Curabitur', 'faucibus ut,');

-- --------------------------------------------------------

--
-- Structure de la table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `updated_date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `old_content` text NOT NULL,
  `new_content` text NOT NULL,
  `id_artwork` int(11) NOT NULL,
  `seen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `updates`
--

INSERT INTO `updates` (`id`, `updated_date`, `input_name`, `old_content`, `new_content`, `id_artwork`, `seen`) VALUES
(101, '2021-03-18', '\0Artwork\0synopsis_long_en', 'hello wooooooorld', 'orange', 2, 1),
(102, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'orange', 2, 0),
(103, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'orange', 2, 1),
(104, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'violet', 2, 1),
(105, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'violet', 2, 1),
(106, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'violet', 2, 0),
(107, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'violet', 2, 1),
(108, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'violet', 2, 1),
(109, '2021-03-18', '\0\0synopsis_long_en', 'hello wooooooorld', 'orange', 2, 1),
(110, '2021-03-18', '\0\0synopsis_short_en', 'happy hi', 'orange', 2, 0),
(111, '2021-03-18', '\0\0title', 'the big coucou', 'The pas si big coucou', 2, 1),
(112, '2021-03-18', '\0\0synopsis_long_en', 'orange', 'coucou !!', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `kart_url` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `kart_url`, `first_name`, `last_name`, `email`, `profil`) VALUES
(1, 'user/1', 'jacob', 'onnet', 'hat.jack@bonnet.com', 'is_student'),
(3, 'Duis a mi fringilla', 'Urielle', 'Phillips', 'habitant.morbi.tristique@ipsumsodalespurus.net', 'vel,'),
(4, 'posuere at, velit. Cras', 'Lance', 'Knapp', 'libero.dui@velitin.org', 'habitant'),
(5, 'neque sed dictum eleifend,', 'Cyrus', 'Dyer', 'sem.Nulla.interdum@cursusinhendrerit.com', 'neque.'),
(6, 'ipsum cursus vestibulum. Mauris', 'Leila', 'Robinson', 'urna.convallis@Vivamus.net', 'mollis'),
(7, 'et tristique pellentesque, tellus', 'Blake', 'Potter', 'tincidunt.nibh@CuraeDonectincidunt.co.uk', 'libero'),
(8, 'ornare, elit elit fermentum', 'Aline', 'Campbell', 'Vestibulum@lobortisaugue.com', 'Curabitur'),
(9, 'Cras eu tellus eu', 'Dorothy', 'Alvarez', 'suscipit@famesacturpis.edu', 'enim.'),
(10, 'egestas, urna justo faucibus', 'Winifred', 'Stanley', 'pede.et.risus@orciluctuset.co.uk', 'eget'),
(11, 'Duis gravida. Praesent eu', 'Donna', 'Miranda', 'consectetuer.ipsum@ategestas.org', 'Pellentesque'),
(12, 'lectus pede et risus.', 'Ryder', 'Maynard', 'enim.Sed@rhoncusidmollis.com', 'rhoncus.'),
(112, 'libero. Morbi accumsan laoreet', 'Willa', 'Fulton', 'urna.suscipit@Loremipsumdolor.net', 'lacus.'),
(113, 'arcu. Vestibulum ante ipsum', 'Oliver', 'Tran', 'sodales@maurisipsumporta.co.uk', 'nibh'),
(114, 'ultricies ligula. Nullam enim.', 'Ora', 'Emerson', 'molestie@fringilla.com', 'ut'),
(115, 'pharetra ut, pharetra sed,', 'Chancellor', 'Moody', 'pede.nonummy@temporaugue.edu', 'sed'),
(116, 'feugiat. Sed nec metus', 'Stacey', 'Ferguson', 'Suspendisse@diamluctus.edu', 'consectetuer'),
(117, 'gravida non, sollicitudin a,', 'Wang', 'Macias', 'justo@odio.ca', 'Aliquam'),
(118, 'montes, nascetur ridiculus mus.', 'Flynn', 'Terrell', 'imperdiet@dignissim.ca', 'quam.'),
(119, 'sit amet luctus vulputate,', 'Hilary', 'Osborne', 'ligula.Aliquam@Integerin.org', 'sapien.'),
(120, 'scelerisque sed, sapien. Nunc', 'Sasha', 'Johnston', 'tortor.Nunc@turpisIn.ca', 'Donec'),
(121, 'dictum cursus. Nunc mauris', 'Yoko', 'Pitts', 'rhoncus@sit.ca', 'magna.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`id`),
  ADD KEY `one-to-many` (`id_student`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `included_in` (`id_artwork`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `one_to_one` (`id_user`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `one-to-one` (`id_user`);

--
-- Index pour la table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belongs_to` (`id_artwork`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `kart_url` (`kart_url`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `one-to-many` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`);

--
-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `included_in` FOREIGN KEY (`id_artwork`) REFERENCES `artwork` (`id`);

--
-- Contraintes pour la table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `one_to_one` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `one-to-one` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `belongs_to` FOREIGN KEY (`id_artwork`) REFERENCES `artwork` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
