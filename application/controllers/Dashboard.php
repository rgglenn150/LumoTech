<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->Auth_Model->is_logged_in();
        $this->load->model('Market_Model');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_logged_in_id');
        $user = $this->User_Model->get_user($user_id);
        $user_account_type = $user->type;
        $data['user'] = $user;
        if (strcasecmp($user_account_type, 'business') == 0) {
            $this->load->view('dashboard_business', $data);
        }elseif(strcasecmp($user_account_type, 'supplier')==0){
            $this->load->view('dashboard_supplier', $data);
        }else{
            redirect('home');
        }
    }

    public function production_tools(){
        $user_id = $this->session->userdata('user_logged_in_id');
        $user = $this->User_Model->get_user($user_id);
        $data['user'] = $user;
        $this->load->view('production_tools',$data);
    }

    public function trade_in(){
        $user_id = $this->session->userdata('user_logged_in_id');
        $user = $this->User_Model->get_user($user_id);
        $data['user'] = $user;
        $this->load->view('trade_in',$data);
    }
    
    public function products(){
        $user_id = $this->session->userdata('user_logged_in_id');
        $user = $this->User_Model->get_user($user_id);
        $data['user'] = $user;
        $data["products"] = $this->Market_Model->getAllProducts();
        $this->load->view('dashboard_products',$data);
    }

}
