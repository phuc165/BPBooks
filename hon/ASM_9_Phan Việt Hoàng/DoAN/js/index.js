var showmoreBtn = document.getElementById("showmore")
var hideBtn = document.getElementById("hide")
var images=[];
        var index =0;
        var sohinh =4;
        for(var i=1;i <=sohinh;i++){
            images[i]=new Image();
            images[i].src="./Image/home" +i +".png"
        }
        function next(){
            index++;
            if(index>=images.length) index =0;
            var  anh = document.getElementById("anh")
            anh.src = images[index].src;
 
        }
        function autoSlideShow(){
            setInterval("next()",5000);
        }

function ShowAll(){
    items = document.getElementsByClassName("product-single")
    for(var i=0;i<items.length;i++){
        if(items[i].classList.contains("hidden")){
            items[i].classList.replace("hidden","show")
        }
    }
    
    showmoreBtn.classList.add("hidden")
    hideBtn.classList.remove("hidden")
    

    
 
}


function HideItem(){
    items = document.getElementsByClassName("product-single")
    for(var i=0;i<items.length;i++){
        if(items[i].classList.contains("show")){
            items[i].classList.replace("show","hidden")
        }
    }
    showmoreBtn.classList.remove("hidden")
    hideBtn.classList.add("hidden")

}
  
