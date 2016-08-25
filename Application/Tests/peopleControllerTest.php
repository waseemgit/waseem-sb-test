<?php
use Application\Controllers\peopleController as pc;


class peopleControllerTest extends PHPUnit_Framework_TestCase
{
    private $mockArray = array (            
              0 => 
              array (
                'firstname' => 'Dummy',
              ),
              1 => 
              array (
                'surname' => 'Dummy',
              ),
              2 => 
              array (
                'firstname' => 'Dummy',
              ),
              3 => 
              array (
                'surname' => 'Dummy',
              ),
              4 => 
              array (
                'firstname' => 'Dummy',
              ),
              5 => 
              array (
                'surname' => 'Dummy',
              ),
              6 => 
              array (
                'firstname' => 'Dummy',
              ),
              7 => 
              array (
                'surname' => 'Dummy',
              ),
              8 => 
              array (
                'firstname' => 'Dummy',
              ),
              9 => 
              array (
                'surname' => 'Dummy',
              ),
            
          );
    private $mockFirstNames = array('Waseem','Chris','Alex','Jim','Natalie');
    private $mockLastNames = array('Akhtar','Kamara','test','test','test');


    public function testGetPeopleData()
    {   
        $people = new pc();
        $realArray = $people->getPeopleData();
        $this->assertInternalType('array',$realArray);
        $this->assertEquals(count($this->mockArray),count($realArray));
    }
    
    public function testSetPeopleData($data = array())
    {
        $data = $this->mockArray;
        $people = new pc();
        $people->firstNames = array();
        $people->surNames = array();
        $people->setPeopleData($data);        
        $this->assertEquals(count($this->mockFirstNames),count($people->firstNames));
        $this->assertEquals(count($this->mockLastNames),count($people->surNames));
    }
    
    public function testSave()
    {
        $people = new pc();
        $filePath = dirname(__FILE__).'/../../'.$people->peopleDataFilePath;        
        $this->fileExists($filePath);        
        $this->assertEquals(1, is_writable($filePath));
    }
}