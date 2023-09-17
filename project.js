const login=document.getElementById("login-form");
const signup=document.getElementById("signup-form");
const goLogin=document.getElementById("change-to-login");
const goSignup=document.getElementById("change-to-signup");


goSignup.addEventListener("click",signupFunction);
goLogin.addEventListener("click",loginFunction);

function signupFunction(){
 login.style.display="none";
 signup.style.display="block"; 
}
function loginFunction(){
    login.style.display="block";
    signup.style.display="none"; 
   }



