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
define( 'DB_NAME', 'ibn-website' );

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
define( 'AUTH_KEY',         '>,JE5lbV)?3PQk;g46goK[>u9:`syO]H_pUJoVgX#G_Jrt09(./8SK|~tF_uH(PJ' );
define( 'SECURE_AUTH_KEY',  'uh(:EMIcp))j_q|&IpL<U!E&+iAB(84Ja#:#j5BZ?/jn[{q=*RW)q1Kp=b?]eO2k' );
define( 'LOGGED_IN_KEY',    'r^Ule254|<Iag}yTZ[5E12-||45G/^NaN&Akd1&:H{@kSS+z7VmR?dgeq<191Fc7' );
define( 'NONCE_KEY',        'ie2YxT=,-FG:MO1@k5nU=T!}QHO!ghdDOa&!_dJ+Jn<a~*aJZ?.phw-PYl6KG4.`' );
define( 'AUTH_SALT',        '{sSp`#QLF@f9]8-|CSe3m_%B@eTK}/A;~}AQNb4WZ./[vCeG&{/nSuE&V,7FO^I^' );
define( 'SECURE_AUTH_SALT', ' :7.bMS4i-$/4[){HPc@KA n:1D@yj?O6 lq[vg_ T(aaQf&k?FDT<g##~?j1*+i' );
define( 'LOGGED_IN_SALT',   'EI/~F& E<?i@;p;e(+KhRyY w+ec]3L^plD^;6?`w+4VHvPvD2~6fw`s914ccbnc' );
define( 'NONCE_SALT',       'TBGh1Hrt4XM_X3$Xj$>9!z46g$,gp0kbbZr:I}DxlQrQ7Ub53K=V0iC)6Qo<w;89' );

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
