<?php

    include 'autoload.php';
    include './views/includes/header.inc.php';

?>


<body>
   <div class="w-full min-h-screen bg-gray-200 items-center flex justify-center">
       <div class="w-4/12 bg-white space-y-4">
           <h1 class="font-openSans text-center text-2xl text-gray-400 mt-2">Login</h1>
           <div class="w-96 bg-red-200 h-12 m-auto flex justify-center items-center hidden" id="errorContainer">
               <h1 class="font-poppinsSans" id="errorText"></h1>
           </div>
           <form class="items-center flex justify-center flex-wrap space-y-4" id="loginForm">
                <input type="email" class="w-10/12 border focus:border-lime-500 outline-none py-2 px-3 mt-2" placeholder="Email Here" name="Email">
                <input type="password" class="w-10/12 border focus:border-lime-500 outline-none py-2 px-3 mt-2" placeholder="password Here" name="Pass">
                <div>
                    <button class="w-32 bg-gray-200 p-2 mb-1" id="loginBtn" type="submit">Login</button>
                </div>
                <div class="w-full">
                    <h3 class="text-center my-2 font-poppinsSans">Not SignedUp?<a href="/?page=home" id="signUpRedirect" class="text-blue-500 ml-1">SignUp Now</a></h3>
                </div>
           </form>
       </div>
   </div>

   <script src="../public/js/login.js"></script>
</body>
</html>