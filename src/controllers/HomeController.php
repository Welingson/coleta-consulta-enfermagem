<?php


namespace src\controllers;

use \core\Controller;
use src\models\Bed;
use \src\models\Patient;
use \src\models\Unity;

class HomeController extends Controller {

    public function index() {

        $unity = new unity();
        $patient = new Patient();
        $bed = new Bed();

        var_dump($unity->select(['unidade'])->get());
        var_dump($patient->select(['nome_completo'])->where('id_unidade', 1)->get());
        var_dump($bed->select(['leito_numero', 'nome_completo', 'estado'])
        ->join('pacientes', 'pacientes.id', '=', 'leitos.id_paciente')
        ->join('paciente_estados', 'paciente_estados.id_paciente', '=', 'pacientes.id')
        ->get());

        // $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}