<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 12.01.2017
 * Time: 12:58
 */
//import comnfiguration
require_once 'conf.php';
//import act description
require_once 'act.php';
//create and template object
// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');

require_once(BASE_DIR.'lang.php');

// add pairs of temlate element names and real values
$tmpl->set('style', STYLE_DIR.'main'.'.css');
$tmpl->set('title', 'title');
// menu testing
// import menu file
require_once 'menu.php';
$tmpl->set('menu', $menu->parse());

//importing act file

require_once 'act.php';

// end of menu
$tmpl->set('Nav_bar', 'Minu navigatsioon');
$tmpl->set('Lang_bar', 'Minu keeleriba');
$tmpl->set('Nav_bar', $sess->user_data['username']);
$tmpl->set('lang_bar',LANG_ID);
//$tmpl->set('content', 'minu sisu');
// allow to use default act
//$tmpl->set('content', $http->get('content'));
// output template content set up with real values
echo $tmpl->parse();
// database object test output
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);
$sql = 'SELECT NOW()';
$res = $db->getArray($sql);

// control query log output
$db->showHistory();
//control session output
echo '<pre>';
print_r($sess);
echo '</pre>';

$sess->clearSessions();
//Session flush id
$sess->flush();
?>