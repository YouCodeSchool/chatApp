<?php

class userController{

    // public function getALLEmployees(){
 
    //     $empl = new Employee();
    //     $datas = $empl->getAll();

    //     return $datas;
        
    // }

    public function addUser(){
        $users = new users();

        $fname = $_POST['fname'];
        $lname =  $_POST['lname'];
        $email = $_POST['email'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        

        $result = $users->create($fname,$lname,$email,$Password,$ConfirmPassword);
        
        

        print_r($result);

    }


    public function getCheckedUsers(){
        $checkUser = new users();

        $Email = $_POST['Email'];
        $Psw = $_POST['Pass'];

        $checked = $checkUser->checkUsers($Email, $Psw);

        print_r($checked);
    }

    public function getSelectedUsers(){
        $select = new users();
        $data = $select->selectUser();
      
        return $data;
    }


    public function getSearchedUsers(){
        $userSearchTerm = new users();

        $searchTerms = $_POST['seachVAlue'];

        $searchedUser = $userSearchTerm->searchUsers($searchTerms);

        // echo $searchedUser;

        return $searchedUser;

    }



    
}




?>