<?php

namespace Luminous\View;

class View
{
    protected static $slot=null;

    public static function call($page, $data=null, $layout=null){
        if ($layout == null)
            self::renderPage($page,$data);
        else
            self::renderLayout($page,$layout, $data);
    }

    static function renderPage($page, $data=null){
        if($data){
            foreach ($data as $key=>$value)
                $$key=$value;
        }
        require_once self::path($page);
    }

    static function renderLayout($page, $layout, $data=null){
        if($data){
            foreach ($data as $key=>$value)
                $$key=$value;
        }
        self::$slot= self::renderSlot($page);
        require_once self::view($layout,'Layouts');
    }

    static function path($path){
        return __DIR__.'/'.self::view($path);
    }

    static function view($input, $type=null){
        $input = str_replace(".","/",$input);
        return __DIR__.'/../../app/View/'.$type.'/'.$input.'.php';
    }

    static function renderSlot($page, $data=null){
        if($data){
            foreach ($data as $key=>$value)
                $$key=$value;
        }
        return self::view($page);
    }
}