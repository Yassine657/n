<?php
namespace mesServices;
require "directeur.php";
use gestion_salarie\Salaries\directeur\Directeur;
use gestion_salarie\Salaries\salarie\Salarie;

class MesServices extends Directeur {
    private $tab=[];

    public function add($obj){
        $result=array_push($this->tab,$obj);
        $x=$this->tab[0];
        return $x;
        return $result;
    }
    public function getcount(){
        return count($this->tab);
    }

    


}
$c=new MesServices("yass","s",20,202,200);
$c1=new MesServices("a","s",20,202,200);
$x=$c->add($c);
$x=$c->add($c1);
echo($x);
echo "<br>";
$a=$c->getcount();
echo($a);