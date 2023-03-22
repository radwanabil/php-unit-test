<?php
class Calculator{

    public function Factorial($num){
        if(!(is_int($num)) || !($num >= 0))
             return null;
       
            $fact=1;
            for ($i = 1; $i <= $num; $i++){         
                $fact = $fact * $i;  
                }  
                return $fact;
        

    }
}


?>