CREATE DATABASE form_aplikasi;

USE form_aplikasi;

CREATE TABLE aplikasi_tabel (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(255),
  nrp VARCHAR(255),
  judul VARCHAR(255),
  link_git VARCHAR(255),
  jenis_teknologi VARCHAR(255),
  versi_teknologi VARCHAR(255)
);
