<?php


namespace taskmanager\Routes;


class RouteManager
{
    /**
     * RouteManager constructor.
     */
    public function __construct()
    {
        add_action("rest_api_init",[$this,"Routes"]);
    }

    public function Routes()
    {
        new TaskRoutes();
    }

}