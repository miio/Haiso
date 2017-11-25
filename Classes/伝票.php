<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 14:24
 */

class 伝票
{

	/**
	 * @var Items
	 */
	private $item;

	/**
	 * @var string
	 */
	private $quantity;

	/**
	 * 伝票 constructor.
	 * @param Item $item
	 * @param string $quantity
	 */
	public function __construct($item, $quantity)
	{
		$this->item = $item;
		$this->quantity = $quantity;
	}

	/**
	 * @return Item
	 */
	public function getItem()
	{
		return $this->item;
	}

	/**
	 * @return Item
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
}