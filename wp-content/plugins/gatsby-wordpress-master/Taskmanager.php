<?php
/**
 * Plugin Name: taskmanager
 * Description: Manage tasks
 * Author: Gabriel Nadon & Philippe Roux
 * Version: 0.1
 */

require  __DIR__ . '/vendor/autoload.php';

use taskmanager\Tasks;
use taskmanager\Data\Datatable;
use taskmanager\Routes\RouteManager;

class taskmanager
{
    /**
     * taskmanager constructor.
     */
    public function __construct()
    {
        add_action("init", [$this, "Init"]);
        register_activation_hook(__FILE__,[$this,"InitData"]);
       
    }

    public function Init()
    {
        $assets_url = plugin_dir_url( __FILE__ );
        new Tasks();
        new RouteManager();
    }

    public function InitData(){
        new Datatable();
    }

}
new taskmanager();