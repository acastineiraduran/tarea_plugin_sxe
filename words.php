<?php
/*
 * Plugin Name: Tarea Plugin SXE
 * Plugin URI: http://wordpress.org/plugins/tarea-plugin-damian/
 * Descripcion: Este plugin cambia las palabras malsonantes por eufemismos.
 * Autor: Angel Castineira
 * Version: 1.0
 * Autor URI: https://github.com/acastineiraduran
 */

/**
 * Cambia las palabras malsonantes del arreglo de <code>$soez</code> por palabras aptas
 * para el público del arreglo de <code>$eufemismo</code> .
 */
$soez = array("puta", "maricon", "gilipollas", "joder", "ostia");
$eufemismo = array("prostituta", "homosexual", "idiota", "diablos", "cuerpo de cristo");

function renym_wordpress_typo_fix( $text ) {
    global $soez, $eufemismo;
    return str_ireplace( $soez, $eufemismo, $text );
}

add_filter( 'the_content', 'renym_wordpress_typo_fix' );