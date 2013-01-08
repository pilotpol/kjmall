<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>:: Welcome to KJ Mall 
            <?php echo _KJ_VERSION; //อันนี้เป็นวิธีเรียกใช้ constants ที่เรา define ใน config/constants.php ?> ::
        </title>

        <!-- วิธีเรียกใช้ CSS ส่วนใหญ่จะเรียกอะไรเพิ่ม ก็จะมาเขียนเพิ่มเอาตรงนี้เลย-->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/css/kjmall.css" />  
        
    </head>
    <body>
        
        <div id="mainsite" >
            <!-- สร้าง form รับข้อมูล -->
            <form id="form_profile">
                <table border="0" cellspacing="5">
                    <tr><td>username : </td><td><input type="text" id="usname" name="usname" /></td></tr>
                    <tr><td>password : </td><td><input type="text" id="uspass" name="uspass" /></td></tr>
                    <tr><td colspan="2"><input type="button" value=" Insert " onclick="getProfile();"/></td></tr>
                </table>
            </form>
            
            <div id="output"></div>
        </div>
        
        

        <!-- บางตำราก็ว่าเรียก include javascript ที่ส่วนท้ายของหน้า page จะทำให้เว็บโหลดเร็วขึ้น -->   
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
        
        <script type="text/javascript">
            // ประกาศตัวแปรอะไรที่จะใช้ในไฟล์ kjmall_js
            var base_url = "<?php echo base_url(); ?>";
        </script>
        
        <?php $this->load->view('kjmall_js'); //อันนี้เป็นการเรียกอีกไฟล์เข้ามา include ไฟล์ที่เรียกใส่เฉพาะ javascript เซฟที่เดียวกันใน view ?>
    
    </body>
</html>