CREATE DATABASE IF NOT EXISTS Padma_Oil;
USE Padma_Oil;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  description TEXT,
  price DECIMAL(10, 2),
  image VARCHAR(255)
);

CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  address TEXT,
  phone VARCHAR(15),
  product_id INT,
  quantity INT,
  FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);