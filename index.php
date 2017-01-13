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
$tmpl = new template('main');
//add pairs of template element names and real values
$tmpl->set('Menu', 'Minu Menüü');
$tmpl->set('Nav_bar', 'Minu navigatsioon');
$tmpl->set('Lang_bar', 'Minu keeleriba');
$tmpl->set('Content', 'Minu sisu');
//set upthe file name for template
//control the content of template object
echo '<pre>';
print_r($tmpl);
echo '</pre>';

echo $tmpl->parse();
?>