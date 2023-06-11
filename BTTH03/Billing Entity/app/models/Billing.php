<?php
class Billing{
    private $id;
    private $date;
    private $total;
    private $payment;

    public function __construct($id, $date, $total, $payment){
        $this->id        =$id;
        $this->date      =$date;
        $this->total     =$total;
        $this->payment   =$payment;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getPayment(){
        return $this->total;
    }

    public function setPayment($payment){
        $this->total=$payment;
    }
}
?>