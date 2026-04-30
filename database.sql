CREATE DATABASE IF NOT EXISTS bke_db;
USE bke_db;

CREATE TABLE IF NOT EXISTS machines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(255) NOT NULL UNIQUE,
    machine_name VARCHAR(255) NOT NULL,
    description TEXT,
    capacity VARCHAR(255),
    video VARCHAR(255),
    image VARCHAR(255),
    features TEXT,
    specs TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
