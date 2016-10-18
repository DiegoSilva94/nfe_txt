<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 03/10/16
 * Time: 13:12
 */

namespace NFETxt\HTML;


class Generate
{
    protected $atributes = [];
    public function __construct()
    {
        $this->atributes = require __DIR__.'/../../generate/rows.php';
    }
}