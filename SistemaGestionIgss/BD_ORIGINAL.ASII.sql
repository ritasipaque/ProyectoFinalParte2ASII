CREATE SCHEMA IF NOT EXISTS `bd_vacunacion` DEFAULT CHARACTER SET utf8mb4;
USE `bd_vacunacion`;

CREATE TABLE `afiliados` (
`id` int NOT NULL AUTO_INCREMENT,
`dpi`  varchar(45),
`nombre` varchar(45) DEFAULT NULL,
`fecha_nacimiento` DATE DEFAULT NULL,
`sexo` varchar(45) DEFAULT NULL,
 `departamento` varchar(45) DEFAULT NULL,
 `direccion` varchar(45) DEFAULT NULL,
 `telefono` varchar(45) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE `vacunas` (
`id` int NOT NULL AUTO_INCREMENT,
`nombre` varchar(45) DEFAULT NULL,
`laboratorio`  varchar(45) DEFAULT NULL,
 `intervalo` DATE,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

CREATE TABLE `centros` (
`id` int NOT NULL AUTO_INCREMENT,
`nombre` varchar(45) DEFAULT NULL,
`zona`  varchar(45) DEFAULT NULL,
`vacuna`  varchar(45) DEFAULT NULL,
`dosis`  varchar(45) DEFAULT NULL,
`horario`  varchar(45) DEFAULT NULL,
`dia`  varchar(45) DEFAULT NULL,

 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;




CREATE TABLE `lote_vacunas` (
`código de identificación` int NOT NULL AUTO_INCREMENT,
`cantidad recibida` int DEFAULT NULL,
`cantidad en stock`   int DEFAULT NULL,
`fecha de entrega`  DATE,
`fecha de caducidad`  date,
 PRIMARY KEY (`código de identificación`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;



CREATE TABLE `agendar_cita` (
`código_cita` int NOT NULL AUTO_INCREMENT,
`centro`  varchar(45) DEFAULT NULL,
`fecha_cita`  DATE,
`vacuna` varchar(45) DEFAULT NULL,
`lote_vacuna` int DEFAULT NULL,
PRIMARY KEY (`código_cita`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;


CREATE TABLE `proceso_vacunacion` (
`dpi` varchar(45) DEFAULT NULL,
`nombre`  varchar(45) DEFAULT NULL,
`departamento` varchar(45) DEFAULT NULL,
`dosis`  varchar(45) DEFAULT NULL,
`vacuna`  varchar(45) DEFAULT NULL,
`fecha_vacunacion` DATE DEFAULT NULL,
`lote`  varchar(45) DEFAULT NULL,
`centro`  varchar(45) DEFAULT NULL,
`codigo_proceso` INT NOT NULL,
`fecha_nacimiento` DATE DEFAULT NULL,
`pais`  varchar(45) DEFAULT NULL,

PRIMARY KEY (
`codigo_proceso`
)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4;


INSERT INTO `bd_vacunacion`.`proceso_vacunacion` (`dpi`, `nombre`, `departamento`, `dosis`, `vacuna`, `fecha_vacunacion`, `lote`, `centro`, `codigo_proceso`, `fecha_nacimiento`, `pais`) VALUES ('1620630101', 'Victor Roman', 'Guatemala', '1', 'spunik', '2020-05-15', 'KML45', 'Portales', '500', '1990-12-12', 'Guatemala');

INSERT INTO `bd_vacunacion`.`proceso_vacunacion` (`dpi`, `nombre`, `departamento`, `dosis`, `vacuna`, `fecha_vacunacion`, `lote`, `centro`, `codigo_proceso`, `fecha_nacimiento`, `pais`) VALUES ('1620630101', 'Victor Roman', 'Guatemala', '2', 'spunik', '2020-08-25', 'MFG78', 'Portales', '1500', '1990-12-12', 'Guatemala');

INSERT INTO `bd_vacunacion`.`proceso_vacunacion` (`dpi`, `nombre`, `departamento`, `dosis`, `vacuna`, `fecha_vacunacion`, `lote`, `centro`, `codigo_proceso`, `fecha_nacimiento`, `pais`) VALUES ('1620630101', 'Victor Roman', 'Guatemala', '3', 'pfizer', '2021-01-15', 'ZXC102', 'Miraflores', '3006', '1990-12-12', 'Guatemala');

INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('camip pamplona', 'zona12', 'spunik', '1-2-3', '8:00-3:00PM', 'L a V');
INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('guardia de honor', '10', 'spunik', '1-2-3', '8:00 a 5:00pm', 'L a V');
INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('umg', 'zona2', 'moderna', '1-2', '8:00 a 4:00 pm', 'L a S');
INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('portales', 'zona17', 'spunik', '1-2', '9:00 a 5:00pm', 'L a D');
INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('mriaflores', 'zona10', 'pfizer', '1-2-3', '9:00 a 5:00 pm', 'L a D');
INSERT INTO `bd_vacunacion`.`centros` (`nombre`, `zona`, `vacuna`, `dosis`, `horario`, `dia`) VALUES ('usac', 'zona12', 'moderna', '1-2-3', '9:00 a 6:00pm', 'L a V');

