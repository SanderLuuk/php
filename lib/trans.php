<?php
/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 06.02.2017
 * Time: 12:25
 */
function tr ($txt){
    static $trans = false; //static - jätb väärtuse meelde, kui funktsioon ei tööta - oang fail loetakse ainult esinmene kord

    // if silent lang
    if (LANG_ID == DEFAULT_LANG){
        return $txt;
    }
    // if not no then search for right lang file.
    if ($trans === false){
        $fn = LANG_DIR.'lang_'.LANG_ID.'.php';
        if(file_exists($fn) and is_file($fn) and is_readable($fn)){
            require_once ($fn);
            $trans = $_trans; // array from lang_en.php
        }
        else
        {
            $trans = array();
        }
    }
    if(isset($trans[$txt])){
        return $trans[$txt];

    }
    //if no answer then get default txt

    return $txt;
}
?>