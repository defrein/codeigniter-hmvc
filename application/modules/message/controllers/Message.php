<?php
class Message extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function show_message()
    {
        echo "<h1>Hello Friend</h1>";
    }

    public function simpleMessage()
    {
        $content['message'] = "Simple view message I'm writing";
        $this->load->view("message/simple-message", $content);
    }
}
