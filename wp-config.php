<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y|j $BZH T*a`)^i]dy$yh:)x1B6w`kUXf0M:^A J#<0b3E@ZWx(r4YNmbRGOXY(' );
define( 'SECURE_AUTH_KEY',  'j2^4F/t3IM6[o&oMp6N0)qY[OeT7tHb8^{JHzxJ]$0&F2a(!v*(o=`E(IGg@(K=,' );
define( 'LOGGED_IN_KEY',    '7!`xv.H1tY7pHF2r2U#PQOA@/vLh)$2oOnUE#|%_9:X^zN7:u6R^`6y_{xi}ArtP' );
define( 'NONCE_KEY',        'VK`[oj%a@RdAeV+7#i@:?`F$D-#/#l=?(1pyK>b 1OXm:d^fb;mM<9C6$XQE84Yr' );
define( 'AUTH_SALT',        '7&cN-EZa@g?/jKPBpSOF8Em3Ftp._S_5 my9c~)[c~`[2IU4M[vdgTy~_g #n{p?' );
define( 'SECURE_AUTH_SALT', 'a6Xs9%Xyo^f;gf3QW#R;b5~KdbsPtBdf>}z_nN07?vX3u&cXo:JyI~toxr}Fp m7' );
define( 'LOGGED_IN_SALT',   'deo.@% KidBG!m(@elyaA$6F7~4_&F{_|;Cn9(E:!lR[)m,#PHQEtZl~%&8zJqW2' );
define( 'NONCE_SALT',       'AjZm/Z)p~uo,%z^%.-fO3o<oG>y+7Em1ud ~@h#sL%?|?Qt06jGZ{?klA2y8U)6}' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
