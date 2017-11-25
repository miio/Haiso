<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 14:14
 */

class 🚚
{

	private $status;
	private $denpyo;

	public function __construct()
	{
		$this->status = new 🚚Status();
	}

	public function 注文を受ける($denpyo)
	{
		$this->status = new 🚚OrderStatus();
		$this->denpyo = $denpyo;
	}
	/**
	 */
	public function 積み込んで移動する()
	{
		$this->status = new 🚚TranslatingStatus();
	}

	/**
	 */
	public function 積み下ろす(&$dest_list)
	{
		$dest_list[$this->denpyo->getItem()->getName()] = new Stock($this->denpyo->getItem(), $this->denpyo->getQuantity());
		$this->status = new 🚚CompleteStatus();
	}


	public function 今の状態()
	{
		if (null !== $this->denpyo) {
			print $this->status->statusName($this->denpyo->getItem()) . "\n";
		} else {
			print "伝票が無い！\n";
		}
	}
}