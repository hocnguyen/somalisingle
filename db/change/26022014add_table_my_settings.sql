CREATE TABLE `somalisingle`.`my_settings`(
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `date_format` VARCHAR(255) ,
    `date_time_format` VARCHAR(255) ,
    `search_match` INT(1) ,
    `allow_rate_photo` INT(1) ,
    `email_notification` INT(1) ,
    `allow_comment` INT(1) ,
    `timezone_id` INT(20) ,
    `receive_newsletter` INT(1) ,
    `user_id` INT(10) ,     PRIMARY KEY (`id`)  );