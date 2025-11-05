<?php

/**
 * 
 * Archivo de configuración llamado config.php
 * 
 */


// ini_set — Establece el valor de una directiva de configuración, 
//en este caso queremos que muestre los errores que tenemos mientras desarrollamos
ini_set('display_errors', '1');

//Establece cuáles errores de PHP son notificados
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);

//Establece la zona horaria predeterminada usada por todas las funciones de fecha/hora en un script 
date_default_timezone_set('America/Argentina/Buenos_Aires');

//Establece la información del localismo
//LC_ALL: Es una constante que especifica la categoría de las funciones afectadas por la configuración regional, en este caso toma en cuanta todas las constantes.
//es_ES:  Los primeros 2 caracteres identifican al idioma, los 2 últimos al país.
setlocale(LC_ALL, "es_ES");
