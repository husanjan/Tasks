<?php
//1) Write a for loop in PHP that outputs all odd numbers from 1 to 100

   $num=100;
   for($i=1; $i<=$num;$i++)
   {
       if($i%2==1)
       {
           echo "<pre>";
           echo $i;
           echo "</pre>";

       }
   }



