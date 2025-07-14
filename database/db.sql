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
 VALUES ('Luis Miguel', 'Administrador', 'admin@admin.com', '$2y$12$KC7Bq95JJm.AcGOl14RZQudLRRJrvVhtsP.HJDo0Y8q.qKJ2rd4by', NOW(), '1');