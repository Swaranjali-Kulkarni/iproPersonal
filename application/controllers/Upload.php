<?php
class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() 
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload() 
    {

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

    public function dashboard_fun()
    {
       $this->load->view('admin_header');

    }

    public function customer_dashboard_fun()
    {
       $this->load->view('customer_header');

    }

    public function upload_product_admin_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('upload_product_admin');
        $this->load->model('admin_insert_model');
    }

    public function view_stlfile_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('view_stlfile_view');
    }
    
    public function generate_quotation_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('generate_quotation_view'); 
    }

    public function view_quotations_fun()
    {
        $this->load->view('admin_header');        
        $this->load->view('view_quotations_view'); 
    }

    public function view_enquiries_fun()
    {
        $this->load->view('admin_header');        
        $this->load->view('view_enquiries_view'); 
    }

    public function addblog_fun()
    {

        $this->load->view('addblog_view'); 
    }
 
    public function newsletter_fun()
    {
        $this->load->view('admin_header');        
        $this->load->view('newsletter_view'); 
    }

    public function view_bills_fun()
    {
        $this->load->view('admin_header');        
        $this->load->view('view_bills_view'); 
    }
   
    public function generate_coupon_fun()
    {
        $this->load->view('admin_header');        
        $this->load->view('generate_coupon_view'); 
    }

    public function sale_history_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('sale_history_view');
    }

    public function myaccount_fun()
    {
        $route['hello']="Welcome/hello";
    }
}
?>