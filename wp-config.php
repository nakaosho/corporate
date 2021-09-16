<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'new_corporate' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U;H:cAJ)-)|Sf-vHXMsb[l-3~n4G+]tP@){FMh%/QMN#/+[+rw^6[#nC6cM)1kHK' );
define( 'SECURE_AUTH_KEY',  '%:1mSR8nSPLu#/5;[4Gjp<2QC3j,Fb#iwXVMS=nzs1W->^L [m#(QiWf=Wopz?2@' );
define( 'LOGGED_IN_KEY',    '<!A.sm_%vn`Oi[^! c?HwH4EKv^3i}Fk**Y5;8!Jv@d/Jv?k<q.Rf0f5 uUUlM#2' );
define( 'NONCE_KEY',        'doLfg(9Twepv/Q-gL[lwO1i#m*vhY`Kn dP#Hs4phP?RR3L^Rmp[>P-kMd+^ESb[' );
define( 'AUTH_SALT',        ' r(HOOG9)|R<84D o&[e-!RV5.k@[EBDEKn*=Gf4qt8g(-5:k,>hgo_M@:`*2v31' );
define( 'SECURE_AUTH_SALT', ' *X4,K.Dw9E(9^nCr`^o2RE5ZX/^5Z3_#${K0oikfXz0l2XW2${Us=AmXSJ{[^cm' );
define( 'LOGGED_IN_SALT',   '^cG)u]Wjf@/^XU7h;c$br),`sY;-D-0S##]:SXbiT/]q+~4qnHSLQoHqkaycl03S' );
define( 'NONCE_SALT',       '6WrJ;{84<9HhGj]G-H9l;T$k)S% -fy/o*@]ijN+XTc4T@VCs39,@3Ps0C#3Bz7[' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp63428e';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
