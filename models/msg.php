<?php


class msg extends Db {

    public function sendMsg($msg_sender_unique_id,$msg_reciver,$message){
        if(!empty($message)){
            $sql = "INSERT INTO `messages` (msg_sender_unique_id, msg_reciver_unique_id, msg)
                VALUES ('{$msg_sender_unique_id}','{$msg_reciver}','{$message}')";
            $query = $this->connect()->query($sql);
            
            return $query;

        }
    }
    public function getMessages($msg_sender_unique_id,$msg_reciver){
        $sql1 = "SELECT * FROM `messages` WHERE (msg_sender_unique_id = '{$msg_sender_unique_id}' 
            AND msg_reciver_unique_id = '{$msg_reciver}' OR (msg_sender_unique_id = '{$msg_reciver}' 
            AND msg_reciver_unique_id = '{$msg_sender_unique_id}'))";
        $query1 = $this->connect()->query($sql1);

        return $query1;


    }



}





?>