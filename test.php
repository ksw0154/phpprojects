<!-- <?php
class Car_Engine {
    // private, public은 클래스 외부에서 접근할 수 있는가?
    private $_displacement;
    public $engineName;

    public function getDisplacement() {
        return $this -> _displacement;
    }

    public function setDisplacement($displacement) {
        $this -> _displacement = $displacement;
    }
}

$engine = new Car_engine();
$engine->setDisplacement(3.3);
$engine->engineName = "좋은 엔진";

echo $engine->getDisplacement();
echo $engine->engineName;
?> -->

<?php
$a = new stdClass();
$a->bbb = "object create";
$a->ccc = "object delete";
print_r($a);

?>