<?php

/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 01/09/2016
 * Time: 11:18
 */

class Model {

    public function getlogin()
    {
        // here goes some hardcoded values to simulate the database
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

            if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
                return 'login';
            }
            else{
                return 'invalid user';
            }
        }
    }

}