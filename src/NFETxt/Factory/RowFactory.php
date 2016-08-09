<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 09/08/16
 * Time: 11:26
 */

namespace NFETxt\Factory;


use NFETxt\Interfaces\Row;

class RowFactory
{
    /**
     * @param string $row
     * @return Row|null
     */
    public function getRow($row)
    {
        $class = $this->getClassName($row);
        if(class_exists($class));
            return new $class();
        return null;
    }

    /**
     * @param $row
     * @return string
     */
    private function getClassName($row)
    {
        if(preg_match('/\\d/', $row))
            return '\\NFETxt\\Rows\\' . preg_replace('/\\d/', '', $row) .'\\'. $row;
        return '\\NFETxt\\Rows\\' . $row;
    }
}