<?php

    include 'autoload.php';
    include './views/includes/header.inc.php';
?>







<body>
 
    <div class="min-h-screen bg-gray-300 flex justify-center items-center">
        <div class="bg-white sm:w-4/6 md:max-w-lg">
            <div class="h-20 flex items-center space-x-6 justify-between">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center text-xl ml-4 rounded cursor-pointer" >
                    <i class="fas fa-chevron-left text-gray-300 " id="moveBack"></i>
                </div>
                <!-- <div class="flex"> -->
                    <div class="h-14 flex items-center ">
                        <div class="w-12 h-12 rounded-full bg-purple-300">
                            <img src="" class="w-12 h-12 rounded-full">
                        </div>
                        <div class="ml-4">
                            <h3>Name Here</h3>
                            <h4>Active Now</h4>
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

            <div class="bg-blue-200 mt-4 h-96 overflow-auto scrollbar">
                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-tl-3xl rounded-r-3xl mb-2 ml-1">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-br-3xl rounded-l-3xl mb-2 ml-auto mr-2">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-tl-3xl rounded-r-3xl ml-1 mb-3">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
                <!-- //////////////// -->

                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-tl-3xl rounded-r-3xl mb-2 ml-1">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-br-3xl rounded-l-3xl mb-2 ml-auto mr-2">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
                <div class="bg-gray-200 h-auto bg-purple-500 w-2/4 rounded-tl-3xl rounded-r-3xl ml-1 mb-2">
                    <h2 class="py-2 px-4">heloo helo heloe heleo hello hellmsmso</h2>
                </div>
            </div>
            <div class="bg-white h-20 flex items-center space-x-6">
                <div class="w-12 h-12 bg-gray-200 flex items-center justify-center ml-4 rounded">
                    <i class="fas fa-upload text-gray-400"></i>
                </div>
                <input type="text" class="w-2/3 h-10 outline-none focus:border-2 border-lime-500 rounded px-2" placeholder="Message Here">

                <div class="w-12 h-12 bg-gray-200 rounded flex items-center justify-center cursor-pointer">
                    <i class="fas fa-paper-plane text-xl"></i>
                </div>
            </div>
        </div>
    </div>










<script src="../public/js/index.js"></script>
</body>
</html>