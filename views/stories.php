<?php
    include 'autoload.php';


    $userData = new userController();

    $data = $userData->getSelectedUsers();
    
    $numRows = $data->num_rows;

    $stories  = '';

    if($numRows > 0){
        while($row = $data->fetch_assoc()){
            $stories .= '
                    <div id="stories_container">
                        <div class="w-16 h-16 bg-blue-200 rounded-full border-1 border-orange-200 ring ring-offset-1 ring-orange-200">
                         <img src="../userImage/' .$row['img'] .'" class="w-16 h-16 object-cover rounded-full">
                        </div>
                        <h3 class="text-center pt-2">'.$row['fname'].'</h3>
                    </div>
                ';
        }
    }

    echo $stories;
    if($stories != ''){
        echo 'good';
    }
    // print_r($row);






?>