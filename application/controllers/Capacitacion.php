<?php
/**
 * Description of Capacitacion
 *
 * @author ONG Momento de Cambio
 */
class Capacitacion extends CI_Controller {
    
    public function index() {
        $data = array('titulo' => 'Capacitación');
        $this->load->view('capacitacion', $data);
    }
}
