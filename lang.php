<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 06.02.2017
 * Time: 10:30
 */
//defineerime eraldaja template abil
$sep = new Template('lang.sep');
$sep = $sep->parse();
$count = 0;
// all languages are in conf.php file  in array - et =>nimi

foreach($siteLangs as $lang_id => $lang_name)
{
    // separating language

    $count++;
    //if active language then active tmpl
    if ($lang_id == LANG_ID) {
        $item = new Template ('lang.active');
    } //7else tmpl
    else {
        $item = new Template('lang.item');
    }

    //need to make a select tool for choosing a language
    $link = $http->getLink(array('lang_id' => $lang_id), array('act', 'page_id'), array('lang_id'));
    $item->set('link', $link);
    $item->set('name', $lang_name);
    $tmpl->add('lang_bar', $item->parse());

    //adding a septarator for language separation, after last language we wont use separator
    if($count < count($siteLangs)){
        $tmpl->add('lang_bar', $sep);
    }
}
