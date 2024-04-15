CREATE DATABASE IF NOT EXISTS instagram_clone
CHARACTER SET 'utf8mb4'
COLLATE 'utf8mb3_general_ci';
-- DROP DATABASE  instagram_clone;
USE instagram_clone;

CREATE TABLE users IF NOT EXISTS(
    user_id                 int auto_increment not null,
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
    CONSTRAINT pk_users PRIMARY KEY(user_id),
    UNIQUE KEY (email)
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS images(
    image_id        int auto_increment not null,
    user_id         int not null,
    image_path      varchar(255),
    `description`   varchar(255),
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_images PRIMARY KEY(image_id),
    CONSTRAINT fk_image_user FOREIGN KEY (user_id) REFERENCES users(user_id)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS comments(
    comment_id      int auto_increment not null,
    user_id         int not null,
    image_id        int not null,
    content         text,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_comment PRIMARY KEY(comment_id),
    CONSTRAINT fk_comment_user FOREIGN KEY(user_id) REFERENCES users(user_id),
    CONSTRAINT fk_comment_image FOREIGN KEY(image_id) REFERENCES images(image_id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS likes(
    like_id         int auto_increment not null,
    user_id         int,
    image_id        int,
    created_at      datetime,
    updated_at      datetime,
    CONSTRAINT pk_like PRIMARY KEY(like_id),
    CONSTRAINT fk_like_user FOREIGN KEY(user_id) REFERENCES users(user_id),
    CONSTRAINT fk_like_image FOREIGN KEY(image_id) REFERENCES images(image_id)
)ENGINE=InnoDB;


