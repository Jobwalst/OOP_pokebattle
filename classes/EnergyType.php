<?php
class EnergyType{
    public $type;
    public $constant;

    public function __construct($type, $constant){
        $this->type = $type;
        $this->constant = $constant;
    }

    public function __toString() {
        return json_encode($this);
    }
}

