<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'redlab' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'L2ajx6;YAVrAp(|[;1BAnB$Z1Ugt%7-Qt?B`Xr|@B:{`eNMuJA<dTxW^3a^X8_1$' );
define( 'SECURE_AUTH_KEY',  ';;7)_a6zD~k7bH alp%;=1d6ZF}Fbh}B0()ZiyV75Js8fU-eShxpoR&}v9G]vBDc' );
define( 'LOGGED_IN_KEY',    '**@YHQQAP9mfO5s}Cj`Fwcf(/q<]mP)[)oI)<Go@L9c.*<HQ]d8ZCS%o:<HQ^.SU' );
define( 'NONCE_KEY',        'Am9;u0c(XK<LlmVMlu~4hhNPPZACOUWl@Qt,nW=h!aJ%g|eF?ZRyA2D?:9Y,-)E+' );
define( 'AUTH_SALT',        'Lb!F8Zsharr%4N{Ji:6{a6f-8W}T&mrwlo5=D<GQR&>iK^;kbJaL e7Vl[,]bY( ' );
define( 'SECURE_AUTH_SALT', '))t3g~?Zv>+ez{[kTUTz(&CwQJrBdwwn]oD.Lnf><%!F:IP#808($PxjOlz{y}q?' );
define( 'LOGGED_IN_SALT',   '&8_=n4j3ja[yY<z*6p!&rtW`YO<L; ()r!wa#[s!v*@/Y~J~1{|9u#z|80}&}|ed' );
define( 'NONCE_SALT',       '/ab;(@4jfSTAFgM@4VR@.kaBQH$^fe2f^odoOZceZu/VcLn PHf3m[@3z0Dygke5' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_redlab';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
