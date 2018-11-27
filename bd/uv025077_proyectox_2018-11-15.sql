# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: marcosdipaolo.com (MySQL 5.6.41)
# Base de datos: uv025077_proyectox
# Tiempo de Generación: 2018-11-15 22:17:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla carrito_producto
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carrito_producto`;

CREATE TABLE `carrito_producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carrito_id` int(10) unsigned NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrito_id` (`carrito_id`),
  KEY `producto_id` (`producto_id`),
  CONSTRAINT `carrito_producto_ibfk_1` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`),
  CONSTRAINT `carrito_producto_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla carritos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carritos`;

CREATE TABLE `carritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `fecha` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla compras
# ------------------------------------------------------------

DROP TABLE IF EXISTS `compras`;

CREATE TABLE `compras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `articulos` int(10) unsigned NOT NULL,
  `monto` int(10) unsigned NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Volcado de tabla productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `marca` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `descripcion` varchar(1000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `categoria` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `precio` int(11) NOT NULL,
  `stock` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `foto` varchar(200) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `destacado` tinyint(1) DEFAULT '0',
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modficado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;

INSERT INTO `productos` (`id`, `nombre`, `marca`, `descripcion`, `categoria`, `precio`, `stock`, `foto`, `destacado`, `creado`, `modficado`)
VALUES
	(4,'Auricular Gamer Talos','redragon','Con su estructura de plÃ¡stico ABS, diadema metÃ¡lica incorporada prÃ¡cticamente indestructible, sumado a su vincha autoajustable y su recubrimiento circumaural, que recubre toda superficie de la oreja. Posee motor de vibraciÃ³n de 30mm, para potenciar a lÃ­mites inimaginables los sonidos graves. El control independiente para control de volumen y motor de vibraciÃ³n mÃ¡s la funciÃ³n mute para el micrÃ³fono aseguran toda la comodidad necesaria para un auricular de este calibre. AdemÃ¡s posee un cable mallado de 2 metros de largo, altamente resistente. Este headphone, de sonido 7.1 virtual y conectores USB 2.0 garantizan la mejor calidad de sonido en nuestros diafragmas de 40mm con imanes de neodimio, ideales en la construcciÃ³n de perifÃ©ricos de sonido. Totalmente rebatible con brazo tipo boom, de recepciÃ³n unidireccional y reducciÃ³n de ruido, para la mejor experiencia en gaming y cualquier funciÃ³n que lo requiera. El Talos posee retroiluminaciÃ³n roja alrededor de las copas, pensad','[\"hardware\",\"auriculares\"]',1650,'3','img/productos/1539652317.jpg',0,'2018-11-04 10:50:59','2018-11-04 10:51:51'),
	(5,'HD SSD 240gb M2 WD Green','wd','Con la mejora del rendimiento del SSD WD Green SATA, puede navegar por internet, jugar o, simplemente, arrancar su sistema en un instante. Ligeros y resistentes a los golpes, los SSD WD Green no tienen piezas mÃ³viles y ayudan a proteger sus datos frente a golpes o caÃ­das accidentales. Los SSD WD Green son de los discos que menos energÃ­a consumen del sector. Y cuando consume menos energÃ­a, su ordenador portÃ¡til funciona mÃ¡s tiempo. Compatible con la mayorÃ­a de ordenadores de sobremesa y portÃ¡tiles, los SSD WD Green estÃ¡n disponibles en formatos de 2,5 pulgadas / 7 mm y en los modelos M.2 2280 para instalarlos de forma sencilla y sin preocupaciones. Supervise el estado de su disco con el Panel de control WD SSD gratuito y descargable, y clone discos con el software AcronisÂ® True Imageâ„¢ WD Edition. Todos los SSD WD Green disponen de una garantÃ­a limitada de 3 aÃ±os, por lo que puede confiar plenamente en WD para todas las necesidades que tenga relacionadas con los datos. Velo','[\"hardware\",\"discos\"]',2480,'2','img/productos/1539656723.jpg',1,'2018-11-04 10:51:08','2018-11-04 10:54:37'),
	(6,'Teclado HyperX Alloy Kingston','kingston','El HyperX Alloy FPS RGBâ„¢ es un teclado high-performance diseÃ±ado para garantizar tanto tu estilo como tus habilidades. Incluye un conveniente puert de carga USB, y un cable desmontable muy bueno para la portabilidad. El marco de acero sÃ³lido asegura que tu teclado se sienta estable e inmÃ³vil mientras estÃ¡s presionando frenÃ©ticamente las teclas para recargar, saquear enemigos derribados o armas de intercambio rÃ¡pido. Los conmutadores de teclado Kailh Silver Speed duraderos tienen capacidad para 70 millones de pulsaciones de teclas y cuentan con una fuerza de actuaciÃ³n ultraligera, lo que los convierte en ideales para los jugadores que buscan obtener cada ventaja adicional en una fracciÃ³n de segundo sobre sus rivales. Una vez que tengas tu teclado listo para presumir, puedes guardar hasta 3 personalizaciones en tu memoria incorporada y llevar tu propio espectÃ¡culo de luz personal y configuraciÃ³n de macros en el camino. No se pierda ninguna importante tecla con el modo de jueg','[\"hardware\",\"teclados\",\"destacado\"]',4899,'1','img/productos/1539657376.jpg',0,'2018-11-04 10:51:26','2018-11-04 10:51:52'),
	(7,'Mother Gigabyte GA-H110M-H ***','gigabyte','Las motherboards de la serie GIGABYTE 100 son compatibles con los procesadores IntelÂ® Core â„¢ de sexta generaciÃ³n mÃ¡s recientes, una CPU de escritorio de 14nm que presenta un rendimiento mejorado, eficiencia energÃ©tica y compatibilidad con memoria DDR4, brindando funciones de vanguardia y mÃ¡ximo rendimiento para su prÃ³xima generaciÃ³n de PC. Ofrece una resoluciÃ³n de sonido de alta calidad y expansiÃ³n de sonido para crear los efectos de sonido mÃ¡s realistas para usuarios profesionales. No hay nada mÃ¡s perjudicial para la longevidad de su PC que la humedad, y la mayorÃ­a de las partes del mundo experimenta humedad en el aire como la humedad en algÃºn momento del aÃ±o. Las placas madre GIGABYTE han sido diseÃ±adas para garantizar que la humedad nunca sea un problema, incorporando una nueva tecnologÃ­a de PCB Glass Fabric que repele la humedad causada por condiciones hÃºmedas y hÃºmedas. La tecnologÃ­a PCB de tela de vidrio utiliza un nuevo material de PCB que reduce la cantidad','[\"hardware\",\"motherboards\",\"destacado\"]',2482,'6','img/productos/1539658400.jpg',1,'2018-11-04 10:51:38','2018-11-04 10:54:40'),
	(8,'Radeon RX570 Gigabyte Aorus','gigabyte','Las tarjetas grÃ¡ficas AORUS estÃ¡n diseÃ±adas para la perfecciÃ³n en la bÃºsqueda de la mejor experiencia de grÃ¡ficos para entusiastas de los juegos. Basado en la revolucionaria arquitectura AMD Polaris, la tarjeta grÃ¡fica AORUS te ofrece una increÃ­ble experiencia de juego. AORUS proporciona la soluciÃ³n de refrigeraciÃ³n versÃ¡til para todos los componentes clave de la tarjeta grÃ¡fica. Cuidamos no solo GPU sino tambiÃ©n VRAM y MOSFET, para garantizar una operaciÃ³n estable de overclock y una vida mÃ¡s larga. En la parte frontal, los tubos de calor tÃ¡ctiles directos de la GPU combinan una base metÃ¡lica para disipar la mayor parte del calor de la GPU y la VRAM. En la parte posterior, la placa posterior de cobre disipa el calor del lado posterior de la GPU. El mÃ³dulo de refrigeraciÃ³n WINDFORCE cuida muy bien todos los demÃ¡s componentes clave. AORUS garantiza al cliente una mejor soluciÃ³n de refrigeraciÃ³n de muchas maneras.','[\"hardware\",\"placas de video\",\"destacado\"]',9799,'8','img/productos/1539658591.jpg',0,'2018-11-04 10:51:39','2018-11-04 10:51:53'),
	(9,'Silla AeroCool ac120','aerocool','El sistema RGB incorpora cuatro efectos de iluminaciÃ³n. Selecciona tu efecto favorito con un mando a distancia de fÃ¡cil utilizaciÃ³n. Cuando la silla funciona en el modo de iluminaciÃ³n de color sÃ³lido, puede elegir cualquier de los 16 colores predefinidos disponibles segÃºn sus gustos y el ambiente que desee. AC120 AIR RGB incorpora bordes iluminados en un diseÃ±o de bandas Ã³pticas patentado por Aerocool. Seleccionamos cuidadosamente la banda de fibra Ã³ptica mÃ¡s adecuada para lograr la iluminaciÃ³n mÃ¡s atrayente y esa banda se coloca en el borde exterior de la silla. Todas las funciones RGB se alimentan con un power bank USB. Para una mayor comodidad, puede colocar el power bank en el bolsillo situado debajo de la silla. Una â€œsuperficie de respiraciÃ³nâ€ significa una silla mÃ¡s fresca y cÃ³moda tras horas de utilizaciÃ³n. Nuestra tecnologÃ­a AIR combina un atractivo diseÃ±o perforado con materiales no textiles de alta calidad y espumas para garantizar una excelente circulac','[\"hardware\",\"sillas\"]',12300,'1','img/productos/1539658793.jpg',0,'2018-11-04 10:51:39','2018-11-04 10:51:54'),
	(10,'ASUS Prime H110M-P H110','asus','DiseÃ±ado para la 7ma generaciÃ³n de procesadores IntelÂ® Core â„¢ para maximizar la conectividad y la velocidad con NVMe M.2, panel frontal USB 3.0, Gigabit LAN y soporte para 32 GB de DDR4. 5X Protection II Las salvaguardias de nivel de hardware brindan longevidad y confiabilidad a los componentes. Fan Xpert ofrece controles avanzados del ventilador para una refrigeraciÃ³n optimizada. Confiabilidad de arriba a abajo ya que cada una de nuestras placas base estÃ¡ sujeta a mÃ¡s de 8,000 horas de validaciÃ³n para garantizar que cada placa cumpla con nuestros estÃ¡ndares de rendimiento. El audio HD de 8 canales incorporado proporciona un sonido envolvente cÃ¡lido, envolvente y claro como el cristal.','[\"hardware\",\"motherboards\"]',2499,'5','img/productos/1539659055.jpg',1,'2018-11-04 10:51:40','2018-11-04 10:54:41'),
	(11,'Auriculares Logitech G533','logitech','Los transductores de audio Pro-G pendientes de patente estÃ¡n hechos con materiales de malla hÃ­brida y ofrecen una calidad de audio similar a la de los auriculares de gama alta. La tecnologÃ­a DTS Headphone:X reproduce con precisiÃ³n la colocaciÃ³n de altavoces 7.1 y el posicionamiento de audio. Los auriculares G533 consiguen recrear los efectos ambientales de los juegos y el audio posicional que los diseÃ±adores de los juegos querÃ­an que oyeras. Incluso puedes ajustar los niveles de volumen de cada uno de los 7 canales de audio para, por ejemplo, amplificar sonidos de juego procedentes de canales posteriores, para oÃ­r cosas que ocurren a tu espalda. Los auriculares con micrÃ³fono G533 ofrecen transmisiÃ³n de audio digital sin pÃ©rdida, comodidad inalÃ¡mbrica y alta fidelidad de sonido en un radio de acciÃ³n de 15 metros. Los auriculares con micrÃ³fono G533 se han diseÃ±ado para mantener una conexiÃ³n estable incluso en entornos con muchas interferencias electromagnÃ©ticas, como cua','[\"hardware\",\"auriculares\"]',4899,'1','img/productos/1539659121.jpg',0,'2018-11-04 10:51:40','2018-11-04 10:51:55'),
	(12,'Gabinete NZXT Noctis 450','NZXT','El Noctis 450 original significÃ³ el regreso de NZXT a diseÃ±os audaces y atrevidos. Esta vez, nos hemos asociado con Republic of Gamers para crear una ediciÃ³n especial Noctis 450 para jugadores de PC verdaderamente dedicados. Esta carcasa ATX de torre mediana cuenta con certificaciÃ³n ROG en un exclusivo acabado Gun Grey y estÃ¡ equipada con la tecnologÃ­a de iluminaciÃ³n Aura Sync RGB. No es para los dÃ©biles de corazÃ³n, el nuevo Noctis 450 estÃ¡ diseÃ±ado para atraer el anhelo endurecido de batalla por los desafÃ­os Ã©picos.','[\"hardware\",\"gabinetes\"]',8590,'2','img/productos/1539701061.jpg',0,'2018-11-04 10:51:41','2018-11-04 10:51:56'),
	(13,'Impresora Samsung sl-m2020w','samsung','- DiseÃ±ada para funcionar de manera simple e intuitiva, la M2020W ahorra tiempo y esfuerzo valiosos.\r\n- BotÃ³n WPS de un toque\r\n- ConÃ©ctate en forma rÃ¡pida y segura a tu red inalÃ¡mbrica con solo presionar un botÃ³n, mediante WPS (Wi-Fi Protected Setup) de un toque.\r\n- Impresiones de alta calidad\r\n- DiseÃ±o ergonÃ³mico','[\"hardware\",\"impresoras\"]',5499,'12','img/productos/1540512994.jpg',0,'2018-11-04 10:51:44','2018-11-04 10:51:58'),
	(16,'Combo actualizaciÃ³n','intel','PROCESADOR INTEL i7 7700 + MOTHER MSI H110M + MEMORIA 16GB\r\n\r\nPROCESADOR INTEL i7 7700:\r\n- NÃºmero de procesador: i7-6700\r\n- Velocidad del bus: 8 GT/s DMI3\r\n- TamaÃ±o de memoria mÃ¡ximo: 64 GB\r\n- Ancho de banda de memoria: 34,1 GB/s\r\n- Salida de grÃ¡ficos: eDP/DP/HDMI/DVI- Ancho de banda de memoria: 34,1 GB/s','[\"hardware\"]',28999,'2','img/productos/1542040034.jpg',1,'2018-11-12 13:27:12','2018-11-12 13:29:32'),
	(17,'Pendrive Sandisk Cruzer Force 8gb MetÃ¡lico','scandisk','AMPLIA CAPACIDAD DE ALMACENAMIENTO DE ARCHIVOS EN UNA CARCASA DE METAL DURADERO','[\"hardware\"]',342,'13','img/productos/1542066341.jpg',1,'2018-11-12 20:45:39','2018-11-12 20:45:39'),
	(18,'Mouse Optico Hd Usb Logitech','logitech','Cable Garantia C','[\"mouse\"]',139,'3','img/productos/1542112698.jpg',0,'2018-11-13 09:38:10','2018-11-13 09:38:10'),
	(20,' Mouse Pad Redragon','logitech','Archelon M P001 330 X 260 X 5 Mm','[\"hardware\"]',345,'9','img/productos/1542112947.jpg',0,'2018-11-13 09:42:19','2018-11-13 09:42:19');

/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `sexo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nacionalidad` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nacimiento` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `cp` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `avatar` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `contrasenia` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `sexo`, `nacionalidad`, `nacimiento`, `direccion`, `cp`, `telefono`, `dni`, `avatar`, `contrasenia`)
VALUES
	(1,'Marcos','Di Paolo','marcosdipaolo@gmail.com','m','Argentina','',NULL,NULL,NULL,NULL,NULL,'$2y$10$lvdCbBpuaR.0HeozWqybBeGVIaOyjd41vMIRfXGK.Gq4E7El6io2a'),
	(5,'Juan','Gomez','juan@juan.com','M','Colombia',NULL,NULL,NULL,NULL,NULL,'img/usuarios/1542240966.jpg','$2y$10$db.pjdu9js6TsD9xLLce/Oj/Pzhb9zxz3nyd967LsJjrWVQ83Bcbe'),
	(7,'Santiago','Osadczuk','sosadczuk@hotmail.com',NULL,'Argentina',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$JVwNaO3blZUwQe0bElnINexBemeA0WBXqW5L7nriBiWyMJkRXLL9G'),
	(8,'nicolas','lalin','nico_lalin@hotmail.com.ar','M','Argentina',NULL,NULL,NULL,NULL,NULL,'img/usuarios/1542284068.jpg','$2y$10$meNyhhD0poLRywbCn4HF4uoSi5ZlpdFX7iIqkcq4bZrRFbLHxqFW.'),
	(9,'Eduardo','Telapresta','eduardo@telapresta.com','M','Brasil',NULL,NULL,NULL,NULL,NULL,'img/usuarios/1542311763.jpg','$2y$10$odDsLaRcZ6Pskj1DpDT7muGnLJ0ecUf4l0QAZJrVbYV6XRJclMv2S');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
