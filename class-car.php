<?php
class Car {
    public $color;
    public $doors;
    public $luggage_rack;

	function __construct( $color, $doors, $luggage_rack ) {
		$this->color = $color;
		$this->doors = $doors;
		$this->luggage_rack = $luggage_rack;
	}
    
    function accelerate() {
    	return 'Tyre squeal!';
    }
    
    function brake() {
        return 'Screech';
    }
    
    function steer( $degree ) {
        return "Steer by $degree degrees";
    }
}
