/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 13:16
 */

 CREATE TABLE usuarios (
   id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(255) NOT NULL,
   cargo VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL UNIQUE,
   password TEXT NOT NULL,

   fyh_creacion DATETIME NULL,
   fyh_actualizacion DATETIME NULL,
   estado VARCHAR(11)

 )ENGINE=InnoDB;

 INSERT INTO usuarios (nombre, cargo, email, password, fyh_creacion, estado) 
 VALUES ('Luis Miguel', 'ADMINISTRADOR', 'admin@admin.com', '$2y$12$KC7Bq95JJm.AcGOl14RZQudLRRJrvVhtsP.HJDo0Y8q.qKJ2rd4by', NOW(), '1');

 CREATE TABLE roles (
   id_rol INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nombre_rol VARCHAR(255) NOT NULL,
   
   fyh_creacion DATETIME NULL,
   fyh_actualizacion DATETIME NULL,
   estado VARCHAR(11)

 )ENGINE=InnoDB;

 INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
 VALUES ('ADMINISTRADOR', NOW(), '1');
 INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
 VALUES ('DIRECTOR_ACADEMICO', NOW(), '1');
 INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
 VALUES ('DIRECTOR_ADMINISTRATIVO', NOW(), '1');
 INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
 VALUES ('CONTADOR', NOW(), '1');
 INSERT INTO roles (nombre_rol, fyh_creacion, estado) 
 VALUES ('SECRETARIA', NOW(), '1');