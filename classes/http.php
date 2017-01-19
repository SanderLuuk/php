<?php

/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 17.01.2017
 * Time: 12:49
 */
//useful function
function fixHtml($val){
    return htmlentities($val);

}//fix html
class http
{//http begin
    //class variables - klassi iseloomustavad omadused
    var $server = array(); //server data - serveri andmed
    var $vars = array(); // k6ik andmed mis l2bi http liiguvad - http data
    var $cookie = array(); // küpsiste andmed - cookie data
    //class methods - klassimeetodite defineerimine - vaja ära defineerida ( var'id)
    //construktori loomine
    //object creation and initializing by init() and initConst() method
    function __construct(){
        $this->init();
        $this->initConst();
    }//__init construct
    //initsialiseerime muutujad - initialize class variables
    function init(){
        $this->server = $_SERVER; //serveri reaalne väärtus .- server real data
        $this->cookie = $_COOKIE; // cookie real data
        $this->vars = array_merge($_GET, $_POST, $_FILES);// siin see failide, geti ja post massiivide kasutamine HTTP REAL DATA
    }//init
    //selleks et linkide hooldusega tegeleda on mul vaja konstante http://php.net/manual/en/reserved.variables.server.php
    //initsialiseerime konstandid mis meil on hiljem vaja ö- initialize class constants
    function initConst(){
        $vars = array('REMOTE_ADDR', 'PHP_SELF','SCRIPT_NAME', 'HTTP_HOST'); // firstones we need for testingself and addr
        foreach($vars as $var){ // vaatan konstandi kaupa kas on defineeritud konstantid
            if(!defined($var) and isset($this->server[$var])){
                define($var, $this->server[$var]);//selleks et defineerida ytlen selle nime ja mis on konstatniereaalne v22rtus ehk serveri oma v22rtus
            }
        }
    }//initCcnst
    //set up data for http object - pairs element_name => element value
    function set($name, $val)
    {
        //et saaks rakenduse seest poolt teha nt nii et kasutaja on anna ja tund on php kasutamine
        //var koosneb kahest paarist .. elemendi nimi ja elemendi v22rtus
             $this->vars[$name]= $val;
        // if element with such name is not exists
    }// end set function
    function get($name)
    {
        //et saaks rakenduse seest poolt teha nt nii et kasutaja on anna ja tund on php kasutamine
        //var koosneb kahest paarist .. elemendi nimi ja elemendi v22rtus
        if(isset($this->vars[$name])){
            if($fix){
                return fixHtml($this->vars[$name]);
            }
            return $this->vars[$name];
        }
        // if element with such name is not exists
        return false;
    }// get
}// http end