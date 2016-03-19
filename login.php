<?php
header("Content-Type: text/vnd.wap.wml");
?>
<wml>

    <card id="1" title="Chennai">
        <?
        $src=$_POST['username'];
        $des=$_POST['password'];
       
        $x=  mysql_connect('localhost','root','');
        $x=  mysql_select_db('wml_project');
        $x=  mysql_query("select * from wmlpro WHERE username='$src'");
       
        $count=0;
        
        while ($row = mysql_fetch_array($x)) {
            if(strcmp($des,$row['password'])!=0)
             {
                  header("Location: sample.wml");
                           exit;   
             }
            else
             {
                   header("Location: login.wml");
                           exit; 
             }   
              print $des;
              print $row['password'];
        }
        header("Location: sample.wml");
                           exit;
      
        ?>
    </card>
        

        
       
  


</wml>
