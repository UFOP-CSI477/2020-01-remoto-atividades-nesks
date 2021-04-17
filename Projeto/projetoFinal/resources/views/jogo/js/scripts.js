var x = "a";
var cont= 0;
function tecla(){
    if(String.fromCharCode(event.keyCode)==x){
        alert("digitou corretamente mas errou: "+cont+" vezes");
        cont=0;
    }else{
    cont++;
    }

}
document.body.onkeypress = tecla;

