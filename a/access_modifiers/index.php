<?php 
class Foo {
	public $a = 'a';
	protected $b = 'b';
	private $c = 'c';

	public function setter($a, $b, $c) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function getter() {
		return $this->a . $this->b . $this->c;
	}
}

$foo = new Foo();
echo $foo->a;
// this two can not be accessed out side of the class.
// echo $foo->b;
// echo $foo->c;

$foo->setter('x', 'y', 'z');
echo $foo->getter();