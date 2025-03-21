	SELECT 
	`t_ciudad`.`Ciudad`,`t_ciudad`.`Comentarios_C`,
	`t_isla`.`Isla`, `t_isla`.`id_x`,`t_isla`.`id_y`,`t_isla`.`Comentarios_I`,`t_isla`.`last_update`,
	`t_sector`.`Sector`,`t_sector`.`Comentarios_S`,
	`t_materia`.`Materia`,
	`t_jugador`.`Jugador`,`t_jugador`.`Comentarios_J`,
	`t_alianza`.`Alianza`, `t_alianza`.`Code`, `t_alianza`.`Comentarios_A`, `t_alianza`.`Guerra`
	FROM `t_ciudad`
		LEFT JOIN `t_isla` ON `t_ciudad`.`id_isla` = `t_isla`.`id_isla`
		LEFT JOIN `t_x` ON `t_isla`.`id_x` = `t_x`.`id_x`
		LEFT JOIN `t_y` ON `t_isla`.`id_y` = `t_y`.`id_y`
		LEFT JOIN `t_sector` ON `t_isla`.`id_sector` = `t_sector`.`id_sector`
		LEFT JOIN `t_materia` ON `t_isla`.`id_materia` = `t_materia`.`id_materia`
		LEFT JOIN `t_jugador` ON `t_ciudad`.`id_jugador` = `t_jugador`.`id_jugador`
		LEFT JOIN `t_alianza` ON `t_jugador`.`id_alianza` = `t_alianza`.`id_alianza`;
=============================================================================================
SELECT `t_ciudad`.*, `t_isla`.*, `t_x`.*, `t_y`.*, `t_materia`.*, `t_jugador`.*, `t_alianza`.*
FROM `t_ciudad`
	LEFT JOIN `t_isla` ON `t_ciudad`.`id_isla` = `t_isla`.`id_isla`
	LEFT JOIN `t_x` ON `t_isla`.`id_x` = `t_x`.`id_x`
	LEFT JOIN `t_y` ON `t_isla`.`id_y` = `t_y`.`id_y`
	LEFT JOIN `t_materia` ON `t_isla`.`id_materia` = `t_materia`.`id_materia`
	LEFT JOIN `t_jugador` ON `t_ciudad`.`id_jugador` = `t_jugador`.`id_jugador`
	LEFT JOIN `t_alianza` ON `t_jugador`.`id_alianza` = `t_alianza`.`id_alianza`;
=============================================================================================
$sql = "SELECT * FROM `V_TOTAL` WHERE `id_x` BETWEEN 84 AND 99 AND `id_y` BETWEEN 84 AND 99";
=============================================================================================
SELECT
    `t_ciudad`.`Ciudad`,`t_ciudad`.`Comentarios_ciu`,
	`t_isla`.`Isla`, `t_isla`.`X`,`t_isla`.`Y`,`t_isla`.`Comentarios_isla`,`t_isla`.`last_update`,
	`t_sector`.`Sector`,`t_sector`.`Comentarios_sector`,
	`t_materia`.`Materia`,
	`t_jugador`.`Jugador`,`t_jugador`.`Comentarios_jug`,
	`t_alianza`.`Alianza`, `t_alianza`.`Code`, `t_alianza`.`Comentarios_ali`, `t_alianza`.`Aliado`
	FROM `t_ciudad`
		LEFT JOIN `t_isla` ON `t_ciudad`.`Idisla` = `t_isla`.`Id_isla`

		LEFT JOIN `t_sector` ON `t_isla`.`Idsector` = `t_sector`.`Id_sector`
		LEFT JOIN `t_materia` ON `t_isla`.`Idmateria` = `t_materia`.`id_materia`
		LEFT JOIN `t_jugador` ON `t_ciudad`.`Idjugador` = `t_jugador`.`id_jugador`
		LEFT JOIN `t_alianza` ON `t_jugador`.`Idalianza` = `t_alianza`.`id_alianza`;
=============================================================================================
CREATE TABLE t_alianza (
    Id_alianza INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_alianza),
	Alianza VARCHAR(20),
	Comentarios_ali VARCHAR(100),
	Aliado TINYINT,
) ENGINE=INNODB;

