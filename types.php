<?php 
declare(strict_types=1);    //strict_types nos obliga a especificar los tipos de datos que utilizaremos

/* Funciones que regresan valores */
function usuarioAutenticado(bool $autenticado) : ?string {  //despues de los : decimos que dato deseamos retornar; sin el signo ? hacemos que obligatoriamente sea un string, con ? el retorno es opcional; tambien podriamos usar void; podemos usar string|int para que podamos retornar o un valor u otro
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;
 ?>