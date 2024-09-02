function QueryDistrict(){
    var pId = document.getElementById("province").value;
    var xhr = new XMLHttpRequest();
            xhr.open('POST', 'getDistrict.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('district').innerHTML = xhr.responseText;
                }
            };
            xhr.send('pid=' + pId);
        }
        function QueryWard(){
            var dId = document.getElementById("district").value;
            var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'getWard.php', true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            document.getElementById('ward').innerHTML = xhr.responseText;
                        }
                    };
                    xhr.send('did=' + dId);
                }