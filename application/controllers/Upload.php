<?php
class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('insert_model');

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


    
        public function myupload(){
            $config['upload_path']          = 'uploads/images/package';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = true;
            $this->load->library('My_upload', $config);
        }



    public function database_fun()
    {
                $this->load->database();


       


        $data = array(
    'Product_id' => $this->input->post('pid'),
    'Product_name' => $this->input->post('pname'),
    'Isq_number' => $this->input->post('isq'),
    'Product_mrp' => $this->input->post('pmrp'),
    'Product_height' => $this->input->post('pheight'),
    'Product_width' => $this->input->post('pwidth'),
    'Product_volume' => $this->input->post('pvolume'),
    'Product_color' => $this->input->post('pcolor'),
    'Product_diameter' => $this->input->post('pdiameter'),
    'Product_desc' => $this->input->post('pdesc'),
    'Stl_file' => $this->input->post('imagestl'),
    'Image_front_view' => $this->input->post('imagefront'),
    'Image_top_view' => $this->input->post('imagetop'),
    'Image_bottom_view' => $this->input->post('imagebottom'),
    'Image_rightside_view' => $this->input->post('imageright'),
    'Image_leftside_view' => $this->input->post('imageleft'),
    'Image_isometric_view' => $this->input->post('imageisometric')
);
              
               $this->db->insert('upload_product_admin',$data);  
  
        redirect("Upload/upload_product_admin_fun");  

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
    }

    public function view_stlfile_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('view_stlfile_view');
    }
    
    public function generate_quotation_fun()
    {
        $this->load->view('admin_header');
        $this->load->view('generate_quotation_view1'); 
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
        $this->load->view('myaccount_view');
    }

     public function upload_product_user_fun()
    {
       $this->load->view('upload_product_user');

    }
    public function addblog2_fun()
    {
       $this->load->view('addblog_view2');

    }

}
?>