<?php

class MY_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->module('school');
        // $this->load->module(array("school", "mystring"));
        $this->load->module(array("template"));
    }
}
