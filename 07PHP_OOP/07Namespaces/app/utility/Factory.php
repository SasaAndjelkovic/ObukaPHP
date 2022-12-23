<?php
namespace Utility;

use App\Templates\ModelTemplate;

trait Factory{
    public static $lista = [];

    public static function create(ModelTemplate $mt)
    {
        # code...
        array_push(static::$lista,$mt);
    }
}

?>