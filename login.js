const change1=document.getElementById("signup-form");
const change2=document.getElementById("changer1");
const change3=document.getElementById("changer2");
change2.addEventListener("click",display1);
change3.addEventListener("click",display2);

function display1(){
  change1.style.display="block";
  document.getElementById("login-form").style.display="none";
}
function display2(){
  change1.style.display="none";
  document.getElementById("login-form").style.display="block";
}
