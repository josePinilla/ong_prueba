<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Blog extends CI_Controller{
    
    public function blog_1(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_1', $data);
    }
    
    public function blog_2(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_2', $data);
    }
    
    public function blog_3(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_3', $data);
    }
    
    public function blog_4(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_4', $data);
    }
    
    public function blog_5(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_5', $data);
    }
    
    public function blog_6(){
        $data = array('titulo' => 'inicio');
        $this->load->view('blog_6', $data);
    }
}


