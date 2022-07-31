<?php

declare(strict_types = 1);

namespace WghtTrackApp_ClassLib\App;

use WghtTrackApp_ClassLib\Exceptions\RouteNotFoundException;

class Application{

    //private static DB $db;
    public function __construct(protected Router $router, protected array $request)
    {
        //static::$db= new DB($config->db ??[]);    
    }

    public static function db(){
        //return static::$db;
    }

    public static run(){
        try{
            echo $this->router->resolve($this->request['uri'],strtolower($this->request['method']));
        }catch(RouteNotFoundException){
            http_response_code(404);

            echo View::make('error/404');
        }
    }
}