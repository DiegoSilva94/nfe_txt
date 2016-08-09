<?php

namespace NFETxt\Interfaces;


interface Filter
{
	/**
	* @param string $atribute
	* @param string $data
	* @return string
	*/
	public function run($atribute, $data);
}