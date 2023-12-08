console.log('oass')

var keyword = document.getElementById('search_text');
var container = document.getElementById('result');

keyword.addEventListener('keyup', function(){

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText
        }
    }

    xhr.open('GET', 'coba.txt', true);
    xhr.send(); 

});
