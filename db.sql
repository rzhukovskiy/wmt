CREATE TABLE `config` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `app_id` VARCHAR(255) NULL,
  `app_secret` VARCHAR(255) NULL,
  `redirect_uri` VARCHAR(255) NULL,
  `standalone_id` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `social_id` INT NOT NULL,
  `name` VARCHAR(255) NULL,
  `token` VARCHAR(255) NULL,
  `is_active` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `social_id_UNIQUE` (`social_id` ASC));

CREATE TABLE `post` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` INT NOT NULL,
  `email` VARCHAR(255) NULL,
  `message` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `created_at` (`created_at` ASC));

INSERT INTO `config` VALUES (NULL, '6253298', 'eH3T0i8mYSmcIoHqGppB', 'http://mediastog.ru/site/login', '6265782');
