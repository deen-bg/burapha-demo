<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation'); 
		$this->load->model('Portfolio_model');
	}
    /**
     * index function
     * display customer form
     *
     * @return html form
     */
	public function index()
    {

        // $data['products'] = $this->Product_model->fecthAll(); // call all products

        $this->security->get_csrf_token_name(); // initial CSRF name
        $this->security->get_csrf_hash(); // get CSRF Token generate
        
        $this->load->view('home');
    }
    public function test()
    {
        # code...
    }
    
}
