<?php
class Home extends CI_Controller {

       public function index()
        {
            $nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), true);
            $provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
               $data = [
                   'title'  =>  'COVID-19 Nasional',
                   'nasional' => $nasional,
                   'provinsi' => $provinsi,
                   'isi'    =>  'v_home',    
               ];

               $this->load->view('layout/v_wrapper', $data);
             
        }
}