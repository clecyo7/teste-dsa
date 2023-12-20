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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_dsa' );

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
define( 'AUTH_KEY',         'TpBp~_ =09jA[4oO:~zYeL0e9DYR-a)?)ppqz|?,sDUD-O]X39C2j^):/4x,vNnP' );
define( 'SECURE_AUTH_KEY',  '&,q3/A /H @13y8HM;oSya/~`v4tH$JFXQDYrCPT{LC a#!^p0yXsY282OS4A%-<' );
define( 'LOGGED_IN_KEY',    'j;hQR5%@@m+q?rOD#3!d}I(~nS:mev[*+~j)9?{Gm^V=.[CAz7]HTbNz#QAHZB;r' );
define( 'NONCE_KEY',        '-Pw/or#&9DD[#s),)#3!2-ip(GvruyBj}bE}7{?q=diA<Eb?Eiio0:SCO<jsp>4W' );
define( 'AUTH_SALT',        '0$3bUy:,yh5jF6]Pl2YyvEWya[ZJIC94qr|s! 2w02e7iuD_~`Wn,dlQvHUA_buc' );
define( 'SECURE_AUTH_SALT', 'D6Q5$f`.b/A+XV`8i&=sMW_fuXzrl#,1N:p.1[~lYaJvF~_C<.]&&(dAJU(-q>Jz' );
define( 'LOGGED_IN_SALT',   'c8f;zZW8zp+ O?YC7`-XLPmCs%XTZwtRFJ#&8(QG>1vW>7v7~rr9Dp20MgyDghKl' );
define( 'NONCE_SALT',       ']436h5Ovr{~zZH_9#Ro,)G+.szJN8<EZ,S}sQ.4n_RsJ>=]3Mm@sa9Bp{`V+#r:$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
