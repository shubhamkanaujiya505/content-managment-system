function localDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET","ajax_info.text");
    xhttp.send();
}