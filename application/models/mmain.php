<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mmain extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    
    function getAccount($usname,$uspass){
        $sql = "SELECT * FROM usaccount WHERE usname='{$usname}' and uspass='{$uspass}'";
        
        $query = $this->db->query($sql); //ใช้งานคำสั่ง SQL
        return $query->result(); //ส่งกลับค่าที่ได้มาเป็น array ของผลลัพธ์
    }
    
    function insertAccount($usname,$uspass,$profileid){
        $sql = "INSERT INTO usaccount (usname,uspass,status,profile_id) VALUES ('{$usname}','{$uspass}',0,'{$profileid}')";
        return $this->db->query($sql); //ใช้งานคำสั่ง SQL ถ้าทำได้ return ค่า TRUE
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */