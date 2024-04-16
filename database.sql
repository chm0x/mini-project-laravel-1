CREATE DATABASE IF NOT EXISTS instagram_clone
CHARACTER SET 'utf8mb4'
COLLATE 'utf8mb3_general_ci';
-- DROP DATABASE  instagram_clone;
USE instagram_clone;


DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    id                 int auto_increment not null,
    role                    varchar(20),
    name                    varchar(100) not null,
    surname                 varchar(200),
    nickname                varchar(100),
    email                   varchar(255) not null,
    password                varchar(255) not null,
    image                   varchar(255),
    created_at              datetime,
    updated_at              datetime,
    remember_token          varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id),
    UNIQUE KEY (email)
)ENGINE=InnoDB;

INSERT INTO users VALUE
(null, 'user','john', 'sergeant', 'the john', 'john@halo.com', 'john', null, CURTIME(), CURTIME(), null);

INSERT INTO users VALUE
(null, 'user','juan', 'lopez', 'juan', 'juan@juan.com', 'password', null, CURTIME(), CURTIME(), null),
(null, 'admin','admin', 'admin', 'admin', 'admin@halo.com', 'admin', null, CURTIME(), CURTIME(), null);



DROP TABLE IF EXISTS images;
CREATE TABLE IF NOT EXISTS images(
    id        int auto_increment not null,
    user_id         int not null,
    image_path      varchar(255),
    `description`   varchar(255),
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_images PRIMARY KEY(id),
    CONSTRAINT fk_image_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
)ENGINE=InnoDB;

INSERT INTO images VALUE
(null, 1, 'test.jpg', 'una imagen 1', CURTIME(), CURTIME()),
(null, 1, 'playa.jpg', 'una imagen de la playa', CURTIME(), CURTIME()),
(null, 2, 'memories.jpg', 'recuerdos de juan', CURTIME(), CURTIME());



DROP TABLE IF EXISTS comments;
CREATE TABLE IF NOT EXISTS comments(
    id      int auto_increment not null,
    user_id         int not null,
    image_id        int not null,
    content         text,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_comment PRIMARY KEY(id),
    CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_comment_image FOREIGN KEY(image_id) REFERENCES images(id) ON DELETE CASCADE
)ENGINE=InnoDB;


INSERT INTO comments VALUE
(null, 1, 3, 'Esta padre el memories', CURTIME(), CURTIME()),
(null, 2, 1, 'Wow un clasico, el test', CURTIME(), CURTIME()),
(null, 2, 2, 'Buena playa', CURTIME(), CURTIME());


DROP TABLE IF EXISTS likes;
CREATE TABLE IF NOT EXISTS likes(
    id         int auto_increment not null,
    user_id         int,
    image_id        int,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_like PRIMARY KEY(id),
    CONSTRAINT fk_like_user FOREIGN KEY(user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_like_image FOREIGN KEY(image_id) REFERENCES images(id) ON DELETE CASCADE
)ENGINE=InnoDB;


INSERT INTO likes VALUES 
(null, 1, 3, CURTIME(), CURTIME()),
(null, 2, 1, CURTIME(), CURTIME()),
(null, 2, 2, CURTIME(), CURTIME());