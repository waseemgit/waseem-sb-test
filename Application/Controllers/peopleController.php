<?php
namespace Application\Controllers;
use Application\AbstractClasses\data;

class peopleController extends data
{   
    public $peopleDataFilePath = 'data/people.json';
    public $firstNames = array();
    public $surNames = array();
    public $totalRows = 0;
    private $defaultStructure = array (
                    'people' => 
                    array (
                      0 => 
                      array (
                        'firstname' => '',
                      ),
                      1 => 
                      array (
                        'surname' => '',
                      ),
                      2 => 
                      array (
                        'firstname' => '',
                      ),
                      3 => 
                      array (
                        'surname' => '',
                      ),
                      4 => 
                      array (
                        'firstname' => '',
                      ),
                      5 => 
                      array (
                        'surname' => '',
                      ),
                      6 => 
                      array (
                        'firstname' => '',
                      ),
                      7 => 
                      array (
                        'surname' => '',
                      ),
                      8 => 
                      array (
                        'firstname' => '',
                      ),
                      9 => 
                      array (
                        'surname' => '',
                      ),
                    ),
                  );


    public function __construct() 
    {
       $dataPeople = $this->getPeopleData();        
       $this->setPeopleData($dataPeople);
       $this->totalRows = count($this->firstNames);       
    }
    
    
    public function getPeopleData()
    {       
       $filePath = dirname(__FILE__).'/../../'.$this->peopleDataFilePath;
       $data = $this->getData($filePath);
       if(count($data)==0)
       {
           $data = $this->defaultStructure;
       }
       $dataPeople = $data['people'];
       return $dataPeople;
    }
    
    public function setPeopleData($data = array())
    {
        foreach ($data as $key => $value)
        {
            if(isset($value['firstname']))
            {
                $this->firstNames[] = $value['firstname'];
            }
            elseif(isset($value['surname']))
            {
                $this->surNames[] = $value['surname'];
            }
        }
    }
    
    public function save() 
    {       
        $filePath = dirname(__FILE__).'/../../'.$this->peopleDataFilePath;
        if(file_exists($filePath))
        {
            if(is_writable($filePath))
            {
                file_put_contents($this->peopleDataFilePath, json_encode($_POST));
                header('location:'.BASE_DIR);
                exit;
            }   
            else
            {
                echo 'Failed to write in a file. Permissions denied';exit;
            }
        }
        else
        {
            echo 'File doesnot exists';exit;
        }
    } 
}