<?php
/**
 * Description of employe
 *
 * @author albrecht
 */
class employe {
    private $_id;
    private $_name;
    private $_firstname;
    private $_birthdate;
    private $_gender;
    private $_salary;
    /**
     * 
     * @param type INTEGER $id 
     * @param type STRING $name
     * @param type STRING $firstname
     * @param type STRING $birthdate
     * @param type FLOAT $salary
     * @param type STRING $gender
     */
    public function __construct($id, $name, $firstname, $birthdate, $salary, $gender){
        $this->_name = $name;
        $this->_id = $id;
        $this->_firstname = $firstname;
        $this->_birthdate = $birthdate;
        $this->_salary = $salary;
        $this->_gender = $gender;
    }
    public function __toString(){
    return $this->_name. ' '.$this->_firstname;
    }
}


