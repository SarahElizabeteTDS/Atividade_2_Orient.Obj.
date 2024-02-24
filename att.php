<?php

function verificaPrimo($num)
{
    if ($num < 2) 
    {
        die;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) 
    {
        if ($num % $i == 0) 
        {
            return false;
        }
    }

    return true;
}

do 
{
   $num = readline("Informe um número para verificar se é primo ou não: \n");
   if (verificaPrimo($num)) 
   {
       echo $num . " é primo.\n";
   }else{
       echo $num . " não é primo.\n";
   }

}while ($num >= 2);
