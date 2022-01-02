<?php

/**
 * creating ExceptionHandling class
 * using try catch and finally block
 */
class ExceptionHandling
{
    
    function excHandling()
    {
        $divident = readline("Enter Divident: ");
        $divisior = readline("Enter Divisior: ");
        try {
            if ($divisior == 0) {
                throw new Exception('Please Enter valid number '."\n");
            }
            echo  "Answer: ".$divident / $divisior ."\n";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        finally{
            echo "It will always run \n";
        }
    }
}

$excObj = new ExceptionHandling();
$excObj->excHandling();
