<?php
class Signup extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function user_layout()
    {
        $this->load->view("signup/user_register_layout");
    }
}
