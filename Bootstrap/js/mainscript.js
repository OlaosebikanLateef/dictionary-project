function submitSearchAjax(){
    var xmlhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.readystatechange = function(){
        console.log(this.responseText);
        
    }
    var  searchWord = document.getElementById  ('search').value;
    xmlhttp.open("POST", "config/wordSearch.php");
    xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("search="+searchWord);
}
