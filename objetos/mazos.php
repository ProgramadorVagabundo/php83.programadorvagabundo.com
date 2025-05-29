<?php

class Mazos {
    protected $num_cartas_min;
    protected $num_cartas_max;
    protected $caja;
    protected $cartas;

    function obtenNumCartasMin(){
        return $this->num_cartas_min;
    }
    function estableceNumCartasMin($num_cartas_min){
        $this->num_cartas_min = $num_cartas_min;
    }

    function obtenNumCartasMax(){
        return $this->num_cartas_max;
    }
    function estableceNumCartasMax($num_cartas_max){
        $this->num_cartas_max = $num_cartas_max;
    }

    function obtenNumCaja(){
        return $this->num_cartas_min;
    }
    function estableceCaja($num_cartas_min){
        $this->num_cartas_min = $num_cartas_min;
    }

}
?>