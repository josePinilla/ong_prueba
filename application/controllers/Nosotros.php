<?php

/**
 * Description of Nosotros
 *
 * @author ONG Momento de Cambio
 */
class Nosotros extends CI_Controller {

    public function index() {
        $data = array('titulo' => 'Conócenos');
        $this->load->view('conocenos', $data);
    }

}
