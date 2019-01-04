<?php


class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload() {

        $config['upload_path']   = './upload/';
        $config['allowed_types'] = 'jpg|jpeg|zip|pdf';
        $config['max_size']      = 100000;
        //$config['max_width']     = 1024;
        //$config['max_height']    = +768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }
    }
    public function dashboard_fun(){
       $this->load->view('header');

    }

    public function upload_product_admin_fun()
    {
        $this->load->view('upload_product_admin');
    }

    public function ViewStlFile_fun()
    {
        $this->load->view('ViewStlFile');

    }
    public function viewQuotations_fun()
    {
        $this->load->view('header');        
        $this->load->view('viewQuotations'); 
    }

    public function SaleHistory_fun()
    {
        $this->load->view('SaleHistory');
    }
}
?>