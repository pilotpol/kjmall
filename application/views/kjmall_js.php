<script>
    /**
     * 
     */
    function getProfile(){
        // ใช้การ post ด้วย jquery ส่งแบบ AJAX ไปหา function ที่สร้างใน controller 'cmain'
        // 
        $.post(
        base_url + "index.php/cmain/ajaxInputProfile" /*บรรทัดนี้คือ URL ของ function AJAX */,
        $('#form_profile').serialize() /*บรรทัดนี้คือ ฟังก์ชั่นของ jquery ที่จะเอาค่า input ทุกค่าส่งผ่านเป็นตัวแปรให้อัตโนมัติ*/,
        function(data) {
            // function ที่คืนค่ากลับมาจาก AJAX
           $('#output').empty().append( data );
        });
    
    }  

    // JQUERY START ///////////////
    $(document).ready( function(){
        //alert('test jquery'); 
    });
</script>
