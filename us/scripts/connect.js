
function send(){
 var err = document.getElementById("error");

 //check name
 var name = document.getElementById("name");
 if(name.value.length == 0){
  name.focus();
  err.innerText = "لطفا نامی وارد کنید.";
  return;
 }

 //check email
 var email = document.getElementById("email");
 if(! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
  err.innerText = "لطفا ایمیل صحیحی وارد کنید.";
  email.focus();
  return;
 }

 //check message
 var message = document.getElementById("message");
 if(message.value.length < 5){
  message.focus();
  err.innerText = "حداقل طول پیام 5 کاراکتر میباشد.";
  return;
 }

 //send message
 err.innerText = "";
 document.con.submit();
}