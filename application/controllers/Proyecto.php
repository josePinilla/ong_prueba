<?php

/**
 * Description of Proyecto
 *
 * @author ONG Momento de Cambio
 */
class Proyecto extends CI_Controller {

    public function index() {
        $data = array('titulo' => 'Proyectos');
        $this->load->view('proyecto', $data);
    }

    public function medio_ambiente() {
        $data = array('titulo' => 'Medio Ambiente');
        $this->load->view('medio_ambiente', $data);
    }

    public function insercion_laboral() {
        $data = array('titulo' => 'Inserción Laboral');
        $this->load->view('insercion_laboral', $data);
    }

}
