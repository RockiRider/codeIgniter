<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class profile_model extends CI_Model{
    
    public function getProfile($name){
        return array("fullName" => "Becca Cowan", "age" => 19);
    }
}