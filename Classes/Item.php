<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 13:54
 */

class Item
{

	/**
	 * @var int
	 */
	private $name;

	/**
	 * @var int
	 */
	private $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	/**
	 * @return int
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getPrice()
	{
		return $this->price();
	}
}