<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->Auth_Model->is_logged_in();
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_logged_in_id');
        $user = $this->User_Model->get_user($user_id);
        $data['user_id'] = $user_id;
        $data['user'] = $user;
        $this->load->view('my_profile', $data);
    }

    public function my_profile()
    {

    }

}
