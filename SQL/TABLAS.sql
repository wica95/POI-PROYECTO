CREATE database teams_db;

create table if not exists user_type(
`user_type_id` int not null auto_increment comment "llave primaria de la tabla user types",
`descripcion` VARCHAR(45) NOT NULL,
`creation_date` datetime not null ,
`active` boolean not null default true,
primary key (`user_type_id`)
);

INSERT INTO `teams_db`.`user_type`(`descripcion`,`creation_date`,`active`)
VALUES ('Admin', sysdate(),TRUE );

INSERT INTO `teams_db`.`user_type`(`descripcion`,`creation_date`,`active`)
VALUES ('Alumno', sysdate(),TRUE );

INSERT INTO `teams_db`.`user_type`(`descripcion`,`creation_date`,`active`)
VALUES ('Maestro', sysdate(),TRUE );

select * from user_type;

create table ALUMNO(
`alumno_id` int not null auto_increment comment "llave primaria de la tabla alumnos",
`full_name`  varchar(200),
`email` varchar (200) not null,
`matricula` varchar (100) ,
`pass` 	varchar (20) not null,
`foto_perfil`	mediumblob,

primary key (`alumno_id`)
);
select * from ALUMNO;

create table MAESTRO(
`maestro_id` int not null auto_increment comment "llave primaria de la tabla alumnos",
`email` varchar (200) not null,
`pass` 	varchar (20) not null,
`full_name`  varchar(200),
`foto_perfil`	mediumblob,
`matricula` varchar (100) ,
primary key (`Maestro_id`)
);
create table TAREA (
`tarea_id` int not null auto_increment comment "llave primaria de la tabla tarea",
`tarea_titulo` varchar (100) comment	 "titulo de la tarea",
`tarea_texto`	varchar (300) comment "texto que va a tener la tarea",
`recompensa`	varchar (100)	comment "cual sera la recompensa del alumno",
`entregado`	 boolean not null default false comment	"cuando se envie la tarea estara como: NO ENTREGADO",
primary key (`tarea_id`)
);

create table MENSAJE (
`mensaje_id` int not null auto_increment comment "llave primaria de la tabla mensajes",
`mensaje_R_id` varchar (200) comment" id del mensaje recibido",
`mensaje_E_id`	varchar (200)	comment "id del mensaje enviado",
`mensaje`	varchar (500)	comment "texto del mensaje",
primary key(`mensaje_id`)
);


create table	MATERIA (
`materia_id` int not null auto_increment comment "llave primaria de la tabla materia",
`nombre` varchar (100) comment "nombre de la materia",
`grupo_fk`	int not null ,
`maestro_fk` int not null, 
`alumno_fk` int not null,
primary key(`materia_id`),
foreign key (`grupo_fk`) references GRUPO (`grupo_id`),
foreign key (`maestro_fk`) references MAESTRO(`maestro_id`),
foreign key (`alumno_fk`) references ALUMNO (`alumno_id`)
);

create table GRUPO (
`grupo_id` int not null auto_increment comment "llave primaria de la tabla grupo",
`archivo`  varchar (500)comment " archivos que tendra el grupo ",
    `tarea_fk`int not null,
    `alumno_fk` int not null, 
    `materia_fk`int not null,
    `maestro_fk` int not null,
    primary key (`grupo_id`),
    foreign key (`tarea_fk`) references TAREA (`tarea_id`),
    foreign key (`alumno_fk`) references ALUMNO (`alumno_id`),
    foreign key (`materia_fk`) references MATERIA (`materia_id`),
    foreign key (`maestro_fk`) references MAESTRO (`maestro_id`)
);

create table CHAT (
`chat_id` int not null auto_increment comment "llave primaria de la tabla chat",
`alumno_fk` int not null, 
`mensaje_fk` int not null, 
primary key (`chat_id`),
foreign key (`mensaje_fk`) references MENSAJE (`mensaje_id`),
foreign key (`alumno_fk`) references ALUMNO (`alumno_id`)
);

