<?php
/**
 * Created by IntelliJ IDEA.
 * User: miio
 * Date: 11/25/17
 * Time: 14:00
 */

require(__DIR__ . '/config.php');
require(__DIR__ . '/Classes/order_status.php');
require(__DIR__ . '/Classes/Item.php');
require(__DIR__ . '/Classes/伝票.php');
require(__DIR__ . '/Classes/Stock.php');
require(__DIR__ . '/Classes/🚚.php');

$🏢の商品一覧 = [
	'いちご' => new Item('いちご', 100),
	'オレンジ' => new Item('オレンジ', 150),
	'メロン' => new Item('メロン', 180),
	'夕張メロン' => new Item('夕張メロン', 180),
];

/** @var Stock[] $🏠Aの在庫リスト */
$🏠Aの在庫リスト = [
	new Stock($🏢の商品一覧['いちご'], 100),
	new Stock($🏢の商品一覧['メロン'], 100),
	new Stock($の商品一覧['マスクメロン'], 100)
];

/** @var Stock[] $🏠Bの在庫リスト */
$🏠Bの在庫リスト = [
	new Stock($🏢の商品一覧['オレンジ'],100 ),
];

/** @var Stock[] $🏠Cの在庫リスト */
$🏠Cの在庫リスト = [
	new Stock($🏢の商品一覧['夕張メロン'],100 ),
];



print "🏠Aのいちごを🏠Bに配送するぞ!!\n";

print "🏠Aの" . $🏠Aの在庫リスト[0]->getItem()->getName() . "は" . $🏠Aの在庫リスト[0]->getQuantity() . "個あります\n";

$🚚 = new 🚚();
$🚚->注文を受ける(new 伝票($🏠Aの在庫リスト[0]->getItem(), 35));
$🚚->今の状態();
$🏠Aの在庫リスト[0]->shipment(35);
$🚚->今の状態();
$🚚->積み込んで移動する(50);
$🚚->今の状態();
$🚚->積み下ろす($🏠Bの在庫リスト);
$🚚->今の状態();

print "🏠Aの" . $🏠Aの在庫リスト[0]->getItem()->getName() . "は" . $🏠Aの在庫リスト[0]->getQuantity() . "個あります\n";
print "🏠Bの" . $🏠Bの在庫リスト[1]->getItem()->getName() . "は" . $🏠Bの在庫リスト[1]->getQuantity() . "個あります\n";

//var_dump($🏠Bの在庫リスト);



/**
// 🏠Aのメロンを🏠Cに配送するぞ!!!
$🚚 = new 🚚();
$🚚->注文を受ける(new 伝票($🏠Aの在庫リスト[1]->getItem(), 1005));
$🚚->今の状態();
$🏠Aの在庫リスト[1]->shipment(1005);
$🚚->今の状態();
$🚚->積み込んで移動する(1000);
$🚚->今の状態();
$🚚->積み下ろす($🏠Cの在庫リスト);
$🚚->今の状態();


var_dump($🏠Cの在庫リスト);
 */