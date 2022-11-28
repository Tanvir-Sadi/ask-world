<?php

namespace Luminous\Route;

class Router{

    public static function get($route, $controller=[], $middleware = true){
        if( $_SERVER['REQUEST_METHOD'] == 'GET' && $middleware){ self::route($route, $controller); }
    }

    public static function post($route, $controller=[], $middleware = true){
        if( $_SERVER['REQUEST_METHOD'] == 'POST' && $middleware){ self::route($route, $controller); }
    }

    public static function put($route, $controller=[], $middleware = true){
        if( $_SERVER['REQUEST_METHOD'] == 'PUT' && $middleware){ self::route($route, $controller); }
    }
    public static function patch($route, $controller=[], $middleware = true){
        if( $_SERVER['REQUEST_METHOD'] == 'PATCH' && $middleware){ self::route($route, $controller); }
    }

    public static function delete($route, $controller=[], $middleware = true){
        if( $_SERVER['REQUEST_METHOD'] == 'DELETE' && $middleware){ self::route($route, $controller); }
    }

    public static function any($route, $controller=[], $middleware = true){ self::route($route, $controller); }


    private static function route($route, $controller){

        $request_url = str_replace('','',$_SERVER['REQUEST_URI']);

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
            exit();
        }

        if( count($route_parts) != count($request_url_parts) ){ return; }
        $parameters = [];
        $request = [];
        for( $__i__ = 0; $__i__ < count($route_parts); $__i__++ ){
            $route_part = $route_parts[$__i__];
            if( preg_match("/^[$]/", $route_part) ){
                $route_part = ltrim($route_part, '$');
                array_push($parameters, $request_url_parts[$__i__]);
                $$route_part=$request_url_parts[$__i__];
                $request[$route_part]= $$route_part;
            }
            else if( $route_parts[$__i__] != $request_url_parts[$__i__] ){
                return;
            }
        }
        $obj = new $controller[0]($request);
        $obj->{$controller[1]}();

    }

//
//    function out($text){echo htmlspecialchars($text);}
//    function set_csrf(){
//        if( ! isset($_SESSION["csrf"]) ){ $_SESSION["csrf"] = bin2hex(random_bytes(50)); }
//        echo '<input type="hidden" name="csrf" value="'.$_SESSION["csrf"].'">';
//    }
//    function is_csrf_valid(){
//        if( ! isset($_SESSION['csrf']) || ! isset($_POST['csrf'])){ return false; }
//        if( $_SESSION['csrf'] != $_POST['csrf']){ return false; }
//        return true;
//    }
}

