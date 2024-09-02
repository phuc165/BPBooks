var userInfomation=document.getElementById("user-information")

        function ShowInfomation(){
          if(  userInfomation.classList.contains("hidden")){
            userInfomation.classList.remove("hidden")
          }else{
            userInfomation.classList.add("hidden")
          }
        }