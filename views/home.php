<?php
   session_start();
   
    include 'autoload.php';
    include './views/includes/header.inc.php';

?>



<body>
    <div class="min-h-screen flex items-center justify-center bg-slate-300">
        <div class="bg-white w-1/2 p-8 rounded space-y-3">
            <h1 class="text-3xl font-bold text-slate-400 text-center mb-6">Register</h1>
            <h3 class="text-center font-openSans">Create your account</h3>
            <div class="w-96 bg-red-200 h-12 m-auto flex justify-center items-center hidden" id="errorContainer">
               <h1 class="font-poppinsSans" id="errorText"></h1>
           </div>
            <form class="flex py-5 flex-wrap justify-center space-x-2" id="form">
                <input type="text" class="border border-gray-200 outline-none p-2 focus:border-lime-500 w-5/12 mb-1" placeholder="First Name" name="fname">
                <input type="text" class="border border-gray-200 outline-none p-2 focus:border-lime-500 w-5/12 mb-1" placeholder="Last Name" name="lname">
                <input type="email" class="border border-gray-200 w-10/12 mt-3 relative right-1 p-2 focus:border-lime-500 outline-none mb-1" placeholder="Email" name="email">
                <input type="password" class="border border-gray-200 w-10/12 mt-3 relative right-1 p-2 focus:border-lime-500 outline-none mb-1" placeholder="Password" name="Password">
                <input type="password" class="border border-gray-200 w-10/12 mt-3 relative right-1 p-2 focus:border-lime-500 outline-none mb-1" placeholder="Confirm Password" name="ConfirmPassword">
                <div class="w-10/12 h-10 flex items-center flex-start relative right-1">
                    <input type="file" accept="image" class="rounded-1" name="img">
                </div>
                <button class="w-3/12 bg-gray-300 border p-2 mb-4 mt-2 font-openSans" id="registerBtn" type="submit" name="submit">Register</button>

                <div class="w-full">
                    <h3 class="text-center my-2 font-poppinsSans">Already SignedUp?<a href="/?page=login" id="signUpRedirect" class="text-blue-500 ml-1">Login Now</a></h3>
                </div>
            </form>
        </div>
    </div>















    <script src="../public/js/index.js"></script>
</body>
</html>