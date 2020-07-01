<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $seluruhdunia        = json_decode(file_get_contents('https://api.kawalcorona.com/positif/'), true);
        $meninggalseluruhnya = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), true);
        $sembuhseluruhnya    = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), true);
        $indo                = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
        $datadunia           = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
        

        $data = array(
            'title' => 'Perkembangan Covid-19 di Indonesia',

            'seluruhdunia'          => $seluruhdunia,
            'meninggalseluruhnya'   => $meninggalseluruhnya,
            'sembuhseluruhnya'      => $sembuhseluruhnya,
            'indo'                  => $indo,
            'datadunia'             => $datadunia,
            'isi'                   => 'v_home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function data()
    {
        $prop           = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'), true);
        $dunia          = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);


        $data = array(
            'prop'                  => $prop,
            'dunia'                 => $dunia,
            'isi'                   => 'v_data'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function berita()
    {

        $data = array(
        
            'isi'         => 'v_berita'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function pemetaan()
    {
        $lokasi          = json_decode(file_get_contents('https://api.kawalcorona.com/'), true);
        $nasional        = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);


        $data = array(
            'lokasi'      => $lokasi,
            'nasional'    => $nasional,
            'isi'         => 'v_pemetaan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

}

/* End of file Home.php */


?>