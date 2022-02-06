<?php
    session_start();
    include './views/includes/header.inc.php';
    
    include './autoload.php';

    $userData = new userController();

    $data = $userData->getSelectedUsers();
    $numRows = $data->num_rows;

// 
?>


<body>

<?php




?>
    
    <div class="min-h-screen bg-gray-200 flex justify-center items-center">
        <div class=" sm:w-4/6 md:max-w-lg rounded bg-white shadow-2xl   rounded-3xl ">
            <div class="flex justify-between w-full items-center relative" id="containerBarMess">
                <form class="w-10/12 right-0 h-full absolute flex items-center hidden" id="searchbar">
                    <input type="text" class="w-10/12 py-4 rounded-xl outline-none border-2 focus:border-lime-500 px-4" placeholder="Search For users Here" id="search" name="seachVAlue">
                </form>
                <div class="w-14 h-10 bg-gray-100 flex justify-center items-center rounded my-2 mx-2" id="searchIconContainer">
                    <i class="fas fa-search text-gray-300 cursor-pointer" id="searchIcon"></i>
                </div>
                <h1 class="">Messages</h1>
                <div class="w-14 rounded-full bg-purple-500 h-14 m-2">
                    <img src="#">
                </div>
            </div>
            <div class="w-full bg-gray-100 h-40 overflow-x-auto overflow-y-hidden scrollbar" id="">
                <h3 class="p-4 font-poppinsSans text-gray-300">Stories</h3>
                
                <div class="flex justify-center items-center space-x-6" id="stories">
                

                </div>
            </div>

            <div class="overflow-auto h-96 scrollbar">
                <!-- /////////////////////////////////////// -->
                    <?php
                        if($numRows > 0){
                            while($res = $data->fetch_assoc()){
                                // print_r($res);
                    ?>
                <div class="w-full h-32 bg-gray-200 mt-2 flex items-center relative cursor-pointer" id="chatMode">
                    <div class="flex justify-between space-x-4 ">
                        <div class="sm:ml-4 w-20 h-20 bg-blue-400 rounded-full ml-10 ">
                            <img src="<?php echo "../userImage/". $res['img'] ?>" class="w-20 h-20 object-cover rounded-full">
                        </div>
                        <div class="ml-4">
                            <h3 class="mt-2 font-poppinsSans"><?php echo $res['fname']?></h3>
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
                <?php
                            }
                        }
                ?>
            </div>


            <div class="h-20 flex items-center justify-center space-x-8">
                <div class="flex flex-col items-center  w-2/12">
                    <i class="fas fa-comments text-2xl text-gray-400"></i>
                    <a href="" class="cursor-pointer font-openSans pt-1">Messages</a>
                </div>
                <div class="flex flex-col items-center w-2/12 ">
                    <i class="fas fa-bell text-2xl text-gray-400"></i>
                    <a href="" class="cursor-pointer font-openSans pt-1">Notification</a>
                </div>
                <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center " id="">
                    <i class="fas fa-plus text-white text-3xl cursor-pointer"></i>
                </div>
                <div class="flex flex-col items-center w-2/12 ">
                    <i class="fas fa-phone-alt text-2xl text-gray-400"></i>
                    <a href="" class="cursor-pointer font-openSans pt-1">Calls</a>
                </div>
                <div class="flex flex-col items-center w-2/12 ">
                <i class="fas fa-users text-2xl text-gray-400"></i>
                    <a href="" class="cursor-pointer font-openSans pt-1">Contact</a>
                </div>
            </div>
                
        </div>
    </div>





<script src="../public/js/style.js"></script>
<script src="../public/js/render.js"></script>
<script src="../public/js/search.js"></script>
</body>
</html>

