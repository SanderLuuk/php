<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 12.01.2017
 * Time: 12:58
 */
//create and template object
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
require_once CLASSES_DIR.'template.php';
//and use it
//create an empty template object
$tmpl = new template();
//set upthe file name for template
$tmpl->file = 'main';
//control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';

?>