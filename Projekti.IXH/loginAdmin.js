function loginvalid(){
    var email=document.getElementById('email').value;
    var password=document.getElementById('pasword').value;

    var emailSignup=document.getElementById('email').value;
    var passwordSignup=document.getElementById('password').value;
    var login=0;
    if(email==emailSignup){
        login++;
    }
    else{
        login--;
    }
    if(password==passwordSignup){
        login++;
    }
    else{
        login--;
    }
    if(login==2){
        window.open("homeLogin.php","_self");
    }
}