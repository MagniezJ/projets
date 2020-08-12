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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1;XMfd+]2/2fH`d7n3?.GK5Oex5:a T]2<EhxGH}n*f>6H7H/aU;3%QQeT7nJj2-' );
define( 'SECURE_AUTH_KEY',  'n#nx#K$ynLlA5{|L,^Vk5nOU$x);c4`V:;S+Y>/@(:<@Ji~v%ti{~^b)Ua!g:0$R' );
define( 'LOGGED_IN_KEY',    ':<a<U8L)1*Rwq~W74D(|![X.ujUjyd=K_ei]m#%#(2eXw]`44^/k.xr-UB1611f ' );
define( 'NONCE_KEY',        '}p1c]r.]<o{9vk%4Pd&ft!jz~[BAUIB+_!fFQAP:xao!lA+z btc8nY.hP|0V6#U' );
define( 'AUTH_SALT',        '(~xTdV34s3-b.f`G3y-TEP5Q@Z>(i.0JqoE 0Ci*[_*&bluP]tnxve0!#KMVB(N#' );
define( 'SECURE_AUTH_SALT', 'Iie0b&(*pHj1K$0:Hw,bglH`iaV! QHvM.`3:$tye(rm`L.Fcx:.tfoJcLGGAk-F' );
define( 'LOGGED_IN_SALT',   ';T!JOd4x@I,,J]g$ue_mto71*a*aR_1T3yY4DAw0PTh8TNdO+IY}.4.:czR_S R`' );
define( 'NONCE_SALT',       '0W!Y>Oo<>tfUTK:O<|swe/|l[e]9./55w)L9C_XS9Z&)==n,c:E0hE/FrDgoET]z' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
