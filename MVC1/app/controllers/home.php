<?php
/**
 * Created by PhpStorm.
 * User: JohnMM2014
 * Date: 2/23/16
 * Time: 3:44 PM
 */

class Home extends Controller {
    public function index ($name = '', $otherName = '')
    {
        echo $name . '' . $otherName;
    }
    
}