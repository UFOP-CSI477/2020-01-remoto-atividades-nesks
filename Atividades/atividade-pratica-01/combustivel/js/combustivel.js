historico = []

function Veiculo(combustivel, km){
    this.combustivel = combustivel;
    this.km = km;
    this.media = parseFloat(km)/parseFloat(combustivel)
}


function cadastrar(){
  const combustivel = document.getElementById('inputCombustivel').value;
  const km = document.getElementById('inputKm').value;
    if(combustivel != "" && km != ""){
        const v = new Veiculo(combustivel, km);
        historico.push(v);
        alert("(KM/L) = "+v.media);
        limpar();
    }else{
        alert("Algum valor incorreto!");
    }

}


function limpar(){
 document.getElementById('inputCombustivel').value = ""
   document.getElementById('inputKm').value = ""

}

function relatorio(){
    document.getElementById('tabela-relatorio').innerHTML = ""
    historico.forEach((t)=>{
        document.getElementById('tabela-relatorio').innerHTML += '<tr>\
                                                                        <td>'+t.combustivel+'</td>\
                                                                        <td>'+t.km+'</td>\
                                                                        <td>'+t.media+'</td>\
                                                              </tr>';
    });
    var combustivel=0;
    var km=0;
    document.getElementById('tabelaTotal-relatorio').innerHTML = ""



    historico.forEach(t => {        
        combustivel += parseFloat(t.combustivel);
        km += parseFloat(t.km);
    });
        document.getElementById('tabelaTotal-relatorio').innerHTML += '<tr>\
                                                                        <td>'+combustivel+'</td>\
                                                                        <td>'+km+'</td>\
                                                                        <td>'+parseFloat(parseFloat(km)/parseFloat(combustivel))+'</td>\
                                                              </tr>';
    


}