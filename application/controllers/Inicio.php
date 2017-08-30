<?php

/**
 * Description of Inicio
 *
 * @author ONG Momento de Cambio
 */
class Inicio extends CI_Controller {

    public function index() {
        $data = array('titulo' => 'Inicio');
        $this->load->view('inicio', $data);
    }

    public function labor_social() {
        $data = array('titulo' => 'Labor Social');
        $this->load->view('labor_social', $data);
    }

    public function blog_y_mas() {
        $data = array('titulo' => 'Blog y Más');
        $this->load->view('blog_y_mas', $data);
    }

    public function cursos_y_capacitaciones($num_pagina) {
        $data = array('titulo' => 'Cursos y Capacitaciones');
        if ($num_pagina == 1) {
            $this->load->view('cursos_y_capacitaciones_1', $data);
        } else {
            $this->load->view('cursos_y_capacitaciones_2', $data);
        }
    }

}