CREATE TABLE t_jugador (
    Id_jugador INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id_jugador),
	Jugador VARCHAR(20),
	Comentarios_jug VARCHAR(100),
	Idalianza INT,
	
	FOREIGN KEY (Idalianza)
		REFERENCES t_alianza(Id_alianza)
) ENGINE=INNODB;
=============================================================================================
CREATE TABLE t_ciudad (
    Id_ciudad INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id_ciudad),
	Ciudad VARCHAR(30),
	Comentarios_ciu VARCHAR(100),
	Idjugador INT,
	Idisla INT,
FOREIGN KEY (Idjugador)
	REFERENCES t_jugador(Id_jugador),
FOREIGN KEY (Idisla)
	REFERENCES t_isla(Id_isla)

) ENGINE=INNODB;
=============================================================================================
CREATE TABLE t_isla (
    Id_isla INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id_isla),
	Isla VARCHAR(30),
	X INT,
	Y INT,
	Comentarios_isl VARCHAR(100),
	Idmateria INT,
	Idsector INT,
FOREIGN KEY (Idmateria)
	REFERENCES t_materia(id_materia),
FOREIGN KEY (Idsector)
	REFERENCES t_sector(Id_sector)
) ENGINE=INNODB;
===============================
SELECT
t_ciudad.Ciudad,t_ciudad.Comentarios_ciu,
t_isla.Isla,t_isla.X,t_isla.Y,t_isla.Comentarios_isl,
t_materia.Materia,t_isla.Nivmateria,t_isla.Nivbosque,
t_sector.Sector,t_sector.Comentarios_sector,
t_jugador.Jugador,t_jugador.Comentarios_jug,t_jugador.Idalianza,
t_alianza.Alianza,t_alianza.Code,t_alianza.Miembros,t_alianza.Comentarios_ali,t_alianza.Aliado,t_alianza.Guerra


	FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
=============================================================================================
SELECT
t_ciudad.Ciudad,t_ciudad.Comentarios_ciu,
t_isla.Isla,t_isla.X,t_isla.Y,t_isla.Comentarios_isl,
t_materia.Materia,t_isla.Nivmateria,t_isla.Nivbosque,
t_sector.Sector,t_sector.Comentarios_sector,
t_jugador.Jugador,t_jugador.Comentarios_jug,t_jugador.Idalianza,
t_alianza.Alianza,t_alianza.Code,t_alianza.Miembros,t_alianza.Comentarios_ali,t_alianza.Aliado,t_alianza.Guerra


	FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
=============================================================================================
$sql = "INSERT INTO t_isla
(`Id_isla`, `Isla`, `X`, `Y`, `Comentarios_isl`, `Idmateria`, `Idsector`, `Nivmateria`, `Nivbosque`)
VALUES
('null' , '$_POST[isla]' , '$_POST[x]' , '$_POST[y]' , '$_POST[coments_i]' , '$_POST[materia]' , '$_POST[sector]' , '$_POST[nivmat]' , '$_POST[nivbos]' )";
=============================================================================================
SELECT
t_ciudad.Ciudad,t_ciudad.Comentarios_ciu,
t_isla.Isla,t_isla.X,t_isla.Y,t_isla.Comentarios_isl,
t_materia.Materia,
t_sector.Sector,t_sector.Comentarios_sector,
t_jugador.Jugador,t_jugador.Comentarios_jug,
t_alianza.Code,t_alianza.Comentarios_ali,t_alianza.Aliado,t_alianza.Guerra


	FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
=============================================================================================
SELECT
t_ciudad.*,
t_isla.*,
t_materia.*,
t_sector.*,
t_jugador.*,
t_alianza.*
FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
=============================================================================================
SELECT
t_isla.Isla,t_materia.Materia
FROM t_isla LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.Id_materia
WHERE Idsector = 12
---------------------------------------------------------------------------------------------
SELECT t_isla.Id_isla, t_isla.Isla FROM t_isla WHERE Idsector = 10 ORDER BY t_isla.Id_isla ASC
=============================================================================================