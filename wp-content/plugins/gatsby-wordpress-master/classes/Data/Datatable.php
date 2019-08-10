<?php


namespace taskmanager\Data;


class Datatable
{
    public function __construct()
    {
        $this->datatable_init();
    }

    /**
     * init taskmanager plugin table
     */

    public function datatable_init()
    {
        global $wpdb;
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        $sql = "CREATE TABLE IF NOT EXISTS `" . $wpdb->prefix . "taskmanager`(
            ID bigint(20) NOT NULL auto_increment,
            post_title varchar(255),
            post_desc varchar(255) default NULL,
            user_id bigint(20),
            status_id varchar(255),
            PRIMARY KEY  (`ID`)
        );";
        dbDelta( $sql );
    }
}