<?php

/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 26.01.2017
 * Time: 14:35
 */
class session
{//clas begin
    //class variables
    var $sid = false; // session id
    var $vars = false;
    var $http = false;
    var $db = false;
    var $anonymous = true;
    var $timeout = 1800;

    //class methods
    //constructor
    function __construct(&$http, &$db){// & l2hevad t66le reaalselt tööle vastavalt märgitud asjad .. need korjatakse ab yles ja siin l2hevad k2ima.
        $this->http = &$http;
        $this->db = &$db;
        $this->sid = $http->get('sid');

    }//construct
}//class end
?>