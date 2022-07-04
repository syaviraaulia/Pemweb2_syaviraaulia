<?php
class __persegipanjang{
    public $panjang;
    public $lebar;

    public function Luas(){
        $luas = $this ->panjang*$this->lebar;
        return "luas :".$luas;
    }

    public function keliling(){
        $keliling = 2*($this->panjang + $this->lebar);
        return "Keliling :".$keliling;
    }
    
    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
?>