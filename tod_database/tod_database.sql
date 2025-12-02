CREATE TABLE `admin` (
  `id` integer PRIMARY KEY,
  `email` varchar(60),
  `create_pass` char(52),
  `confirm_pass` char(52),
  `created_at` timestamp
);

CREATE TABLE `ship_list` (
  `id` integer PRIMARY KEY,
  `admin_id` int,
  `ship_name` varchar(50),
  `details_photo` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `package` (
  `id` integer PRIMARY KEY,
  `admin_id` int,
  `title` varchar(50),
  `details` varchar(250),
  `package_photo` varchar(200),
  `price` decimal,
  `created_at` timestamp
);

CREATE TABLE `ressorts` (
  `id` integer PRIMARY KEY,
  `admin_id` int,
  `title` varchar(50),
  `details` varchar(250),
  `ressort_photo` varchar(200),
  `price` decimal,
  `created_at` timestamp
);

CREATE TABLE `air_tick_req` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `client_name` varchar(100),
  `client_email` varchar(60),
  `client_nid_copy` varchar(200),
  `client_passprot_copy` varchar(200),
  `from` varchar(30),
  `to` varchar(30),
  `departure` date,
  `arraival` date,
  `created_at` timestamp
);

CREATE TABLE `ressort_req` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `client_name` varchar(100),
  `client_email` varchar(60),
  `client_nid_copy` varchar(200),
  `client_passprot_copy` varchar(200),
  `place` varchar(20),
  `ressort_name` varchar(60),
  `room_type` varchar(20),
  `from_date` date,
  `to_date` date,
  `created_at` timestamp
);

CREATE TABLE `ship_tick_req` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `client_name` varchar(100),
  `client_email` varchar(60),
  `client_nid_copy` varchar(200),
  `from_date` date,
  `to_date` date,
  `created_at` timestamp
);

CREATE TABLE `blogs` (
  `id` integer PRIMARY KEY,
  `title` varchar(80),
  `body` text COMMENT 'Content of the post',
  `admin_id` integer NOT NULL,
  `photo` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `gallery` (
  `id` integer PRIMARY KEY,
  `admin_id` integer,
  `photo` varchar(200),
  `details` varchar(150),
  `created_at` timestamp
);

CREATE TABLE `clients` (
  `id` integer PRIMARY KEY,
  `name` varchar(100),
  `nid` varchar(30),
  `nid_copy` varchar(200),
  `email` varchar(60),
  `create_pass` char(52),
  `confirm_pass` char(52),
  `created_at` timestamp
);

CREATE TABLE `air_ticket` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `from` varchar(30),
  `to` varchar(30),
  `deperture` date,
  `arraival` date,
  `price` decimal,
  `nid_copy` varchar(200),
  `passport_copy` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `ship_ticket` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `deperture` date,
  `arraival` date,
  `price` decimal,
  `nid_copy` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `ressort_book` (
  `id` integer PRIMARY KEY,
  `client_id` int,
  `place` varchar(20),
  `ressort_name` varchar(60),
  `room_type` varchar(20),
  `price` decimal,
  `from_date` date,
  `to_date` date,
  `nid_copy` varchar(200),
  `passport_copy` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `package_tour` (
  `package_id` integer PRIMARY KEY,
  `client_id` int,
  `place` varchar(20),
  `price` decimal,
  `nid_copy` varchar(200),
  `passport_copy` varchar(200),
  `created_at` timestamp
);

CREATE TABLE `client_feedback` (
  `client_id` int,
  `name` varchar(100),
  `msg` varchar(250),
  `photo` varchar(200),
  `created_at` timestamp
);

ALTER TABLE `blogs` ADD FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

ALTER TABLE `air_ticket` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `air_ticket` ADD FOREIGN KEY (`nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `ship_ticket` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `ship_ticket` ADD FOREIGN KEY (`nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `ressort_book` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `ressort_book` ADD FOREIGN KEY (`nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `package_tour` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `package_tour` ADD FOREIGN KEY (`nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `client_feedback` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `client_feedback` ADD FOREIGN KEY (`name`) REFERENCES `clients` (`name`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`client_name`) REFERENCES `clients` (`name`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`client_email`) REFERENCES `clients` (`email`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`client_nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`client_passprot_copy`) REFERENCES `air_ticket` (`passport_copy`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`from`) REFERENCES `air_ticket` (`from`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`to`) REFERENCES `air_ticket` (`to`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`departure`) REFERENCES `air_ticket` (`deperture`);

ALTER TABLE `air_tick_req` ADD FOREIGN KEY (`arraival`) REFERENCES `air_ticket` (`arraival`);

ALTER TABLE `gallery` ADD FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`client_name`) REFERENCES `clients` (`name`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`client_email`) REFERENCES `clients` (`email`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`client_nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`client_passprot_copy`) REFERENCES `ressort_book` (`passport_copy`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`place`) REFERENCES `ressort_book` (`place`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`ressort_name`) REFERENCES `ressort_book` (`ressort_name`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`room_type`) REFERENCES `ressort_book` (`room_type`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`from_date`) REFERENCES `ressort_book` (`from_date`);

ALTER TABLE `ressort_req` ADD FOREIGN KEY (`to_date`) REFERENCES `ressort_book` (`to_date`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`client_name`) REFERENCES `clients` (`name`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`client_email`) REFERENCES `clients` (`email`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`client_nid_copy`) REFERENCES `clients` (`nid_copy`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`from_date`) REFERENCES `ship_ticket` (`deperture`);

ALTER TABLE `ship_tick_req` ADD FOREIGN KEY (`to_date`) REFERENCES `ship_ticket` (`arraival`);

ALTER TABLE `ship_list` ADD FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

ALTER TABLE `package` ADD FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

ALTER TABLE `ressorts` ADD FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
