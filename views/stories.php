<?php
    include 'autoload.php';


    $userData = new userController();

    $data = $userData->getSelectedUsers();
    
    $numRows = $data->num_rows;

    $stories  = '';

    if($numRows > 0){
        while($row = $data->fetch_assoc()){
            $stories .= '
                    <div>
                        <div class="w-16 h-16 bg-blue-200 rounded-full border-2 border-orange-200 ring-offset-4">
                         <img src="../userImage/' .$row['img'] .'" class="w-16 h-16 object-cover rounded-full">
                        </div>
                        <h3 class="text-center pt-2">'.$row['fname'].'</h3>
                    </div>
                ';
        }
    }

    echo $stories;
    // print_r($row);






?>