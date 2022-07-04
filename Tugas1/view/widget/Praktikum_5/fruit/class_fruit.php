<?php
class fruit{
    public $name;
    protected $color;
    private $weight;

    function set_name($n){
        
        $this->name = $n;
    }

    protected function set_color($n){
        
        $this->color = $n;
    }

    private function set_weight($n){
       
        $this->weight = $n;
    }
    
}
$coconut = new fruit();
$coconut->set_name('coconut'); // Ok
$coconut->set_color('Green'); // Error
$coconut->set_weight('450'); // Error