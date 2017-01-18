<?php

/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 18.01.2017
 * Time: 8:48
 */
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
    //onstruct
    //create base url: http//XXX.XXX.XXXX.XXXX/path_to_file.php
    function construct(){
        parent::__construct();
        $this->baseURL = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    }//construct
}//class end