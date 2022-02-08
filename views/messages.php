<?php
    session_start();

    if(!isset($_SESSION['unique_id'])){
        header("location: /?page=login");
    }
    include 'autoload.php';
    include './views/includes/header.inc.php';


    
    $msg = new msgController();

    $data = $msg->getReciverMessage();

    // $numRows = $data->num_rows;
    $rows = $data->fetch_assoc();

    





?>







<body>
 
    <div class="min-h-screen bg-gray-300 flex justify-center items-center">
        <div class="bg-white sm:w-4/6 md:max-w-lg space-y-4">
            <div class="h-20 flex items-center space-x-6 justify-between">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center text-xl ml-4 rounded cursor-pointer" >
                    <i class="fas fa-chevron-left text-gray-300 " id="moveBack"></i>
                </div>
                <!-- <div class="flex"> -->
                    <div class="h-14 flex items-center ">
                        <div class="w-12 h-12 rounded-full bg-purple-300">
                            <img src="<?php echo "/userImage/". $rows['img']?>" class="w-12 h-12 rounded-full">
                        </div>
                        
                        <div class="ml-4">
                            <h3 class="font-poppinsSans "><?php echo $rows['fname']?></h3>
                            <h4 id="status" class="font-poppinsSans text-[#5fdba7]"><?php echo $rows['status'] ?></h4>
                        </div>
                        
                    </div>
                <!-- </div> -->
                <div class="w-52 flex items-center h-14 justify-end">
                    <div class="w-10 h-10 bg-white rounded bg-gray-200 flex items-center justify-center cursor-pointer">
                        <i class="fas fa-video text-gray-400"></i>
                    </div>
                    <div class="w-10 h-10 bg-white rounded bg-gray-200 mx-4 flex items-center justify-center cursor-pointer">
                        <i class="fas fa-phone-alt text-gray-400"></i>
                    </div>
                </div>
            </div>

            <div class=" mt-4 h-96 w-auto overflow-auto scrollbar " id="messagesContainer">
                
            
            </div>
            <div class="bg-white h-20 flex items-center space-x-6">
                <div class="w-12 h-12 bg-gray-200 flex items-center justify-center ml-4 rounded ">
                    <i class="fas fa-upload text-gray-400"></i>
                </div>
                <form action="" id="messageForm">
                    <input type="text" class="w-80 h-12 outline-none  focus:border-2 border-lime-500 rounded px-2" placeholder="Message Here" name="Message" id="message">
                </form>

                <div class="w-12 h-12 bg-gray-200 rounded flex items-center justify-center cursor-pointer ml-2">
                    <i class="fas fa-paper-plane text-xl" id="sendMessage"></i>
                </div>
            </div>
        </div>
    </div>










<!-- <script src="../public/js/index.js"></script> -->
<script src="../public/js/message.js"></script>
</body>
</html>