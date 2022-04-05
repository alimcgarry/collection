# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.7.3-MariaDB-1:10.7.3+maria~focal)
# Database: collection
# Generation Time: 2022-04-04 14:02:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table playing_cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `playing_cards`;

CREATE TABLE `playing_cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `theme` varchar(50) DEFAULT NULL,
  `origin` varchar(50) DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` varchar(750) DEFAULT NULL,
  `illustrator` varchar(50) DEFAULT NULL,
  `limited` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `playing_cards` WRITE;
/*!40000 ALTER TABLE `playing_cards` DISABLE KEYS */;

INSERT INTO `playing_cards` (`id`, `name`, `brand`, `theme`, `origin`, `material`, `price`, `img`, `description`, `illustrator`, `limited`)
VALUES
	(1,'Yellow Submarine','U.S. Playing Card Company','The Beatles','United States','FSC Certified Paper',13,'https://cdn.shopify.com/s/files/1/0200/7616/products/the-beatles-yellow-submarine-playing-cards.progressive.png.jpg?v=1648827615','Join Paul, John, George, and Ringo as they take a journey on a yellow submarine to Pepperland to save the music-loving inhabitants from the Blue Meanies! They stand no chance against the Fab Four’s groovy tunes.\n\nPremium playing cards featuring fan-favorite characters and artwork from the iconic animated musical adventure. The decks are illustrated with remarkable details and colorful, vibrant imagery. “It’s all in the mind y’know!”',NULL,0),
	(2,'The Beatles','Theory11','The Beatles','United States','FSC Certified Paper',10,'https://cdn.shopify.com/s/files/1/0200/7616/products/The_Beatles_Playing_Cards_Iamthewalrus.progressive.png.jpg?v=1642615268','Created by the popular playing card brand Theory11, the collection includes four vibrant decks designed after the Sgt. Pepper\'s Lonely Hearts Club Band. Each one is styled after a different member, replicating their marching band uniforms with colorful embossing and foiled details. Inside, the cards reference iconic songs, including \"Lucy In The Sky With Diamonds,\" \"Eleanor Rigby,\" and \"Blackbird,\" while John Lennon, Paul McCartney, George Harrison, and Ringo Starr sit in as the court and a Walrus acts as the Ace of Spades. The decks are available individually. Choose your favorite color or collector all four.',NULL,0),
	(3,'Smokey Bear, Limited Brown Ed.','U.S. Playing Card Company','USDA Forest Service','United States','FSC Certified Paper',15,'https://cdn.shopify.com/s/files/1/0200/7616/products/AceofSpades.progressive.png.jpg?v=1642177075','A special Limited Edition version of our popular Smokey Bear playing cards packaged in a minimal letterpress-printed brown tuck box.\n\nOfficial Smokey Bear playing cards. Produced in association with the USDA Forest Service, the cards feature Smokey and twelve of his closest woodland friends, along with fire-prevention tips illustrated throughout the deck by Sam Larson.',NULL,1),
	(4,'Harry Potter','Theory11','Harry Potter','United States','FSC Certified Paper',10,'https://cdn.shopify.com/s/files/1/0200/7616/products/harry-potter-playing-cards-blue-box.progressive.jpg?v=1641999250','Hold the Wizarding World of Harry Potter in the palm of your hands. theory11 has reimagined the magical series as a deck of premium playing cards. Iconic characters now appear as the face cards with custom artwork, including Harry as the king holding a Golden Snitch. You won\'t have to risk the fate of the Sorting Hat. The collection features four decks designed after each house of Hogwarts, allowing fans to choose between Gryffindor, Slytherin, Ravenclaw, and Hufflepuff or collect all four.',NULL,0),
	(5,'HMNIM, Gray Edition','U.S. Playing Card Company','Ocean','United States','FSC Certified Paper',18,'https://cdn.shopify.com/s/files/1/0200/7616/products/hmnim-octopus-ace.progressive.png.jpg?v=1637946391','Produced in collaboration with Mark Hoppus of Blink-182. Originally released in 2014 for the launch of the lifestyle brand, Hi My Name is Mark. The cards quickly sold out and have since been one of our most-requested decks to bring back.\n\nDesigned around the HMNIM Octopus logo, the deck features a nautical theme with custom court cards depicting aquatic folklore creatures.',NULL,1),
	(6,'DKNG Rainbow Wheels','The Expert Playing Card Co.','Rainbow','China','Paper',18,'https://cdn.shopify.com/s/files/1/0200/7616/products/Rainbow-7003_f6bbaca5-ae19-4c96-8cf5-e4eee109ef13.progressive.png.jpg?v=1636413357','Celebrate your pride with a pack of Rainbow Wheels. This colorful variation of our popular DKNG Playing Cards features a unique rainbow foil back design and updated face cards to match the spectrum. Package inside a vibrant set of holographic foil-stamped tuck boxes.\n\nCreated in collaboration with California-based creative studio, DKNG. ',NULL,0),
	(7,'Fulton\'s Thunderbird Room','Fulton\'s','Retro','United States','FSC Certified Paper',15,'https://cdn.shopify.com/s/files/1/0200/7616/products/AceofSpades-9684_c0b137de-acd0-4bee-87b4-215c87f1e768.progressive.png.jpg?v=1636413074','From the creative direction of playing card designer Brad Fulton comes an all-new edition to his popular series of Ace Fulton\'s playing cards.\n\nInspired by the beautiful Arizona Sunsets and a retro color palette of the 60s—Fulton\'s Thunderbird Room plays out as a masterful casino deck that will instantly take you to the beauty of the Valley of the Sun.\n\nThunderbird Room is a fictitious High Limit Room at Ace Fulton\'s Casino in Phoenix, Arizona.\n\nIllustrated by Jeff Trish in a mid-century style and produced by The Buck Twins, this creation is a timeless representation of beauty in the world of playing cards.','Jeff Trish',0),
	(8,'Cybernetic','Art of Play','Contemporary','China','Paper',25,'https://cdn.shopify.com/s/files/1/0200/7616/products/Harmonograph1.progressive.png.jpg?v=1640198810','The images on these cards were created through collaboration of man and machine. Ivan Moscovich patented his Harmonograph device in 1967 and soon after his revolutionary approach to drawing was featured in an exhibition titled Cybernetic Serendipity at the Institute of Contemporary Arts in London.\n\nA ground-breaking visual artist, inventor and author, Moscovich\'s work attracted the attention of creative luminaries such as M.C. Escher and Frank Oppenheimer. ','Ivan Moscovich',0),
	(9,'Tempo','U.S. Playing Card Company','Music','United States','FSC Certified Paper',18,'https://cdn.shopify.com/s/files/1/0200/7616/products/Tempo3-7718_708ebadd-0af9-43bf-9682-7e81df71403a.progressive.png.jpg?v=1636413149','Tempo Playing Cards are inspired by the golden age of jazz. In the 1920s and 30s a new style of music rapidly gained popularity in the United States and artists like Bessie Smith, Cab Calloway, Ella Fitzgerald, and Billie Holiday became household names.\n\nDesigned by Michael Mateyko, each card features an Art Deco style illustration that celebrates the spirit of improvisation and musical expression.','Michael Mateyko',0),
	(10,'Lucky Draw','Art of Play','Classic','United States','FSC Certified Paper',15,'https://cdn.shopify.com/s/files/1/0200/7616/products/lucky-draw-playing-cards-face.progressive.png.jpg?v=1645642760','Quality playing cards for everyday use. This beautiful pack of playing cards features a minimal three-color borderless back design and custom face cards.\n\nThe cards are packaged inside a luxurious letterpress-printed tuck case, with embossing and gold foil accents. Sealed with our trademark perforated stamp for easy opening.',NULL,0),
	(11,'Peau Doux, Deer back','U.S. Playing Card Company','Classic','United States','FSC Certified Paper',15,'https://cdn.shopify.com/s/files/1/0200/7616/products/peau-doux-deer-back-playing-cards-king.progressive.png.jpg?v=1645798829','In collaboration with Pitchford Entertainment, Media and Magic, we proudly present an extremely rare edition of the Peau Doux brand playing cards. Found tucked away in Cardini\'s private collection, the unique back-design illustrates a deer galloping through the forest with a color palette from another era.\n\nThe name Peau Doux comes from a line of products produced by Walgreens in Chicago in the early 1900s. \n\nThis deck is a modern poker-sized replica of the original. Special features include a vintage-inspired tuck box, letterpress-printed with gold metallic ink, and embossed typography. Custom tax stamp, ace of spades, and matching jokers depicting a silhouette of Cardini illustrated by Wade J. Callender.','Wade J. Callender',1),
	(12,'Illusion D\'Optique','U.S. Playing Card Company','Illusion','United States','FSC Certified Paper',18,'https://cdn.shopify.com/s/files/1/0200/7616/products/Packshot_66aa3ac0-1779-459e-a326-b84046c4ba15.progressive.png.jpg?v=1636413487','Illusion d’Optique is the most jaw-dropping collection of optical illusion playing cards ever assembled. Housed in a wild, rainbow-sheen holographic tuck-case, you may feel like you\'re hallucinating before you even open up the box.\n\nInside, you’ll find 54 eye-popping original designs created by a master of visual perception, Gianni Sarcone. Watch closely as colors change, shapes transform and static, printed ink seems to come alive. Sarcone has included updated versions of classic illusions, plus innovative new concepts he developed after years of study.','Guanni Sarcone',0);

/*!40000 ALTER TABLE `playing_cards` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
