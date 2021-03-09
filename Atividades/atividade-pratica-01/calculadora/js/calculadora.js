var digito=null;
var operador = null;
var result=null;
var resultA=null;
var testeOp=false;
function limpar(){
    document.getElementById('result').value = "";

    digito=null;
    operador = null;
    result=null;
    resultA=null;
    testeOp=false;
}


function enviaOperador(op){
    if(op=="=" && testeOp==false){        
        testeOp=true;
        opera();
    }else{
    operador = op;
    if(result==null){
        result=digito;   
    } 
    testeOp=false;
    atualiza(operador)
    }
}

function clicado(valor){
    digito = valor   
    atualiza(digito)
}

function opera(){
    resultA=result;
    if(operador=="+"){
        result = parseInt(result)+parseInt(digito);
    }else if(operador=="-"){
        result = parseInt(result)-parseInt(digito);
    }else if(operador=="*"){
        result = parseInt(result)*parseInt(digito);
    }else if(operador=="/"){
        result = parseInt(result)/parseInt(digito);
    }
    atualiza(result)
}

function atualiza(valor){
        document.getElementById('result').value = valor;
    
}