function quanHuyen(){
    var pId = document.getElementById("tinhthanh").value;
    var xhr = new XMLHttpRequest();
            xhr.open('POST', 'getQuanHuyen.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('quanhuyen').innerHTML = xhr.responseText;
                }
            };
            xhr.send('pid=' + pId);
        }
function phuongXa(){
    var dId = document.getElementById("quanhuyen").value;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'getPhuongXa.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('phuongxa').innerHTML = xhr.responseText;
        }
    };
    xhr.send('did=' + dId);
}