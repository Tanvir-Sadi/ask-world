<?php

namespace Luminous\Route;

class Router{

    public function __construct()
    {
        session_start();
    }

    /**
     * return views
     * @param $input
     * @return string
     */
    public static function view($input){
        $input = str_replace(".","/",$input);
        return '../../app/View/'.$input.'.php';
    }

    public static function get($route, $controller=[]){
        if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ Self::route($route, $controller); }
    }

    public static function post($route, $controller=[]){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ Self::route($route, $controller); }
    }

    public static function put($route, $controller=[]){
        if( $_SERVER['REQUEST_METHOD'] == 'PUT' ){ Self::route($route, $controller); }
    }
    public static function patch($route, $controller=[]){
        if( $_SERVER['REQUEST_METHOD'] == 'PATCH' ){ Self::route($route, $controller); }
    }

    public static function delete($route, $controller=[]){
        if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ Self::route($route, $controller); }
    }

    public static function any($route, $controller=[]){ Self::route($route, $controller); }


    private static function route($route, $controller){

        $request_url = str_replace('/askWorld','',$_SERVER['REQUEST_URI']);

        $request_url = filter_var($request_url, FILTER_SANITIZE_URL);
        $request_url = rtrim($request_url, '/');
        $request_url = strtok($request_url, '?');
        $route_parts = explode('/', $route);
        $request_url_parts = explode('/', $request_url);
        array_shift($route_parts);
        array_shift($request_url_parts);

        if ($route_parts == $request_url_parts){
            $obj = new $controller[0];
            $obj->{$controller[1]}();
        }

//        $callback = $path_to_include;
//        if( !is_callable($callback) ){
//            if(!strpos($path_to_include, '.php')){
//                $path_to_include.='.php';
//            }
//        }
//        if($route == "/404"){
//            include_once __DIR__."/$path_to_include";
//            exit();
//        }

//
//        if( $route_parts[0] == '' && count($request_url_parts) == 0 ){
//            echo $path_to_include;
//            exit();
//        }
//
//        if( count($route_parts) != count($request_url_parts) ){ return; }
//        $parameters = [];
//        for( $__i__ = 0; $__i__ < count($route_parts); $__i__++ ){
//            $route_part = $route_parts[$__i__];
//            if( preg_match("/^[$]/", $route_part) ){
//                $route_part = ltrim($route_part, '$');
//                array_push($parameters, $request_url_parts[$__i__]);
//                $$route_part=$request_url_parts[$__i__];
//            }
//            else if( $route_parts[$__i__] != $request_url_parts[$__i__] ){
//                return;
//            }
//        }
//        // Callback function
//        if( is_callable($callback) ){
//            call_user_func_array($callback, $parameters);
//            exit();
//        }
//        echo $path_to_include;
//        exit();
    }


    function out($text){echo htmlspecialchars($text);}
    function set_csrf(){
        if( ! isset($_SESSION["csrf"]) ){ $_SESSION["csrf"] = bin2hex(random_bytes(50)); }
        echo '<input type="hidden" name="csrf" value="'.$_SESSION["csrf"].'">';
    }
    function is_csrf_valid(){
        if( ! isset($_SESSION['csrf']) || ! isset($_POST['csrf'])){ return false; }
        if( $_SESSION['csrf'] != $_POST['csrf']){ return false; }
        return true;
    }
}

