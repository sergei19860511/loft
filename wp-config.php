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
define( 'DB_NAME', 'loftGame' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '?.Bv9Be,~fKeqJ@a/5{!{=`1DCpB?`L|{;F_:r|8qooRe^b?2sWX|KU{%7h?%U-,' );
define( 'SECURE_AUTH_KEY',  'hN/}#z0v@yaTkh#R*#&^j}6_:_H+s6I8&F&NC.~j:Bi+{3j6ccE9 #&A2]R`tR</' );
define( 'LOGGED_IN_KEY',    '[7Sk5{:#~jT<Lu1zxleCmHN=A*?(j?uv;kr8=#HzBcy<#T l2KEhKMBL(Bz% +u8' );
define( 'NONCE_KEY',        'j@3kX?d5c;Rz4A0KRFUkwh+M;f~eG%Hjj`/W_v2He gnpS4)JYgw3-(dX<Cv1Ntw' );
define( 'AUTH_SALT',        ',- Bwm_HER+@pqn9Sj&T/N3)`T|BGUy2[(y0lmIF0{I_h1zBL+.H>RPEu$C%&TSY' );
define( 'SECURE_AUTH_SALT', '<L+3 ag_*t14R%(>U~$YMa29[FN.JIHO&A9V;(*#VKn~EPSx4l;tOF+AYaWNUf86' );
define( 'LOGGED_IN_SALT',   'x^<!~9I`8;#0bYm0JT/D.5Z0SKM_m94n0<`<OT`)dSTtWWn2amj~L]lr!t2M4z_E' );
define( 'NONCE_SALT',       'utsPZ1 I;,1syUfCZI4CBK?&0<Er7{x#R6?A3Prghti@xc*hu ,}wQz,=XKo:3~w' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
