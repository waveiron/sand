<?php 
// class Product {
// 	public $title;
// 	public $producer;
// 	public $price;

// 	function __construct($title, $name, $price) {
// 		$this->title = $title;
// 		$this->name = $name;
// 		$this->price = $price;
// 	}

// 	function getProducer() {
// 		return "{$this->name}";
// 	}
// }

// $product = new Product('Wangwang', 'Sanjin', '10.0');
// echo $product->title;
// echo $product->name;
// echo $product->price;

// class Product {
// 	public $title;
// 	public $producer;
// 	public $price;

// 	function __construct($title, $producer, $price) {
// 		$this->title = $title;
// 		$this->producer = $producer;
// 		$this->price = $price;
// 	}


// }

// $product = new Product('Fanfan', 'Kevin', '10');
// echo $product->title;

$xml = simplexml_load_file('xml/1.xml');

echo $xml->note->to;

