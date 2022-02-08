<?php

class userController{

    

    public function addUser(){
        $users = new users();

        $fname = $_POST['fname'];
        $lname =  $_POST['lname'];
        $email = $_POST['email'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        

        $result = $users->create($fname,$lname,$email,$Password,$ConfirmPassword);
        

        return $result;

    }


    public function getCheckedUsers(){
        $checkUser = new users();

        $Email = $_POST['Email'];
        $Psw = $_POST['Pass'];


        $checked = $checkUser->checkUsers($Email, $Psw);
        
        return $checked;
    }

    public function getSelectedUsers(){
        $select = new users();
        $userSession = $_SESSION['unique_id'];

        $data = $select->selectUser($userSession);
        
         return $data;
    }


    public function getSearchedUsers(){
        $userSearchTerm = new users();

        $searchTerms = $_POST['seachVAlue'];

        $userSession = $_SESSION['unique_id'];

        // var_dump($userSession);

        $searchedUser = $userSearchTerm->searchUsers($searchTerms,$userSession);

        // echo $searchedUser;

        return $searchedUser;

    }
  

    public function getLoginOutUser(){
        $Userlogout = new users();

        $userLoginSession = $_SESSION['unique_id'];

        $logout = $Userlogout->logoutUser($userLoginSession);
        return $logout;


    }



    
}




?>