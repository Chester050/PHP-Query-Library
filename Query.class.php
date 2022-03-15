<?php

    class Query{

        // PASS THE TABLE , THE WHERE = ? AS SPECIFIER , AND THE IDENTIFIER AS ELEM
        function __construct($table , $specifier ,  $elem)
        {
            $this->elem = $elem;
            $this->specifier = $specifier;
            $this->table = $table;
            
        }
        public function select_data(){
         
            return "SELECT * FROM $this->table WHERE $this->specifier = '$this->elem'";
        }

        public function delete_data(){

            return "DELETE FROM $this->table WHERE $this->specifier = '$this->elem'";
        }

        // WHEN USING, PASS THE CONNECTION AS PARAMETER
        public function execute_delete($conn){
            return $conn->query($this->delete_data());
        }

        public function execute_select($conn){

            return $conn->query($this->select_data());
        }
        
    }


//  SHORTCUT FOR $_POST , SCRIPT AND $_SESSION

function P($v){
    return $_POST[$v];
}

function S($str){
    return "<script>" . $str .  "</script>";
}

function SES($v){

    return $_SESSION[$v];
}
