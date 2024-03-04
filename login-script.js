document.addEventListener("DOMContentLoaded", function () {
   const loginContainer = document.getElementById("login-container");
   const registrationContainer = document.getElementById("registration-container");
   const registerBtnLogin = document.getElementById("register-btn-login");
   const backToLoginBtn = document.getElementById("back-to-login-btn");

   registerBtnLogin.addEventListener("click", () => {
      loginContainer.classList.add("slide-out");
      registrationContainer.style.display = "block";
      setTimeout(() => {
         registrationContainer.classList.add("slide-in");
      }, 50);
   });

   backToLoginBtn.addEventListener("click", () => {
      registrationContainer.classList.remove("slide-in");
      setTimeout(() => {
         loginContainer.classList.remove("slide-out");
         registrationContainer.style.display = "none";
      }, 500);
   });
});


// <?php

// echo ' <script type="text/javascript">

// document.addEventListener("DOMContentLoaded", function () {
//    const loginContainer = document.getElementById("login-container");
//    const registrationContainer = document.getElementById("registration-container");
//    const registerBtnLogin = document.getElementById("register-btn-login");
//    const backToLoginBtn = document.getElementById("back-to-login-btn");

//    registerBtnLogin.addEventListener("click", () => {
//       loginContainer.classList.add("slide-out");
//       registrationContainer.style.display = "block";
//       setTimeout(() => {
//          registrationContainer.classList.add("slide-in");
//       }, 50);
//    });

//    backToLoginBtn.addEventListener("click", () => {
//       registrationContainer.classList.remove("slide-in");
//       setTimeout(() => {
//          loginContainer.classList.remove("slide-out");
//          registrationContainer.style.display = "none";
//       }, 500);
//    });
// });

// ';

// ?>
