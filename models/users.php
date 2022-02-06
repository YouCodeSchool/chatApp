<?php


class users extends Db{
  


    public function create($fname,$lname,$email,$Password,$ConfirmPassword){  

        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($Password) && !empty($ConfirmPassword)){
           if(filter_var($email, FILTER_VALIDATE_EMAIL)){
               $sql1 = "SELECT * From `users` WHERE email = '{$email}'";
                $query = $this->connect()->query($sql1);
                $numRows = $query->num_rows;
               if($numRows > 0){
                   echo "Email Already Exist";
               }else {

                    if($Password == $ConfirmPassword){
                        if(isset($_FILES['img'])){
                            $imgName = $_FILES['img']['name'];
                            $imgtmp_name = $_FILES['img']['tmp_name'];
                         //    $imgType = $_FILES['img']['type'];
     
                            $image = explode('.',$imgName);
                            $extention = array('jpg', 'jpeg','png');
                            $allowed = strtolower(end($image));
     
                            if(in_array($allowed,$extention)===true){
                                $currentTime = time();
                                $status = "Offline Now";
                                $unique_id = rand(time(),10000);
     
     
                                $newImgName = $currentTime.$imgName;
                             
                                if(move_uploaded_file($imgtmp_name, "userImage/".$newImgName)){
                                    $sql ="INSERT INTO `users`(fname,lname,email,password,ConfirmPassword,img,status,unique_id) 
                                    VALUES ('{$fname}', '{$lname}','{$email}','{$Password}','{$ConfirmPassword}','{$newImgName}','{$status}','{$unique_id}')";
                                    $this->connect()->query($sql);
                                    if($sql){
                                        echo 'sucess';
                                    }else {
                                        echo 'failed';
                                    }
     
                                }else {
                                    echo 'something went wrong';
                                }
     
                            }else {
                                echo 'Please Select an image';
                            }
     
                        }else {
                            echo 'Unspported type of images';
                        }

                    }else {
                        echo 'Passwords Are not matching';
                    }
                   
               }
           }
            
        }else {
            echo 'All fields Are required';
        }
      
    }


    public function checkUsers($email, $password){
        
        if(!empty($email) && !empty($password)){
            $sql = "SELECT * FROM `users` WHERE email = '{$email}' AND password = '{$password}'";
            $query = $this->connect()->query($sql);
            $numRow = $query->num_rows;

            if($numRow > 0){
                $result = $query->fetch_assoc();
                $statusLog = "Active Now";

                $sql2 = "UPDATE `users` set status = '{$statusLog}' WHERE id = '{$result['id']}'";
                $this->connect()->query($sql2);
                if($sql2){
                    echo 'sucess';
                }else {
                    echo 'failed';
                }
            }else {
                
                echo "Email or password Incorrect";

            }
        }else {
            echo 'All fields are required';
        } 
        
    }




    
    public function selectUser(){
        $sql3 = "SELECT * FROM `users`";
        $query = $this->connect()->query($sql3);

        return $query;

    }

    public function searchUsers($searchTerm){
        // $searchTerm = $_POST['searchTerm'];
        $sqls = "SELECT * FROM `users` WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'";
        $query1 = $this->connect()->query($sqls);

        $rows = $query1->num_rows;
        $output = '';

        

        if($rows > 0){
            $output = 'user is found';
        }else {
            $output = 'user not found';
        }

        return $output;
    }








}    






?>