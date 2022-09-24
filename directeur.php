<?php
namespace gestion_salarie\Salaries\directeur;
require_once "salarie.php";
use gestion_salarie\Salaries\salarie\Salarie;

class Directeur extends Salarie{
    public $prime;
    function __construct($nom,$prenom,$nbh,$taux,$prime)
    {
        parent::__construct($nom,$prenom,$nbh,$taux);
        $this->prime=$prime;
    }
    function getcalcule(){
        $total=parent::getcalcule() + $this->prime;
        return $total;
    }
}


