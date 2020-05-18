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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'OGxQJfH%)E.oaCE=v,JE)WUF]h.YfA3G6so)3sQn<L7N,CYE`4EVY4-$>j)*4~ ~' );
define( 'SECURE_AUTH_KEY',  '_V3N4H~(}%4$n{zx5%T`G=#n2yOf#0S>B4}u#DmZi+I|;&_ulA]d7O(tVPjgCLo*' );
define( 'LOGGED_IN_KEY',    'eowPP%N/a=Og txB,JKwMK7px.*<.yQy8;&RMhqU~%w= ap6!1:AWN!%Ea^uuR|8' );
define( 'NONCE_KEY',        '_xWMC: 8Y!XJH K#j:r-=Q**nK!s;E}8jv`&qia[k$sxm$ix8kdf6Fr6?T1M lX~' );
define( 'AUTH_SALT',        'UFE>ertn[S}kYLu_h6P4,05*SF[lxqAi?[JkkQ$,R7DgX5VO_;X+A$FjfP@nMB)D' );
define( 'SECURE_AUTH_SALT', ')YsJ9:gN[:CoD;LCF#1Mvf?`]g_~r=+}}pN(LwM]U<y3!]D56~eDm(S;Y}/z]+jG' );
define( 'LOGGED_IN_SALT',   'onC@9D56I*!]zXFpD>2 Mhe}Vdg$Oga`I@lP:x/>wT,d1wlLD@9#K9z^]sf`lVk-' );
define( 'NONCE_SALT',       '{,>+{CPGVU+U0:?YNU?-z8/__hAjGvjPXIcPiLp,P[P$O=A>$h4z^/(W;6B`ur}k' );

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
