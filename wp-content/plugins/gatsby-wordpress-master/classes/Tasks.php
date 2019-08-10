<?php

namespace taskmanager;

class Tasks
{

    /**
     * Tasks constructor.
     */
    public function __construct()
    {
        $this->create_tasks();
    }

     /** 
      * register post type  
      */
    public function create_tasks()
    {
       
        $labels = array(
            'name'                => _x( 'Tâches', 'Post Type General Name', 'taskmanager'),
            'singular_name'       => _x( 'Tâche', 'Post Type Singular Name', 'taskmanager'),
            'menu_name'           => __( 'Tâche', 'taskmanager'),
            'all_items'           => __( 'All Tâche', 'taskmanager'),
            'view_item'           => __( 'View all Tâche', 'taskmanager'),
            'add_new_item'        => __( 'Add new Tâche', 'taskmanager'),
            'add_new'             => __( 'Add', 'taskmanager'),
            'edit_item'           => __( 'Edit', 'taskmanager'),
            'update_item'         => __( 'Modify', 'taskmanager'),
            'search_items'        => __( 'Search', 'taskmanager'),
            'not_found'           => __( 'Not found', 'taskmanager'),
            'not_found_in_trash'  => __( 'Not found in the trash', 'taskmanager'),
        );

        $args = array(
            'label'               => __( 'Tâches', 'taskmanager'),
            'description'         => __( 'Everything is tâches', 'taskmanager'),
            'labels'              => $labels,
            'supports'            => array( 'title'),
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
        );
        register_post_type( 'taskmanager-tasks', $args );
    }
}