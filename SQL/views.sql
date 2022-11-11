use teams_bd;

create view ver_mensaje as 
select US.ussername_alias as Ussername, US.foto_perfil as Foto_Perfil, CN.mensaje_id as ID_mensaje, 
CN.id_usuario as ID_usuario, CN.id_noticia as ID_noticia, CN.mensaje as Mensaje, CN.creation_date as Fecha
from comentarios_MENSAJE as CN
inner join  usuario as US on US.user_id = CN.id_usuario
where CN.`active` = true;

select * from ver_mensaje;


create view ver_respuestas as
select RC.id_respuesta as ID_respuesta, RC.id_usuario as Usuario, RC.id_comentario_padre as Comentario, RC.texto as Respuesta, 
RC.creation_date as Fecha, 
US.ussername_alias as Ussername, US.foto_perfil as Foto_Perfil
from respuesta_comentarios as RC
inner join usuario as US on US.user_id = RC.id_usuario
where RC.`active` = true;

select * from ver_respuestas;


create view usuarios_suspendidos as
select SUS.id_usuario as ID, SUS.foto_perfil AS FOTO, SUS.ussername AS USS, SUS.Rol AS ROL, SUS.correo AS EM, 
SUS.fecha_eliminado AS DAT, SUS.status AS STAT, T.descripcion AS R
from baja_usuarios as SUS
inner join tipo_usuario as T on T.tipo_usuario_id = SUS.Rol;


