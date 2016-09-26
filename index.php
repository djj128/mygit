<?php
   header("Content-type:text/html;charset=utf-8");
   echo 'hello,myGit<br />';
   echo 'commit git ok';

   $the_hour = date('G');

    if($the_hour <=8){
        echo '<br> 早上好';
    }elseif($the_hour>8 && $the_hour<=12){
        echo '上午好';
    }elseif ($the_hour >12 && $the_hour<=18) {
         echo '下午好';
     }

 ?>
