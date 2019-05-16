<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bussines' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NdaY<WI_%*H97S>Ne!eU);l5KgZhWtdEqVR3.rP|L!xND%O%D!Gx!jjq}h_8|] h' );
define( 'SECURE_AUTH_KEY',  'oZPx3g$WA%Or%fD7%Kq d$-32>v|,Md8JdpMR[m6lc7?dH%MRg~}jJ%&{!1zdfZk' );
define( 'LOGGED_IN_KEY',    '?ZlJ!o3&W1 sqB=;%<]w(^}TtI}83rbZZDgAV^vdFyoL[/~:G6x;w@:Iv_NZI9Rc' );
define( 'NONCE_KEY',        'WbB)V*~)kK0y1Z#]~(_*yK)[x`JhD>S;I:[zV,Ljp$!u#bpE%Gp1w 4.lKw)ks:a' );
define( 'AUTH_SALT',        'JbI]b_uYm.=d(trGIcK/ww.O`gP6MQVVD-*Tj&X~GZ;e!RYS):aps$?VIM1ML]Q1' );
define( 'SECURE_AUTH_SALT', 'o$G4]nCzV!PW-+ hCf81efO=} XBbZMz5AXcD{rg{BVbFi]V,v/30|l6GXF;j01!' );
define( 'LOGGED_IN_SALT',   'n6G-%uH}$@@g9%oE] k:oG!uf]lt4*[BX<XnL.E];cRJ29et(6/AB}.G5?3~+Gg+' );
define( 'NONCE_SALT',       'iUA/44Q%+e,k.uFD6l<%:.NupyU2qn9Cx~H]sc8SNd~s%}I7vrsjAU&3z,Xoo^pY' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
