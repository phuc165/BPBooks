
 var loginName= document.getElementById("login-name")
 var loginPass= document.getElementById("login-pass")
 var registername= document.getElementById("register-name")
 var registerPass= document.getElementById("register-pass")

function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

function validateLogin(){
    
   
   
    const tenDigitPattern = /^\d{10}$/;
    const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if((emailPattern.test(loginName.value)||tenDigitPattern.test(loginName.value)) && (loginPass.value.length >=8 && loginPass.value.length <=16)){
        document.getElementById("login-button").disabled = false;
        
    }else{
        document.getElementById("login-button").disabled = true;
       

    }
}

function validateRegisting(){
    
   
    

    const tenDigitPattern = /^\d{10}$/;
    const emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if((emailPattern.test(registername.value)||tenDigitPattern.test(registername.value)) && (registerPass.value.length >=8 && registerPass.value.length <=16)){
        document.getElementById("regist-button").disabled = false;
        
    }else{
        document.getElementById("regist-button").disabled = true;
        

    }
}