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




var loginData=[
    {
        userName:"admin",
        password:"admin"
    },
    {
        userName:"user",
        password:"user"
    }
]
 var loginName= document.getElementById("login-name")
 var loginPass= document.getElementById("login-pass")


function validateLogin(){
    var name = loginName.value;
    var pass = loginPass.value;
    var namecheck = loginData.find(logName=>logName.userName==name)
    if(namecheck!=undefined){
        if(namecheck.password==pass){
            alert("dang nhap thanh cong")
        }else{
            alert("dang nhap that bai")
        }
    }else{
        alert("dang nhap that bai")
    }
    console.log("chek") 
}

var regisNum = document.getElementById("number");
var regisPass = document.getElementById("pass");
const regex = /[!@#$%^&*(),.?":{}|<>]/g;
const str = "Hello, World!";
const result = str.match(regex);
function checkregis(){
    if (checkNum() == true){
        alert
    }
}
function checkNum(){

}
