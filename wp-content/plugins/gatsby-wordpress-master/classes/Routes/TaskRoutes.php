<?php


namespace taskmanager\Routes;


class TaskRoutes
{
    // global $test = $wpdb;
    /**
     * TaskRoutes constructor.
     */
    public function __construct()
    {
        $this->create_task_routes();
    }

    /**
     *  create the task route
     */
    public function create_task_routes()
    {
    
        register_rest_route('taskmanager/v0', '/tasks/(?P<id>\d+)', array(
            'methods' => 'GET',
            'callback' => [$this,"get_task_with_id"],
        ));

        register_rest_route('taskmanager/v0', '/tasks/(?P<id>\d+)', array(
            'methods' => 'DELETE',
            'callback' => [$this,"delete_task"],
        ));

        register_rest_route('taskmanager/v0', '/tasks/(?P<id>\d+)', array(
            'methods' => 'PUT',
            'callback' => [$this,"edit_task"],
        ));

        register_rest_route('taskmanager/v0', '/tasks', array(
            'methods' => 'GET',
            'callback' => [$this,"get_all_tasks"],
        ));

        register_rest_route('taskmanager/v0', '/tasks', array(
            'methods' => 'POST',
            'callback' => [$this,"create_task"],
        ));
       
    }
 
    /**
     *  return all tasks
     */
    public function get_all_tasks()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'taskmanager';
        $resultat = $wpdb->get_results("SELECT * from $table_name" );
        return $resultat;
    }

    /**
     * return single task
     */
    public function get_task_with_id( $request )
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'taskmanager';
        $requete = $request['id'];
        $resultat = $wpdb->get_results("SELECT * from $table_name WHERE ID = $requete" );
        return $resultat;
    }

    /**
     * delete single task
     */
    public function delete_task( $request ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'taskmanager';
        $requete = $request['id'];
        $resultat = $wpdb->get_results("DELETE from $table_name WHERE ID = $requete" );
        return $resultat;
    }

    /**
     * create a task
     */
    public function create_task( \WP_REST_Request  $request )
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'taskmanager';


      
        $resultat = $wpdb->insert( 
            $table_name, 
            array( 
                'post_title' => $request['post_title'],
                'post_desc' => $request['post_desc'],
                'user_id' => $request['user_id'],
                'status_id' => $request['status_id']
            ) 
        );

        return $resultat;
    }

    /**
     * edit a single task
     */
    public function edit_task( $request )
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'taskmanager';

        $resultat = $wpdb->update( 
            $table_name, 
            array( 
                'post_title' => $request['post_title'],
                'post_desc' => $request['post_desc'],
                'user_id' => $request['user_id'],
                'status_id' => $request['status_id']
            ),
            array('ID' => $request['id'])
        );
        return $resultat;
    }
    


}
