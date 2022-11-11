use teams_db;

DELIMITER //
create procedure update_perfil(
in sp_user_id int,
in sp_nombre varchar (100),
in sp_apellidos varchar (100),
in sp_ussername_alias  varchar (30),
in sp_email varchar (200) ,
in sp_fnac varchar(40),
in sp_telefono varchar(20) 
)begin
	update usuario set nombres = sp_nombre,apellidos=sp_apellidos, ussername_alias=sp_ussername_alias,
    email=sp_email,fecha_nacimiento= sp_fnac,telefono=sp_telefono,
    last_update_date=sysdate(), last_update_by=sp_user_id where user_id =sp_user_id;
end //
DELIMITER ;update_perfil


DELIMITER //
create procedure modificar_mensaje(
in sp_mensaje_id int,
in sp_texto varchar (5000),
in sp_creado_por_n int,
in sp_ultima_fech_actu datetime,
in sp_foto varchar(200)
)begin
	update noticias set titulo = sp_titulo,descripcion=sp_descpricion, texto=sp_texto,
    pais=sp_pais, ciudad=sp_ciudad, colonia= sp_colonia,
    categoria=sp_categoria, fecha_sucedieron_eventos=sp_fecha, firma=sp_Firma,palabras_clave=sp_palabras_clave,
    ultima_actualizacion_ususario=sp_creado_por_n, ultima_fech_actu=sysdate(),foto_principal=sp_foto where noticia_id =sp_noticia_id;
end //
DELIMITER ;modificar_noticia

DELIMITER //
create procedure modificar_seccion(
sp_cat int,
sp_nombre varchar (100),
sp_color  VARCHAR(100),
sp_hexa  VARCHAR(30),
sp_usser int
)begin
	update categorias set nombre_categoria = sp_nombre, color=sp_color, 
    color_hexa=sp_hexa,last_update_date=sysdate(),last_update_by=sp_usser where id_categoi = sp_cat;
end //
DELIMITER ;modificar_seccion






