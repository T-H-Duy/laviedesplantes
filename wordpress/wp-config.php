<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'laviedesplantes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TNUs#^:4R|6{sg7q=FI<JIZVX|g3sZhV&s.%-F7/(}BTvF-yvEfWD4?E&taHNG% ' );
define( 'SECURE_AUTH_KEY',  'SD)u93b5uV{uyH)M[Os:!/<#gdIk`Fdmbq]H:OW>bQTxKgW$a*Q^9.h&d[ shd)m' );
define( 'LOGGED_IN_KEY',    'YRm8MXwAmDLIyiU=|r7>(4[0kL5+%mpZ-nP!9l*g7h4=D]!5Z+VOW:h[j=#%TY]L' );
define( 'NONCE_KEY',        '*I>2 <w%,D3PK(=LziVbo^.h^LvlAk-CvYv%KWq@(*h$$IB^nZ*Q37XqFAd8u?yy' );
define( 'AUTH_SALT',        'O+q5S}D0vC.7pO@:Tj#M+9Usb)w((1g/8q}1A<UlVTk&MO{qd>#7Xzc>.fQV:fcV' );
define( 'SECURE_AUTH_SALT', '0^}qQ_2`k7@Fv9lBy]yfeGUy)46Z<wWJ5U?Bh5K9J3>-~z~Z<$@RDsEaQc+SGjS4' );
define( 'LOGGED_IN_SALT',   '.$4Nb/-QUd-7)#xLxb%1$X7y)Gt;k&d=SoZ*$JT%Sxf.J$E# 2_c<@o9R_}uHS@u' );
define( 'NONCE_SALT',       'Cc? `pidv7fG[Q%%F*0gjEW/so6msZDWFm=P/RQ8_e;O<yeT9.5o4K 0tB(`SG&a' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'lvp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
