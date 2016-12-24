<?php
//Creamos la tabla ficha

$sql = array("
CREATE TABLE IF NOT EXISTS `ficha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `logo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;",

//Creamos la tabla ficha tecnica

"CREATE TABLE IF NOT EXISTS `ficha_tecnica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idficha` int(11) NOT NULL,
  `indicadores` varchar(25) NOT NULL,
  `timestamps` datetime NOT NULL,
  `texto_descr` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;",


//Creamos la tabla foto

"CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `idficha` datetime NOT NULL,
  `tipo_foto` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;",


//Creamos la tabla ficha seguimiento

"CREATE TABLE IF NOT EXISTS `ficha_seguimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idficha` int(11) NOT NULL,
  `indicadores` varchar(25) NOT NULL,
  `timestamps` datetime NOT NULL,
  `texto_descr` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;",

"INSERT INTO ficha (nombre,titulo,fecha_creacion,logo)
VALUES ('Microsoft','Ficha de Microsoft','2014-03-22 00:00:00','microsoft.png')
",
);
include_once ('db.php');
$DB = new DB();

foreach ($sql as $tabla) {
	try {

		$DB->query($tabla);

		$DB->execute();

	}catch(PDOException $e) {
		$e->getMessage();
	}
}

echo "Se ha instalado correctamente la base de datos";
echo "</br>Creadas 4 tablas:";
echo "</br><ul><li>ficha</li>";
echo "<li>ficha_tecnica</li>";
echo "<li>ficha_seguimiento</li>";
echo "<li>fotos</li>";
echo "<ul></br>Click <a href='http://localhost/phpmyadmin/db_structure.php?server=1&db={$DB->getDBName()}'>acá</a> para verificar";



?>