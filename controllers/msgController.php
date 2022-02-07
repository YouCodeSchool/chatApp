<?php


class msgController {

    public function sentMessage(){
        $msg = new msg();
        
        $send_unique_id = $_SESSION['unique_id'];
        $msg_reciver_unique_id = $_COOKIE['reciver_msg_id'];
        $message = $_POST['Message'];


        $send = $msg->sendMsg($send_unique_id,$msg_reciver_unique_id,$message);

        return $send;
    }

   
    public function getMsg(){
        $message = new msg();
        
        $send_unique_id = $_SESSION['unique_id'];
        $msg_reciver_unique_id = $_COOKIE['reciver_msg_id'];

        $data = $message->getMessages($send_unique_id,$msg_reciver_unique_id);
        
        
        $numRows = $data->num_rows;
        $output = '';

        if($numRows > 0){
            while($results = $data->fetch_assoc()){
                if($results['msg_sender_unique_id'] === $send_unique_id){
                    $output .= '
                        <div class="bg-gray-200 h-auto bg-purple-500  rounded-tl-3xl rounded-r-3xl mb-2 ml-1 mt-2 ">
                            <h2 class="py-2 px-4 inline-block">'.$results['msg'].'</h2>
                        </div>
                    ';
                }else {
                    $output .= '
                        <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-br-3xl rounded-l-3xl mb-2 ml-auto mr-2">
                            <h2 class="py-2 px-4">'.$results['msg'].'</h2>
                        </div>
                    ';
                }
            }
        }

        return $output;

    }

}












?>