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

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'lidermx');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'rU iJho3%?{- OD8Hf+tfAn7<P|H@K.|<eZtpN&@07KgZ,(UyH>63/y}`cgs)IZ?');
define('SECURE_AUTH_KEY', 'Y44oNi/V~[tZRHrt)T3`Dw=YIN5<TG@9v1Mvqrrn9]Vq%l|MY,N!V^Ra<p<)XTbu');
define('LOGGED_IN_KEY', '*U@f Iyz$d1?@$oO4`Be2?o(k#4@IPFn d/Zg~(N)+U$r{:so5,69.`8xx(tLl(4');
define('NONCE_KEY', 'Xv++?Ff;8Amznd2UAk:cph9Q.gLw~29g$<$Cvyc{31E)~6*8oI(tZ<u|i=ZJGktk');
define('AUTH_SALT', '_le#h:Y5$pmbJ?[MNsQEIca1QLj}`?M!nR^1fKxGURfYVBlua#fv>(@Wrn [Z[0O');
define('SECURE_AUTH_SALT', '*ha]r3PAL H2TD6,Q_;:^]F<l+wsn47~b}ZnofEW]2mW:?VVt~/Lf}J-bCaYCs)@');
define('LOGGED_IN_SALT', '6F1N~c:ndDQ<8&Lr<BT*+6P,|!V2I9D#Dj &8GROUFTjxegAK)5=JAAN$|mo *y;');
define('NONCE_SALT', '-sA -S;aH|G<DwB?i-[[f8*m|~#V7uzw2^c^l<g??`j>;jg|tx3nK)E{#zfU2PX-');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

