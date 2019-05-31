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
define( 'AUTH_KEY',         'oFc~_6Qr!~ppD9/;Bo,bIjT?Pmis> #V;/mSmG8a!aPRB8CmmP_TXC=p9`6*;%s{' );
define( 'SECURE_AUTH_KEY',  'az4|aDa)G/SarVfkdliF c*hdm]7B@</Dz0$hF|*DNXylNMGg}*71XO$]vhRlit*' );
define( 'LOGGED_IN_KEY',    ']H!VFAi7F4P} k,(t8bGjM]k:rd6MQR8VqWoY=y04%xF6^7<V+*EjV|n#)$?)60H' );
define( 'NONCE_KEY',        '@O[5&S967pxL)+xf*k)?kU~ ih;I U5rD7tqb/A#{&wZJ%5-$uLlG4#1RF&[7cw+' );
define( 'AUTH_SALT',        '+P7RM(neuPkJ94{>#}dcbHSHofDpnSHek=s^e_4_*feD,+}2$l6nP3Q42Kc]GcJL' );
define( 'SECURE_AUTH_SALT', 'I:drtF|i/Q>=a)mx|1S!+^ 8_JH]U1a%~uZ#sBF1wqAEA7?@ZMo@hJ6JMrid][uo' );
define( 'LOGGED_IN_SALT',   'gx{%GB)k+92.<_?>7|S=GH5~g%y:^L:s5T{Asmu:}#NXNqf&Z%a&Ej{hP%&TwLH:' );
define( 'NONCE_SALT',       'S&-_U)=#=!UKi^ga@uq.eZA&SWwL^OMU`;E?Yu;i!0 ,$<FyplP1{vwi*92ci<}|' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
