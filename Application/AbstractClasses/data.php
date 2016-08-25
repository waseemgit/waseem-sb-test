<?php
namespace Application\AbstractClasses;
/*
 * This Abstract Class is used for operations for different data
 */
abstract class data
{
    abstract protected function getPeopleData();    
    
    /*
         * This function is used to get Data.
         */
    public function getData($path)
    {   
        $jsonString = file_get_contents($path);
        $data = json_decode($jsonString, true);        
        return $data;
    }
    
}
/*
End of class
 *  */
?>
