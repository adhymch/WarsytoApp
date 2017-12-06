<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_Barang extends CI_Controller {

    public function __construct() {
        parent::__Construct();
        $this->load->helper('string');
        $this->load->helper('date');
        $this->load->model('M_Barang');
    }

    public function index() {
        $this->load->view('Head/V_Header');
        $this->load->view('Head/V_Menu');
        $this->load->view('Head/V_Toggle');
        $result['query'] = $this->M_Barang->ShowBarang();
        if (filter_input(INPUT_POST, "submit")) {
            $Divisi = filter_input(INPUT_POST, "Divisi");
            if ($Divisi == 'IT Helpdesk') {
                $result['query'] = $this->M_Barang->ShowDivisi('IT Helpdesk');
            } else if ($Divisi == 'IT Internal') {
                $result['query'] = $this->M_Barang->ShowDivisi('IT Internal');
            }
        }
        $this->load->view('V_Home', $result);
        $this->load->view('Foot/V_Footer');
    }
}
