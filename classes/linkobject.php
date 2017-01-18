<?php

/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 18.01.2017
 * Time: 8:48
 */
//useful function for this class
function fixUrl($val){
    return urlencode($val);
}//fix url
// only for testing
//import http class
require_once 'http.php';
//only for testing
class linkobject extends http
{//class begin
    //class variables
    var $baseUrl = false; //base url
    var $protocol = 'http://'; //prtocpö for url - http
    var $delim = '&amp'; //&html tag
    var $eq = '='; // = for url element pair element_name = element value
    //class methods
    //construct
    //create base url: http//XXX.XXX.XXXX.XXXX/path_to_file.php
    function __construct(){
        parent::__construct();
        $this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }//construct
    //create http data pairs and merge them
    //merge is realized by &$link
    function addToLink($link,$name, $val){
        if($link != ''){
            $link .=$this->delim; //    $link = $link.$this->delim;
        }
        //create pair: element_name = element_value
        $link = $link.fixUrl($name).$this->eq.fixUrl($val);
        echo $link;
    }//addToLink
}//class end