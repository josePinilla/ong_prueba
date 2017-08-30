<?php

/**
 * Description of Contacto
 *
 * @author ONG Momento de Cambio
 */
class Contacto extends CI_Controller {

    public function index() {
        $data = array('titulo' => 'Contacto');
        $this->load->view('contacto', $data);
    }

    public function enviar() {
        $this->load->library('email');
        $nombre = $this->input->post('nombre_contacto');
        $email = $this->input->post('email_contacto');
        $empresa = $this->input->post('empresa_contacto');
        $mensaje = $this->input->post('mensaje_contacto');

        /*$configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'estiloyglamour1@gmail.com',
            'smtp_pass' => 'lleganmasclientes',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );*/
        
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => '201.238.211.138',
            /*'smtp_host' => 'smtp.gmail.com',*/
            'smtp_port' => 25,
            'smtp_user' => 'contacto@ongmomentodecambio.cl',
            'smtp_pass' => 'lleganmasclientes',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        //cargamos la configuración para enviar con gmail
        $this->email->initialize($configGmail);

        $this->email->from($email);
        $this->email->to("contacto@ongmomentodecambio.cl");
        $this->email->subject('Nombre y Empresa: ' . $nombre . '-' . $empresa . '');
        $this->email->message('<b>Nombre:</b> ' . $nombre . '<br><br><b>Mail:</b> ' . $email .'<br><br><b>Empresa:</b> ' . $empresa . '<br><br><b>Mensaje:</b> ' . $mensaje);
        /*$this->email->send();*/
        //con esto podemos ver el resultado
        /*var_dump($this->email->print_debugger());*/

        /*$data = array('titulo' => 'Contacto');*/
        /*$this->load->view('contacto', $data);*/
        
        if($this->email->send()){
            echo '<script language="javascript">alert("Correo enviado! :D");</script>';
            $data = array('titulo' => 'Contacto');
            $this->load->view('contacto', $data);
        }
    }

}

