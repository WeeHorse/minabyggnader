<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'wcms');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'mysql');

/** MySQL-server */
define('DB_HOST', '127.0.0.1');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y&W+e3lmy9tycq/.%Vrt~/-M&@n3pT~{)jQJPw;q18WC8WjL!+DYh;@A[%ycE%m{');
define('SECURE_AUTH_KEY',  'E<VLF=xy~)/;loHuliQ{]n(1q@gB1_fMS76,v88~fX}:Q+*]yOW4+Cs8c9<rn&DY');
define('LOGGED_IN_KEY',    '3[XaXgt|U1ureENL1>e<()#eb7FJnyT0P@90%dwoVJU{CGQQ[Sao*QCx?=RMv[(`');
define('NONCE_KEY',        '(X5Ojlz)Fh^/V*ZEIibV,WlRFPY[3(P%/PviN6rK2/Dm%~B`} R%)Y:C HI!UD*P');
define('AUTH_SALT',        'UBlt#NzI|Fy#+-[VOg|l,/f2pDp3}#WK{wPQ?n=i~N&8zgGL|<(F&9?;JhLX `8C');
define('SECURE_AUTH_SALT', '5GG@`o[+.s-T.}x4;ndY6U1~g&LyR&1.$uo [2/$[^>D=]uuIo=/LyhX!Wtbz>v+');
define('LOGGED_IN_SALT',   '|<W!^FokguM}*|U>^}:%NBfqp[<}YAodmkVlR!QUpA-/@_xll$f*U)Xifd_MC8+t');
define('NONCE_SALT',       'Nx)AC@NJ#JuxC:xS>:N&|3-YZ[nK^$q*h+4{}zopdZ^J_k4L6Fn=rh)Q )0Emx}-');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');