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
define('DB_NAME', 'test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', '');

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
define('AUTH_KEY', '08{0wJk@#KwWWM31dUhc3p[=ddn+EG.l,V&f*6kvn@YrsZNd?$m]akF=zd0kX*+)');
define('SECURE_AUTH_KEY', 'pK n-p+6e[r2AmJHtu`NAQ?`K,nOq^feVPCf3Zd@/XQ7)C$  Vi(Mx#2[AYzhZo-');
define('LOGGED_IN_KEY', 'c(CgCmbM1$:q1dPQg?m;xVp$$Io|56QJiS=)NAJ5`nu!twBap&!NEY6@1l_VFLP*');
define('NONCE_KEY', '/ZUvx^ m`{4S+9M6LoS/ TL]j{t+AJ}K.d*(u|WM;;b;o8LVBf(f]FFq;goTP+W)');
define('AUTH_SALT', '$Ia;fqbo:C w[AQRHBX}oa62p~f|6 ;uhCHew]Z{iHyIxYH0=VjbV QQ38:jTaZ ');
define('SECURE_AUTH_SALT', ',=:6bY,*S=%Cf5jS=<PN-ovrF,8+$}}RhqLTx(dh>)eaOVotmOx**e0[0Q12O}d0');
define('LOGGED_IN_SALT', '%QmfjWI7[FK.SbR&#<TF7@ N6Nxx[^vt}_o=,,8A{;}SQ&`U%qSau393M bRc.v%');
define('NONCE_SALT', '7#0yHK{khqwPp;S]4P/>;=I~gtbYiKAdke>fCkxrE.;Qk^9t`8!5|$Wg8hzm|Cp.');

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

