<?php
class Message extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model("");
        // $this->load->library("");
        // $this->load->helper("");
    }

    public function show_message()
    {
        echo "<h1>Hello Friend</h1>";
        $this->school->get_school_name();
        $this->school->get_school_address();

        $string = "online web tutor";
        echo "<br>";
        echo $this->mystring->my_strlen($string);

        echo "<br>";
        echo $this->mystring->my_uppercase($string);
    }

    public function simpleMessage()
    {
        $content['message'] = "Simple view message I'm writing";
        $this->load->view("message/simple-message", $content);
    }
}
