-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 mars 2021 à 15:51
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
(44, 'z32', NULL, 'film', '15:00', 'Z32 est un film sur le témoignage d\'un jeune Israélien qui vient de terminer son service militaire. Ce témoignage présente quelque chose qu\'il a fait en tant que soldat : sa participation à un meurtre commis début 2002.\\nÀ l\'origine, le film montrait un jeune homme décrivant les épreuves qu\'il a traversées. \\nCe qu\'il a fait. Son rôle dans le meurtre. Son témoignage est fascinant, tant pour les détails qu\'il révèle que pour ceux qu\'il cherche à dissimuler. Tel était le propos initial : faire un film-témoignage. Mais au fur et à mesure, le réalisateur a constaté qu\'il n\'était pas forcément évident de faire un film simple et minimaliste.', 'Z32 est un film sur le témoignage d\'un jeune Israélien qui vient de terminer son service militaire. Ce témoignage présente quelque chose qu\'il a fait en tant que soldat : sa participation à un meurtre commis début 2002.\\nÀ l\'origine, le film montrait un jeune homme décrivant les épreuves qu\'il a traversées. \\nCe qu\'il a fait. Son rôle dans le meurtre. Son témoignage est fascinant, tant pour les détails qu\'il révèle que pour ceux qu\'il cherche à dissimuler. Tel était le propos initial : faire un film-témoignage. Mais au fur et à mesure, le réalisateur a constaté qu\'il n\'était pas forcément évident de faire un film simple et minimaliste.\\nUne telle initiative soulève de nombreuses questions qui ne sont pas nécessairement liées à l\'événement évoqué, qui n\'ont rien à voir avec l\'histoire de l\'assassin. \\nPar exemple, qu\'advient-il de toutes ces informations lourdes de sens une fois divulguées ? Qui est cette personne qui écoute le témoignage et comment réagit-elle ? C\'est le réalisateur qui écoute le témoignage, c\'est moi-même. \\nEn réfléchissant sur le propos de mon oeuvre, j\'ai compris que c\'était un film sur moi. Sur moi et sur tous ceux qui lui ont assigné cette mission meurtrière. \\nTout compte fait, le film parle moins du meurtre que de la façon dont nous réagissons aux informations relatives au meurtre et dont nous engageons notre responsabilité. ', 'Avi Mograbi & Les Films d\'Ici, en coproduction avec Le Fresnoy -Studio national des arts contemporains, avec la participation du Centre National de la Cinématographie, Noga Communication & Cinema Project - Rabinovich Foundation. Un film de Avi Mograbi, musique Noam Enbar, image Philippe Bellaïche, supervision effets spéciaux Avi Mussel, graphisme 3D Issy Dekel, effets spéciaux Eran Feller, montage son et mixage Dominique Vieillard', '0000-00-00', 14, 0),
(47, 'Zoryas', NULL, 'installation', '15:00', 'Six formes reposent au centre d’un grand disque plat. L’une rappelle les morceaux de silice amorphe produits par l’impact de la foudre sur le sable, les autres semblent pareilles à des méduses, coraux ou algues qui peupleraient des fonds marins dont on ne sait rien. Chacune d’elle est emplie d’une matière-énergie de teinte et de structure à nulle autre égale. Les six formes sont toutes différentes mais elles appartiennent sans aucun doute à la même classe d’objet, la même catégorie de choses. Aux physiciens, elles rappellent les tubes utilisés par Heinrich Geissler pour expérimenter sur le comportement de certains gaz lorsqu’ils sont traversés par des courants électriques. à ceux qui fréquentent les boutiques des musées de sciences, elles rappellent les globes luminescents qui réagissent au toucher. Aux explorateurs des hautes latitudes, elles rappellent les aurores boréales. Elles sont à la fois tout cela et rien de cela.', 'Six formes reposent au centre d’un grand disque plat. L’une rappelle les morceaux de silice amorphe produits par l’impact de la foudre sur le sable, les autres semblent pareilles à des méduses, coraux ou algues qui peupleraient des fonds marins dont on ne sait rien. Chacune d’elle est emplie d’une matière-énergie de teinte et de structure à nulle autre égale. Les six formes sont toutes différentes mais elles appartiennent sans aucun doute à la même classe d’objet, la même catégorie de choses. Aux physiciens, elles rappellent les tubes utilisés par Heinrich Geissler pour expérimenter sur le comportement de certains gaz lorsqu’ils sont traversés par des courants électriques. à ceux qui fréquentent les boutiques des musées de sciences, elles rappellent les globes luminescents qui réagissent au toucher. Aux explorateurs des hautes latitudes, elles rappellent les aurores boréales. Elles sont à la fois tout cela et rien de cela. Elles sont emplies des gaz qui composent le milieu interstellaire : argon, néon, krypton, xénon, nitrogène... Elles sont tissée de la même étoffe que le soleil : le plasma. Quatrième état de la matière, le plasma compose 99 % de notre univers visible mais aucun des 100 % de celui dans lequel nous évoluons. C’est ce qui rend étrange le fait d’entendre son activité comme venant de l’intérieur de notre corps lorsque nous posons nos coudes sur l’anneau qui ceint le grand disque plat. Toute l’installation pulse au rythme de l’activité électromagnétique du soleil.', '\"Observatoire royal de Belgique, e-Callisto network - Christian Monstein, Jean Phillipe Uzan, Renée Prange, Kamil Fadel, Deborah Lévy, Julien Poidevin, Sébastien Cabour, Laurent Delplanque, Wang Bing, Pierre Le Lay et l’équipe du Fresnoy – Studio national.\\r\\n\\r\\nCollaborations — Stéphane Louis, Tesla Coil Ru et Baptiste De La Gorce.', '2021-03-03', 7, 0),
(48, 'Yeux', NULL, 'film', '1:05:20', 'Un poulailler industriel. Un arbre. Une maison. Deux femmes se frôlent, s\'épient, se scrutent. Lentement elles se confondent. Les deux visages semblent mouvants. Les traits de l\'un apparaissent sur celui de l\'autre. ', 'Un poulailler industriel. Un arbre. Une maison. Deux femmes se frôlent, s\'épient, se scrutent. Lentement elles se confondent. Les deux visages semblent mouvants. Les traits de l\'un apparaissent sur celui de l\'autre. Physiquement s\'opère un transfert par transformation morphologique du visage de l\'une en l\'autre. De cette perte d\'identité débute un soupçon, un secret, violence, chiennerie, menace de mort.', NULL, '2021-02-07', 13, 0),
(49, 'Yemaya', NULL, 'installation', '25:46', 'Le projet *Yemaya* est une installation immersive en réalité virtuelle qui tente de reformuler un langage plastique et poétique avec des outils et procédés scientifiques. Il consiste à déployer une mise en scène onirique à partir de certains modelés de grottes, de l’archive numérique du CNRS, entièrement réalisés avec la technologie de la photogrammétrie sous-marine, des mesures acoustiques issues d\'un capteur sous-marin actif, des moyens techniques qui permettent une meilleure observation scientifique du monde sous-marin et le tout avec un rendu visuel en haute résolution tridimensionnelle.', 'Le projet *Yemaya* est une installation immersive en réalité virtuelle qui tente de reformuler un langage plastique et poétique avec des outils et procédés scientifiques. Il consiste à déployer une mise en scène onirique à partir de certains modelés de grottes, de l’archive numérique du CNRS, entièrement réalisés avec la technologie de la photogrammétrie sous-marine, des mesures acoustiques issues d\'un capteur sous-marin actif, des moyens techniques qui permettent une meilleure observation scientifique du monde sous-marin et le tout avec un rendu visuel en haute résolution tridimensionnelle.  \\r\\n\\r\\nLe projet vient proposer une déambulation méditative et poétique, où chaque détail se modélise comme une vibration musicale. Il nous invite également à interroger la question de l’image, les formes de représentation et leurs avènements esthétiques et technologiques.  \\r\\n\r\n        ', 'Avec le soutien de lsis Laboratory / Laboratoire des Sciences de l’Information et des Systèmes / I & M Team, Images & Models / umr cnrs 7296, et tout particulièrement Mustapha Ouladsine, directeur du lsis, et Pierre Drap, chargé de recherche hdr.', '2021-03-05', 9, 0),
(50, 'Yabuki-machi', NULL, 'film', '2:25:00', 'Retour sur Fukushima Fukushima : c’est un lieu géographique, et c’est aussi un point symbolique. Retourner sur Fukushima, ce n’est pas seulement retourner en un lieu qui, depuis quelques mois, est universellement connu. Gérard Briche', 'Retour sur Fukushima Fukushima : c’est un lieu géographique, et c’est aussi un point symbolique. Retourner sur Fukushima, ce n’est pas seulement retourner en un lieu qui, depuis quelques mois, est universellement connu ; c’est aussi retourner sur un point qui sépare l’avant et l’après, l’enfance et la maturité, le passé et l’avenir. Trois séquences illustrent ce point symbolique. Le voyage rappelle que Fukushima est la ville que l’on a quittée, et que c’est aussi la ville vers laquelle on revient. L’activité sereine et entêtée des paysans rappelle que la vie qui était avant continue après, malgré tout. Le rite bouddhiste qui accompagne le dernier voyage du père rappelle que la mort n’est pas une fin et que le retour du fils est aussi un recommencement. Gérard Briche', 'La famille proche, la famille éloignée, Lucie Deschamps, Akiko Okumura, Eric Ménager, Charles Ménager, Idé Shôohei, ainsi que tous ceux qui ont partagé le projet avec moi.\r\n        ', '2021-01-19', 10, 0),
(51, 'XOsquelette', 'COUCOU', 'film', '25:45', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel.', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', '2021-03-23', 25, 0);

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

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `id_user`) VALUES
(1, 122);

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
(21, 121, 'Ochoa, Maxwell R.', 'at lacus. Quisque purus sapien,', 'luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', 'vestibulum lorem, sit amet ultricies', 'quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus', 'tristique pellentesque,', 'enim. Curabitur', 'faucibus ut,'),
(25, 138, 'Terri', '', '', '', '', '', '', NULL);

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
(183, '2021-03-23', '\0\0type', 'installation', 'film', 51, 0),
(184, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S\r\n        ', 51, 0),
(185, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S\r\n        ', 51, 0),
(186, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S', 51, 0),
(187, '2021-03-23', '\0\0type', 'film', 'installation', 51, 0),
(188, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S', 51, 0),
(189, '2021-03-23', '\0\0type', 'installation', 'film', 51, 0),
(190, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S', 51, 0),
(191, '2021-03-23', '\0\0subtitle', '', 'COUCOU', 51, 0),
(192, '2021-03-23', '\0\0synopsis_long', 'Je pr&eacute;sente &agrave; l&rsquo;occasion de Panorama 15 une installation que je qualifie d&rsquo;implicative. C&rsquo;est-&agrave;-dire qu&rsquo;au-del&agrave; d&rsquo;&ecirc;tre mentalement impliqu&eacute; par l&rsquo;&oelig;uvre, comme pour toute pi&egrave;ce, le spectateur est aussi impliqu&eacute; physiquement puisqu&rsquo;il doit lui-m&ecirc;me activer l&rsquo;installation. Par son geste, il donne &agrave; l&rsquo;&oelig;uvre plus que l&rsquo;&oelig;uvre ne va lui donner en retour. Mon id&eacute;e est de permettre au spectateur de d&eacute;passer la vision qu&rsquo;il a de la sculpture lorsqu&rsquo;il la d&eacute;couvre, pour acc&eacute;der &agrave; ce qui se cache derri&egrave;re elle. Et c&rsquo;est en se saisissant physiquement d&rsquo;une part de la sculpture que le spectateur va lui d&eacute;couvrir un nouveau sens, un monde virtuel. Le module joue ainsi le r&ocirc;le d&rsquo;un portail pour aller du r&eacute;el vers le virtuel. Au sein de l&rsquo;installation, le spectateur entendra des bribes d&rsquo;un discours de plusieurs heures prononc&eacute; par un auteur fictif. Ce que je pr&eacute;sente est une sorte de prototype qui est le fruit d&rsquo;une recherche arr&ecirc;t&eacute;e &agrave; un moment donn&eacute; et pr&eacute;sent&eacute;e en l&rsquo;&eacute;tat, qui aurait pu s&rsquo;&eacute;tendre et continuer &agrave; se d&eacute;velopper pendant un temps ind&eacute;termin&eacute;. Elle a ici d&ucirc; &ecirc;tre arr&ecirc;t&eacute;e pour obtenir le fameux rendu inh&eacute;rent &agrave; l&rsquo;artiste, mais aussi pour le chercheur.        ', 'BlueSky, Is He Listening?, PEZ corp., Draama! et &lt;3S', 51, 0);

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
(121, 'dictum cursus. Nunc mauris', 'Yoko', 'Pitts', 'rhoncus@sit.ca', 'magna.'),
(122, 'http://127.0.0.1:8000/v2/people/user/2286', 'Perrine', 'Leguai', 'pleguai@lefresnoy.net', 'is_staff'),
(138, 'http://127.0.0.1:8000/v2/people/user/2287', 'Perrine', 'Leguai', 'pleg@lefresnoy.net', 'is_student');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

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
