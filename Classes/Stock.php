<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 14:02
 */

class Stock
{
	public function __construct($item, $quantity)
	{
		$this->item = $item;
		$this->quantity = $quantity;
	}

	public function shipment($quantity)
	{
		$this->quantity -= $quantity;
		if (0 > $this->quantity) {
			throw new Exception(sprintf('数量が少ないよ！！！ num=%s', $num, $name));
		}
	}

	/**
	 * @return string アイテムオブジェクト
	 */
	public function getItem()
	{
		return $this->item;
	}

	/**
	 * @return int 数量
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

}