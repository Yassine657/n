<?php
namespace gestion_salarie\Salaries\salarie;
include "exception.php";
use exception\EXC;
class Salarie{
    static $cpt=0;
    private $mat;
    private $nom;
    private $prenom;
    private $nbh;
    private $taux;

    function __construct($nom,$prenom,$nbh,$taux)
    {
        $this->mat=self::$cpt++;
        $this->nom=$nom;
        $this->prenom=$prenom;
        if(20<=$nbh && $nbh<=40)
            $this->nbh=$nbh;
        else
            throw new EXC("nombre d'heure insufissant",1);

        $this->taux=$taux;
    }
    //todo: getter matricule
    
    function getmat(){
        return $this->mat;
    }
    //todo : getter and setter nom
    function getnom(){
        return $this->nom;
    }
    function setnom($val){
        $this->nom=$val;
    }
    //todo : getter and setter nom
    function getprenom(){
        return $this->prenom;
    }
    function setprenom($val){
        $this->prenom=$val;
    }
    //todo : getter and setter nom
    function getnbh(){
        return $this->nbh;
    }
    function setnbh($val){
        if(20<=$val && $val<=40)
            $this->nbh=$val;
        else
            throw new EXC("nombre d'heure insufissant",1);

    }
    
    //todo : getter and setter nom
    function gettaux(){
        return $this->taux;
    }
    function settaux($val){
        $this->taux=$val;
    }

    //todo :  getcalcule

    public function getcalcule(){
        $total=$this->getnbh() * $this->gettaux();
        return $total;
    }

    // todo: tostring

    function __toString()
    {
        return $this->mat." ".$this->nom." ".$this->prenom." ".$this->getcalcule();
    }

}

