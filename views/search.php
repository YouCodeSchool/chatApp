<?php
    session_start();
    include 'autoload.php';

    $search = new userController();

    $data = $search->getSearchedUsers();


    $rows = $data->num_rows;
    

    $output = '';

    

    if($rows > 0){
        while($rows = $data->fetch_assoc()){
            $output .= '
                <div class="w-full h-32 bg-gray-200 mt-2 flex items-center relative cursor-pointer" id="chatMode" onclick="redirect('.$rows['unique_id'].')">
                <div class="flex justify-between space-x-4 ">
                    <div class="sm:ml-4 w-20 h-20 bg-blue-400 rounded-full ml-10 ">
                        <img src="../userImage/'. $rows['img'] .'"class="w-20 h-20 object-cover rounded-full">
                    </div>
                    <div class="ml-4">
                        <h3 class="mt-2 font-poppinsSans">'.$rows['fname'].'</h3>
                        <h4 class="pt-2 text-blue-700">Lorem Ipsum is simply dummy text </h4>
                    </div>
                    <div class="absolute right-3">
                        <h3>2min ago</h3>
                        <div class="w-8 h-8 bg-purple-700 rounded-full ml-4 mt-2 flex items-center justify-center">
                            <h3 class="text-white">2</h3>
                        </div>
                    </div>
                </div>
            </div>
        ';
        }
    }else {
        $output = '<div class="w-3/4 h-14 mt-10 mx-auto bg-red-200 flex items-center justify-center rounded">
            <h1 class=" font-poppinsSans">No user with this Name exist</h1>
        </div>';
        
    }
    echo $output;




?>