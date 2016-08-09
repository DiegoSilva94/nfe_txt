<?php

namespace NFETxt\Interfaces;


interface Validator
{
	/**
	* @param string $atribute
	* @param string $data
	* @return boolean
	*/
	public function make($atribute, $data);

	/**
	 * @return string
	 */
	public function error();

	/**
	 * @return integer
	 */
	public function erron();
}