<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
	public function index()
	{
		$this->load->view('home_view');

	}
	public function overview_fun()
	{
		$this->load->view('aboutus_view');

	}
	public function history_fun()
	{
       		$this->load->view('aboutus_view');
	}
	public function printing_fun()
	{
		$this->load->view('aboutus_view');

	}
	public function mutation_fun()
	{
		$this->load->view('mutation_view');

	}
	public function contact_fun()
	{
		$this->load->view('contact_view');

	}
	public function login_fun()
	{
		$this->load->view('login_view');

	}
	public function companyreg_fun()
	{
       		$this->load->view('companyreg_view');
	}
	public function indivreg_fun()
	{
       		$this->load->view('indivreg_view');
	}
	public function services_fun()
	{
       		$this->load->view('services_view1');
	}
}
