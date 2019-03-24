Create database AMJO;

use AMJO;

create table COMENTARIOS(
ID int (2) auto_increment primary key,
NOMBRE varchar (30) not null,
CORREO varchar (30) not null,
TELEFONO int(10) not null,
MENSAJE varchar (200) not null
);

insert into COMENTARIOS (NOMBRE, CORREO, TELEFONO, MENSAJE)
values('Alejandro','abc@gmail.com',7711855823,'JAJAJAJA Alv un Comentario :v');
insert into COMENTARIOS (NOMBRE, CORREO, TELEFONO, MENSAJE)
values('Abram','def@gmail.com',7718881112,'Soy un pendejo XD');
insert into COMENTARIOS (NOMBRE, CORREO, TELEFONO, MENSAJE)
values('Mauricio','ghi@gmail.com',7712345672,'Soy un pendejo XD x2');

select * from COMENTARIOS;