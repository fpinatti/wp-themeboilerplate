<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'edc-website' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sy x^Tw_Q.ZLeR_Uw5PKWPfz)jf_!3RN?-R|vAG4cp_pLOh.J- p&( VRU#i5g>5' );
define( 'SECURE_AUTH_KEY',  '&xZEUlAUuQOlqa(B/n]txwY73cmT9&<|k@bG)m`@/.UvvK,`~ss6b,JAhj+QC<7G' );
define( 'LOGGED_IN_KEY',    '=nz/!N>P-6mwB)=bQ;r{UgE{eN|a&nsU.y-(yc!Eu~A3lHf 1FKWS6i#+LPuJ(eK' );
define( 'NONCE_KEY',        ' D&oNi8k~XH6I7CE]ojVEPG(>Y1q?F*C=e(*$:FW}Kcs nb+=_FL46O>TmQ~uq>j' );
define( 'AUTH_SALT',        '>b+YNC6i^wXd6Op}yc7}8LQ1LP|>tb4RY88{0WDB;D4D9Mja39{V7zponBRIXA6m' );
define( 'SECURE_AUTH_SALT', '/XO)RG3{!5]s(.n k:684BAP/>).@=!a-FXUhHpD({]emDTYzt5+lZa%FSYrejx0' );
define( 'LOGGED_IN_SALT',   'aPOWnb?M9{6?tiL2%Jn#-ra+r<D+<SGJykV1Ns)fMtJS]|ZK,RH/Zq%MX!YU2A76' );
define( 'NONCE_SALT',       '4}#n^Z6/a/)s#qt*_xLI~O}QlYl+OZy@!U-VJ,.H|cU&0BK ~9<U,0|NO&X_j8xm' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('WP_AUTO_UPDATE_CORE', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
