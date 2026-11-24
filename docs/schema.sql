-- Esquema reconstruído a partir das queries do código (o repositório não tinha um .sql).
CREATE DATABASE IF NOT EXISTS clients_list CHARACTER SET utf8mb4;
USE clients_list;

CREATE TABLE IF NOT EXISTS clients (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(100) NOT NULL,
    email      VARCHAR(150) NOT NULL,
    phone      VARCHAR(30),
    address    VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS users (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    email    VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL  -- hash Argon2id (password_hash)
);
