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
define('DB_NAME', 'wordpress_test2');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wK<vU}%W#T@q[2~x7jg2r59kk%^&s=LxY]IvN,ZdFa46|$u8;y6;HB,7,J[tv6{g');
define('SECURE_AUTH_KEY',  '9V<xbZ*b<2wcezY9-(#gp`~qT*63lp9e=j=@@SklnS?nssh.[_|djTZoyEKCd={>');
define('LOGGED_IN_KEY',    'SXrf&=nr>XVON7~7N!he+o<C`Xm;}AT(??2l@loC)6LR,nYC+})F?y0|4*cfIUoM');
define('NONCE_KEY',        '=CP3*~(_P!*P!tuiK^43r#Y!;MD^|s~Eg;S+oFtcg->Noo{V:3Hh4D6lwpv?N<#q');
define('AUTH_SALT',        ',@xrX1Xwf^LLKLLczb ~?o8P;QqQ^pao+G4Xp.rsmK=5l}hk8U-`l^wBS6.)/{cT');
define('SECURE_AUTH_SALT', 'D1h@4]`)j-?Q}&2j}}96V> %Gk:w<72=6&DkW^;6PJuZq[K)N;+JAalmm7a0P_&4');
define('LOGGED_IN_SALT',   'q^[$r9g>hS?<V?M(vw/ SGNVW<]>kw3u<S=lHQ~yK^LV(?]E9A^:uz6<[6j=R,YR');
define('NONCE_SALT',       'ra*4U4k/#{gTz4nV>KBR~B,6GtsFkzwK/]6iz|cJ)p8yMRNK6c?V1),`Hz#ySe<E');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
