<?php
    require_once "Db.php";

    class InsertMessage extends Db{
        private $dbconn;

        function __construct(){
            $this->dbconn = $this->connect();
        }

        // a function to create a message
        public function insert_message($name, $em, $sub, $msg){
            //sql
            $sql = "INSERT INTO messages (name, email, subject, message ) VALUES(?,?,?,?)";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $data = $stmt->execute([$name, $em, $sub, $msg]);

            //return $data;
        }

    }

    //debug checkpoint: working like Bukayo Saka
    //$msg = new InsertMessage();
    //$msg1 = $msg->insert_message("Uffort Uwem", "uwem@example.com", "Testing testing", "I miss PHP ffs!")


?>