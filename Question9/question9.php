<?php

// Question 9


    Class Select {

        protected $colums;
        protected $table;

        public function __construct($colums = '*', $table = 'my_table') 
        {
            $this->colums = $colums;
            $this->table = $table;

        }

        public function __toString()
        {
            return "SELECT {$this->colums} FROM {$this->table}";
        }
    }

    $select = new Select('id, name', 'users');

    echo $select;
  

?>