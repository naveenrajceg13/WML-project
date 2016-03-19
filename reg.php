<?php
header("Content-Type: text/vnd.wap.wml");
?>
<wml>

    <card id="1" title="1">
        <?
        $src=$_POST['user'];
        $des=$_POST['pass'];
        $t=0;
        $x=  mysql_connect('localhost','root','');
        mysql_select_db('wml_project',$x);
        $y=mysql_query("INSERT INTO `wml_project`.`wmlpro` (`username`, `password`) VALUES ('$src', '$des');");
         if(!$y)
           {
               print "registraion failed";
               $t=1;
           }
        else
         {
                           header("Location: sample.wml");
                           exit;
         }
        mysql_close($x);
        ?>
<p align="right"><img src="tryagain.jpg" alt="game image" width="150" height="150"/></p>
    </card>
        

        
       
  


</wml>
