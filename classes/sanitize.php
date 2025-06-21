<?php 

    function sanitize($data){
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }



?>