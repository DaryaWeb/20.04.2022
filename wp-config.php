<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0_+26m|xnHP5gIk;_778AB&cXWKW9Ckv:.~Xz~i8w<?dr^1t)TY/D6J_sa<MX]|g' );
define( 'SECURE_AUTH_KEY',  'JF~g,G.9H&FSNEw:F}2sZ2WO67CM)%v>&av[u:wh5Cd0~$,CDgLcvQuQytMMm2Q}' );
define( 'LOGGED_IN_KEY',    '1wy]cb1X:`g8J39(R;H67v*Md6JVag|#^=uKusQhlmO}#)D~EXepNl5DmFydZ75e' );
define( 'NONCE_KEY',        'gA;lT=y$JBE8vBgnV>vC}CC*ZNxt|2*t)7<^k@4ZyCD+y-Zq>U8TEw@~(z ;[k:O' );
define( 'AUTH_SALT',        'R d*o/04TG}16$j}UtK&94Y*$7;T/?NBUEytY]sBb~bc%<DLRnaJH[](c)ot3T2E' );
define( 'SECURE_AUTH_SALT', ' (#ENBHkOjbL8&k3>V+l2w<n4Uw%=S*yCRwgL]QGd?b5~_??n;r3H;tLNiq*8*.f' );
define( 'LOGGED_IN_SALT',   '+PHeJ0qCqA,`cy!A5C^z5!zubkAH@?+?Lr(k4v, B1{$IT.K_(A6qb7nvGQ0`-$J' );
define( 'NONCE_SALT',       '*V^Z  %hkgI~I6WF>3vwuzxD&51J:,8JvgoS([ct5{~>!*R`[u+?.8)h.I6OzAf9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'l417_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
