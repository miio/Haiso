<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 13:47
 */

/**
 * 配送ステータス
 * Class 🚚Status
 */
class 🚚Status
{
	public function statusName(Item $item)
	{
		return $item->name() . 'のステータス';
	}
}

/**
 * 注文されたステータス
 * Class 🚚OrderStatus
 */
class 🚚OrderStatus extends 🚚Status
{

	public function statusName(Item $item)
	{
		return $item->getName() . 'が発注されました';
	}
}

/**
 * 配送中ステータス
 * Class 🚚TranslatingStatus
 */
class 🚚TranslatingStatus extends 🚚Status
{

	public function statusName(Item $item)
	{
		return $item->getName() . 'は配送🚚中です';
	}
}

/**
 * 配送完了ステータス
 * Class 🚚CompleteStatus
 */
class 🚚CompleteStatus extends 🚚Status
{
	public function statusName(Item $item)
	{
		return $item->getName() . 'の注文は完了しました';
	}
}