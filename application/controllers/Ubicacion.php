<?php

/**
 * Description of Ubicacion
 *
 * @author ONG Momento de Cambio
 */
class Ubicacion extends CI_Controller {

    public function index() {
        $data = array('titulo' => 'Ubicación');
        $this->load->view('ubicacion', $data);
    }

}
