<?php
namespace Application\Controllers;
use Application\Lib\Template as T;
use Application\InterfaceClasses\data;

/*
 * Class used for view
 */

class view implements data
{
    private $params = array(); 
    
    /*
     * Constructor to gets and set parameters array
     */
    function __construct($params) 
    {
        $this->params   =   $params;
    }    
    
    /*
         * This function is used as default function for controller
         */
    public function index()
    {          
        $viewName = "peopleForm";
        $people = new peopleController();
        $viewData['firstNames'] = $people->firstNames;
        $viewData['surNames'] = $people->surNames;  
        $viewData['total'] = $people->totalRows;  
        $this->showHTML($viewData, $viewName);              
    }
    
    public function showHTML($data, $viewName) 
    {
        //Passing data to Template class with View name
        $objT = new T($data);  
        $objT->main($viewName);
    }
}
/*
End of class
 *  */
?>