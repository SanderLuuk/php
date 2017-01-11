<?php

/**
 * Created by PhpStorm.
 * User: Kasutaja
 * Date: 11.01.2017
 * Time: 15:16
 */
require_once('text.php');
class ctext extends text
{//ctext begin
    //class variable
    var $color = false;
    //method
    //set color
    function setColor($s){
        $this->color = $c;
    }//set color
    //show color text - overrided text class function
    function show()
    {
        //if color is not set - use black and white output
        if($this->color ===false){
            parent::show(); // use text class show function
        }else{
            //if color is set - use color output
            echo '<font color ="'.$this->color.'">'.$this->str.'</font><br/>';
        }

    }//show

}//ctext end
?>