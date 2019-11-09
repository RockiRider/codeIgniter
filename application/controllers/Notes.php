<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

    class Notes extends CI_Controller{
        
        /*
        public function __construct(){
            parent::__construct();
            //
            echo "This shows everywhere<br>";
        }
        */
      
        
        public function index(){
             echo "This is my index function";
        }
           
        public function one($name){
            $this->load->view('header');
            
            $data = array("name" => $name);
            $this->load->view('one',$data);
            //Working
        }
        
        public function two($name){
            $this->load->model("profile_model");    // , "model"); to rename profile model to model.
            
            $profile = $this->profile_model->getProfile("Becca");
            
            $data = array("name" => $name);
            $data['profile']=$profile;
            $this->load->view('one',$data);
            
        }
    }