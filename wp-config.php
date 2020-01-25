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
define( 'DB_NAME', 'knitting' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'dG@bk*]sQ(>lfscmx5&Ik@%PS}[A. V}otoDzR]3nvz7pMyMpyzQnR`Ojtl9@B(d' );
define( 'SECURE_AUTH_KEY',  'NW5:V=}:$^1k0/X^0t8] 7W!1fyEJln(F=!Rs3HHLR$2+o>RVz@kd2:x8o=+a~3Q' );
define( 'LOGGED_IN_KEY',    '(.L3vfq`K;|q}O$uCg$fDOom],V .6)IzXCyZ6r_.Fq-Rs.x={pUc=&RdJy@lUf5' );
define( 'NONCE_KEY',        'J+aaO$(JiwRXi:iPp F7z0<[Vc`$YDi%!`m)[+Y+MkeR|{w,/5j(S_slmD_e8@}j' );
define( 'AUTH_SALT',        'WR{A-`57px!x;DZV5l7fEY?WjV?4zY>vhXVu!FI.W)Jt$xRMS9_>5Il<Ffj8B.}5' );
define( 'SECURE_AUTH_SALT', 'B]k,|XpJNw38jP*,lLe$#n9nC 2V+D;`@YA0lr,GgFEMCT`[8RM}QY-p$amqZ|rN' );
define( 'LOGGED_IN_SALT',   'G,PmOP)gOy5EvVDE/QAqXh3wmkQCu7c$yB^wj-[X!nfue)6^tPGG(UCsq>s{ x^:' );
define( 'NONCE_SALT',       '<Z$W=dGm^gja>DL1 >/y>ih~:6#KD{gl`|wo0oxV0{AF1g?pPbgWtn,:FHrm/}0o' );

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
