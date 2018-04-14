<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
/** ambiar WordPress URL */ 
define('WP_HOME','https://supply-store-wordpress-roque363.c9users.io/');
define('WP_SITEURL','https://supply-store-wordpress-roque363.c9users.io/');

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'testwordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', substr(getenv('C9_USER'), 0, 16));

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', getenv('IP'));

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'wOs^|:HU9U.U<@I0|t`T]3{iw~cP:T@j7foCQ^C)G&T48RQbY%ymjcm#!6*Ly7qn');
define('SECURE_AUTH_KEY', 'n2_~g/Q4%=Ktzl946U2*snT8i=B:Xq=:4U~/OOBB^aoJ`XO> F>5=}0:%5%ry)Zb');
define('LOGGED_IN_KEY', 'H%sq-0(ee8d*/Qz -E!zWom@z VjFn:v?0b?3z>)T#NOe$$HqL^?zrhCF+^/:}F$');
define('NONCE_KEY', '<H7*3H;hmJv/cV!&jJU!R`K5&$6!T~f=5GJNQ8:9F80DkkHlpU)OeQ^E63Gp78k]');
define('AUTH_SALT', ';/{/ORKMtvbKzg#;<3J$e$Jr)j!.p2h$/ WW{@z2V5;DmhXb})J41^;tg.Ej@BN?');
define('SECURE_AUTH_SALT', 'bIY2mm@OZu[2H%z7f@P#e00>yE{O/(FvL{K.I]Ae0O%(N]BHMZVp~txUw!%uA9k7');
define('LOGGED_IN_SALT', 'EeA6mmtWm01r9BD W{>NliIbw:1!3pd8*~^`kd!=z0TO^`?XKL#FnOX^ohE>,i;A');
define('NONCE_SALT', 'cJHXx{G.cDLgUzW.Ts!uw_Txt<f3E5S{kqPW&|xX6]hN3L+H9+g 7MtzxPk4znV1');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wps77s_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

