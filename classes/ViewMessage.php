<?php
    require_once "Db.php";

    class ViewMessage extends Db{
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function view_message(){
            //sql
            $sql = "SELECT * FROM messages";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute();
            //fetch
            $data= $stmt->fetchAll(PDO::FETCH_ASSOC);           
            //return
            return $data;
        }
    }

    //Performing like my boy Declan Rice 
    // $msg = new ViewMessage();
    // $msgs = $msg->view_message();

    // echo "<pre>";
    //     print_r($msgs);
    // echo "</pre>";

?>