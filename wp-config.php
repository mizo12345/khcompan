<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress2020' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' ]poHZyde5#j?1s&uXNhcdQ{6Vi>kE!fm,xQ d6Buhis[5g2a:kn|>yBhfX{,Bh0' );
define( 'SECURE_AUTH_KEY',  '-nX(SRSTln,|T}a%PeU_,Lb3F+wxA_t{F IHWXI=>KOWXJZuPFENKacy{IzrR8P8' );
define( 'LOGGED_IN_KEY',    'i0aZK=w4pUn^<<:/rg8q6g4?:^z]Vx A7lmNtxbk7gP=7+Z.QNAtKrjTfO=G9e;5' );
define( 'NONCE_KEY',        'R5QoU~jI[s21ajNN_@ywn-TR$gFq[+j71nDaCU%KWhxi@)2dfo[?^@Y:anG3;(~V' );
define( 'AUTH_SALT',        'zk^g^5l<nDw#9D18OLz%N9!/(~(MA@7-i[]%,-o`w_Q#XYlraZQQ`BdlT+^Kf#Cd' );
define( 'SECURE_AUTH_SALT', '(/o9C[!xeQA4QF+7j4/r1uJu6xytiY`!tx{kk}vE=DbW96yq@I8LFUT;gMVwT@/)' );
define( 'LOGGED_IN_SALT',   'J<VR4cjnVu/p?Q3Lrmo_Qr=}/;AZO~<xFrRjL}`6d!Me9AMk|vgdkO%sb>1b`u0c' );
define( 'NONCE_SALT',       'QMS* [3<R7h(X-CY@cK~:H[|=ofiT5s|qvK{dG$4lue#7E.gD0@#*Cb75Fdw{tQg' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
