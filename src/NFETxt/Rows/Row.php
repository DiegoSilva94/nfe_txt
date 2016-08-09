<?php

namespace NFETxt\Rows;

use NFETxt\Exception\ValidAtribute;
use NFETxt\Interfaces\Validator;
use NFETxt\Interfaces\Filter;

class Row
{

    /**
     * @var Validator
     */
    protected $validator = null;
    /**
     * @var Filter
     */
    protected $filter = null;

    /**
     * @param Validator $validator
     * @throws void
     */
    public function setValidator(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param Filter $filter
     * @throws void
     */
    public function setFilter(Filter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @param $name
     * @param $value
     * @throws ValidAtribute
     */
    public function __set($name, $value)
    {
        if($this->validator != null && $this->validator->make($name, $value))
            throw new ValidAtribute($this->validator->error());
        if($this->filter != null)
            $value = $this->filter->run($name, $value);
        if(property_exists($this, $name))
            $this->$name = $value;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        $stub = $this->getStub();
        $a = (array) $this;
        foreach($a as $k => $v)
        {
            $k = str_replace('*','',$k);
            $k = str_replace("\x00",'',$k);
            $stub = str_replace('$'.$k.'$',$v, $stub);
        }
        return $stub;
    }
    /**
     * Get the migration stub file.
     *
     * @return string
     */
    protected function getStub()
    {
        return file_get_contents($this->getStubPath().'/' . (new \ReflectionClass($this))->getShortName() . '.stub');
    }
    /**
     * Get the path to the stubs.
     *
     * @return string
     */
    protected function getStubPath()
    {
        return __DIR__ . '/../../stubs/'. $this->getVersion();
    }
    /**
     * Get the version NFe.
     *
     * @return string
     */
    protected function getVersion()
    {
        return '3.10';
    }
}