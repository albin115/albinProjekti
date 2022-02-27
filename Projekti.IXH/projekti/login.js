
    
   
  function getlogin(){
    var regex = /^[a-z]{4,10}$/;
    var name = document.getElementById('fname').value;
    var nm = regex.test(name);
    var join=0;

    if(nm==true){
        name_error.style.opacity="0%";
        join++;
    }
    else{
        name_error.style.opacity="90%";
        join--;
    }

    var regex = /^[a-z]{4,10}$/;
    var lastname=document.getElementById('lname').value;
    var lm = regex.test(lastname);
   
    if(lm==true){
        lastname_error.style.opacity="0%";
        join++;
    }
    else{
        lastname_error.style.opacity="90%";
        join--;
    }
    

    
// function getlogin(){
    var regex = /^[a-z]{5,40}\d{1,10}[@]{1}[a-z]{4,10}[.]{1}[a-z]{3}$/;
    var email= document.getElementById('email').value;
    var em = regex.test(email);
    if(em==true){
        email_error.style.opacity="0%";
        join++;
    }
    else{
        email_error.style.opacity="90%";
        join--;
    }




// function getlogin(){

    var regex = /^[A-Z]{1}[a-z]{6}\d{1}$/;
    var password = document.getElementById('password').value;
    var pw = regex.test(password);

   

    if(pw==true){
        password_error.style.opacity="0%";
        join++;
    }
    else{
        password_error.style.opacity="90%";
        join--;
    }
     if(join==4){
         alert('te dhenat u ruajten me sukses');
         window.open("loginUser.php", "_blank");

     }
    else if(join<4){
    alert('Ju lutem mbusheni te gjitha');
    }
}


//     if(join==4){
//         success.style.opacity="100%";
//         success.style.padding="10% 22%";
//         success.style.margin="0% 9%";
//         success.style.width="40%";
//         success.style.height="50%";
//         name_error.style.opacity="0%";
//         lastname_error.style.opacity="0%";
//         email_error.style.opacity="0%";
//         password_error.style.opacity="0%";
//         submit.style.opacity="0%";
//         document.body.style.backgroundImage="URL('img/white.jpg')";
//         document.getElementsByClassName('form').style.backgroundImage="URL('img/white.jpg')";
        
        

//     }
//     else if(join<4){
//         success.style.opacity="0%";
//     }
// }
// function loginvalid(){
//     var email=document.getElementById('emailLogin').value;
//     var password=document.getElementById('PasswordLogin').value;

//     var emailSignup=document.getElementById('email').value;
//     var passwordSignup=document.getElementById('password').value;
//     var login=0;
//     if(email==emailSignup){
//         emailLogin_error.style.opacity='0%';
//         login++;
//     }
//     else{
//         emailLogin_error.style.opacity='100%';
//         login--;
//     }
//     if(password==passwordSignup){
//         PasswordLogin_error.style.opacity='0%';
//         login++;
//     }
//     else{
//         PasswordLogin_error.style.opacity='100%';
//         login--;
//     }
//     if(login==2){
//         window.open("homeLogin.php","_self");
//     }
//     else if(login==1){
//         emailLogin.style.border='0.1px solid green';
//         PasswordLogin_error.style.opacity='100%';
//         document.getElementById('loginvalid').style.backgroundColor="rgb(240, 113, 113)";
//     }
//    else{
//     emailLogin.style.border='0.1px solid red';
//     PasswordLogin.style.border='0.1px solid red';
//     PasswordLogin_error.style.opacity='100%';
//     emailLogin_error.style.opacity='100%';
//     document.getElementById('loginvalid').style.backgroundColor="rgb(240, 113, 113)";
//    }
// }
// function gotologin(){
//     var open=true;
//           if(open=true){
//             Login.style.opacity="100%";
//             Login.style.padding="10% 22%";
//             Login.style.margin="0% 9%";
//             Login.style.width="40%";
//             Login.style.height="50%";
//             name_error.style.opacity="0%";
//             lastname_error.style.opacity="0%";
//             email_error.style.opacity="0%";
//             password_error.style.opacity="0%";
//             submit.style.opacity="0%";
            
//             document.body.style.backgroundImage="URL('img/white.jpg')";
//             document.getElementById('success').style.backgroundImage="URL('img/white.jpg')";
//             document.getElementById('back').style.backgroundImage="URL('img/white.jpg')";
//             document.getElementById('back').style.color="white";
//             document.getElementById('submit').style.backgroundImage="URL('img/white.jpg')";
//             document.getElementById('password').style.backgroundImage="URL('img/white.jpg')";

//           }
          
//         else if(login==false){
//         success.style.opacity="0%";
//         }
// }
