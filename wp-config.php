<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'iloveyou');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r+/?[>E(|sIH|a8]OPOpIWs8<+gbzwz]L,LgimJC%~`| }Vzn7G-4wAddr6XXLGZ');
define('SECURE_AUTH_KEY',  '_^C!:lPD9{~Oe$pQ!_]?XTWt]Usm_:uB+{43:ddLke-xjQDvA+bq =Ck~c+`573Q');
define('LOGGED_IN_KEY',    'z*Q>R4F{D|NFN+9.mXNzLIq=|-DDCzDuH:u/j$kkKK1u~?G)=%$di~1?*V[kxmLw');
define('NONCE_KEY',        'e$T?=+bzH#[0UR%iOf}6U,3sw*^(JH>1xJq79_-e@X:(bP=x~1%$G^eDt5P+ptZX');
define('AUTH_SALT',        '99 q.H;wP=SU#G1Hhz7-L.AA#youtyOhjz+pmCbF&1YlhlxC(dE64!ldm.fTKR_s');
define('SECURE_AUTH_SALT', 'U_;K:9ES]B7Qx)+?>L&{#PG?}>xd=k2`-[z^8{E#2+x$mjm:=uPHTm| [+mePsE=');
define('LOGGED_IN_SALT',   'BfW^5g-AW9O~]4+%!?Imay&u4MO(p|jF`@[Paz,zxB#[ht/5fL!+d1O`b*a:O:+L');
define('NONCE_SALT',       'a_di|PtWOdO2PwUe*(UTLl7.joGX8G[@ucMw J&X!Un!J]+IzB,xAHYh-)*;SF:b');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
