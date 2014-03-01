ALTER TABLE `somalisingle`.`users`     CHANGE `seeking` `seeking` VARCHAR(10) NULL  COMMENT '0: male. 1 :female';

ALTER TABLE `somalisingle`.`users`     ADD COLUMN `status` INT(1) NULL AFTER `living_current`;