create database alumnos;

crate table alumnos(
codigo int auto_ increment primary key
nombre varchar(50)
mail varchar (70)
codigocurso int
);

create table cursos(
codigo int auto_increment primary key,
nombrecurso varchar(40)
);