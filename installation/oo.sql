DROP TABLE IF EXISTS ship;

CREATE TABLE `ship` (
  `id`              INT(11)                    NOT NULL AUTO_INCREMENT,
  `name`            VARCHAR(255)
                    COLLATE utf8mb4_unicode_ci NOT NULL,
  `weapon_power`    INT(4)                     NOT NULL,
  `defense`         INT(4)                     NOT NULL,
  `is_under_repair` TINYINT(1)                 NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

INSERT INTO ship
(name, weapon_power, defense, is_under_repair) VALUES
  ("Jedi Starfighter", 5, 30, 0);

INSERT INTO ship
(name, weapon_power, defense, is_under_repair) VALUES
  ("CloakShape Fighter", 2, 70, 0);

INSERT INTO ship
(name, weapon_power, defense, is_under_repair) VALUES
  ("Super Star Destroyer", 70, 500, 0);

INSERT INTO ship
(name, weapon_power, defense, is_under_repair) VALUES
  ("RZ-1 A-wing interceptor", 4, 50, 0);

