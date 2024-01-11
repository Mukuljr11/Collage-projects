function ld(){
    const xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
        document.getElementById("but").innerHTML=this.responseText;
    }
    xhttp.open("GET","ajt.txt",true);
    xhttp.send();
}