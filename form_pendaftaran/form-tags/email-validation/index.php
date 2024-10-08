<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Email Validation in HTML & JavaScript | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <header>Email Validation Check in HTML CSS & JavaScript</header>
         <form action="#">
            <div class="field">
               <input onkeyup="check()" id="email" type="text" autocomplete="off" placeholder="Enter Email Address">
               <div class="icons">
                  <span class="icon1 fas fa-exclamation"></span>
                  <span class="icon2 fas fa-check"></span>
               </div>
            </div>
            <div class="error-text">
               Please Enter Valid Email Address
            </div>
            <button>Submit</button>
         </form>
      </div>
      <script>
         const email = document.querySelector("#email");
         const icon1 = document.querySelector(".icon1");
         const icon2 = document.querySelector(".icon2");
         const error = document.querySelector(".error-text");
         const btn = document.querySelector("button");
         let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
         function check(){
           if(email.value.match(regExp)){
             email.style.borderColor = "#27ae60";
             email.style.background = "#eafaf1";
             icon1.style.display = "none";
             icon2.style.display = "block";
             error.style.display = "none";
             btn.style.display = "block";
           }else{
             email.style.borderColor = "#e74c3c";
             email.style.background = "#fceae9";
             icon1.style.display = "block";
             icon2.style.display = "none";
             error.style.display = "block";
             btn.style.display = "none";
           }
           if(email.value == ""){
             email.style.borderColor = "lightgrey";
             email.style.background = "#fff";
             icon1.style.display = "none";
             icon2.style.display = "none";
             error.style.display = "none";
             btn.style.display = "none";
           }
         }
      </script>
   </body>
</html>