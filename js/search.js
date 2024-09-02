function Search(){
    var keyword = document.getElementById("search").value;
    if(keyword==""){
        document.getElementById('resultList').classList.replace("show","hidden");
        console.log('hide')
    }else{

        document.getElementById('resultList').classList.replace("hidden","show");
    }
    var xhr = new XMLHttpRequest();
            xhr.open('POST', 'search.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('resultList').innerHTML = xhr.responseText;
                }
            };
            xhr.send('keyword=' + keyword);
        }

