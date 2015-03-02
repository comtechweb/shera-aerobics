<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

if ($_SERVER["SERVER_NAME"] == "localhost") {
    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'http://localhost/shera_aerobics/');
	defined('DOC_ROOT') ? null : define('DOC_ROOT', 'D:/webroot/shera_aerobics/');
} else {
    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'http://sheraaerobics.com/');
    defined('DOC_ROOT') ? null : define('DOC_ROOT', DS . 'home' . DS . 'sheraaer' . DS . 'public_html' . DS);
}

defined('EMAIL') ? null : define('EMAIL', 'manjula@comtechlanka.com');
defined('NOEMAIL') ? null : define('NOEMAIL', 'manjula@comtechlanka.com');
defined('SITENAME') ? null : define('SITENAME', 'Shera Aerobics');
defined('BCCMAIL') ? null : define('BCCMAIL', 'manjula@comtechlanka.com');
defined('BCCNAME') ? null : define('BCCNAME', 'Comtech Web Solutions');

/*//files
$pages = array(
	"home" => SITE_ROOT . "",
	"about" => SITE_ROOT . "about.php"
);

$pages = array(

	"home" => array(
		'root' => SITE_ROOT . "",
		'title' => "Home", 
		'dec' => "Home Page", 
		'keywds' => "Home, Keywords"
	),

	"about" => array(
		'root' => SITE_ROOT . "about.php", 
		'title' => "About", 
		'dec' => "About Page", 
		'keywds' => "About, Keywords"
	)

);
*/

?>
