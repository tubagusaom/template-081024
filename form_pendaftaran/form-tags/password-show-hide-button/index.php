<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Password Show-Hide Button</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="content">
         <div class="lock">
            <div class="fa fa-lock"></div>
         </div>
         <input type="password" placeholder="Enter Password" required>
         <span class="show-hide">
         <i class="fa fa-eye"></i>
         </span>
      </div>
      <script>
         const pass_field = document.querySelector("input");
         const show_btn = document.querySelector("i");
         show_btn.addEventListener("click", function(){
           if(pass_field.type === "password"){
             pass_field.type = "text";
             show_btn.classList.add("hide");
           }else{
             pass_field.type = "password";
             show_btn.classList.remove("hide");
           }
         });
      </script>
   </body>
</html>