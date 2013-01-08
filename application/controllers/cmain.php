<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmain extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Web site start here
     */
    public function index()
    {
        // load view
        $this->load->view('kjmall');
    }
    
    /**
     * Ajax load
     */
    public function ajaxInputProfile()
    {
        $usname = $_POST['usname'];
        $uspass = $_POST['uspass'];
        $profileid = '0000';
        
        // เรียกใช้งาน Database
        $this->load->database();
	$this->load->model('mmain'); // Load ชื่อของไฟล์ model ที่สร้างใน folder models
        
        $result = $this->mmain->insertAccount($usname,$uspass,$profileid);
        
        // ตรวจสอบผลลัพธ์จากการ insert 
        // ใน AJAX function เราจะใช้การ echo เพื่อส่งค่ากลับไปให้ javascript
        if( $result )
            echo 'Insert OK!';
        else
            echo 'Insert Fail';
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */