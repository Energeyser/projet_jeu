<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b (>-(|P%t%v&Qv8QaW[(Q3&|gydKhD%LDWMs53L_H^~ &j[N^M/:XY>K+ L)uK+');
define('SECURE_AUTH_KEY',  '}]/VbY>e%*8ensp8+(bE0>H;ksNhxkn`gQ>wh)/ %z+km_JRM}eAbsNH0p-u`gX_');
define('LOGGED_IN_KEY',    'jt>GB)$#6btJ|XNf-J)5@-^o&Qs+[d%|+Recq@j4+<*b(oRGGg6uA{$Xxb>CW9va');
define('NONCE_KEY',        '`@IU1+ie7!jpRIP&(iMOpAD-GZq)@I[6e-hsO9&S`NE`)x2s}j>{0| IUH^,*!7.');
define('AUTH_SALT',        'izk8=5`5w?s9`c.01$)v<<vd,tBoU1B-HOVp|klX9Rt7Hf5Kko6c0Ia%{|v[3+7B');
define('SECURE_AUTH_SALT', 'nTCq7gba9dJk*aL:)]s<umgX(on8AR@z?Zu3ahRqC+|psaSpRV+|i-te*)+ncEO&');
define('LOGGED_IN_SALT',   'nHjJi3AD-hPn?3SM>dRO|Lsw{d^H7&_+l`rkT-*Z/f1!(:CQ1hCVGhOk[Q7_#HtS');
define('NONCE_SALT',       '^=i2S5,Js+@:W5)x3?4DS]fI 973$<+Lyx6mOg(-1?;WjlKu.0OS -bSybH}f9+?');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
