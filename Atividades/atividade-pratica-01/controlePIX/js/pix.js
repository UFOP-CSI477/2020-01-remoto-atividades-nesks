function atualizaBancos(){
fetch("https://brasilapi.com.br/api/banks/v1")
    .then(response => response.json())
    .then(data => atualizaSelect(data))
    .catch(error => console.error(error))
}

function atualizaSelect(data){
    let bancoSelect = document.getElementById("bancoSelect");
    
    for (let index in data){
        const {code, fullName} = data[index];

        let option = document.createElement("option");
        option.value = fullName;
        option.innerHTML = `${code}-${fullName}`;

        bancoSelect.appendChild(option);

    }
}

var saldo = 0.0;
historico = []
function Transacao(c,v,t,valor,data,banco){
    this.tipoChave=c;
    this.valorChave = v;
    this.tipoTransacao = t;
    this.valor = valor;
    this.data = data;
    this.banco = banco;

}
function setarValores(){
    const chave =  document.getElementById("chaveSelect");
    const chaveIndex = chave.selectedIndex;
    const tipoChave = chave.options[chaveIndex].value;

    const valorChave = document.getElementById("chaveInput").value;

    const tipo = document.getElementById("tipoSelect");
    const tipoIndex = tipo.selectedIndex;
    const tipoTransacao = tipo.options[tipoIndex].value;

    const valor = document.getElementById("valorInput").value;
    
    const data = document.getElementById("dataInput").value;

    const bank = document.getElementById("bancoSelect");
    const bankIndex = bank.selectedIndex;
    const banco = bank.options[bankIndex].value;
 
    const t = new Transacao(tipoChave, valorChave, tipoTransacao, valor, data, banco);
    historico.push(t);
    return t;
}

function transacao(){
    const t = setarValores();
    if(t.tipoChave!= "Selecione:" && t.valorChave != "" && t.tipoTransacao != "Selecione:" &&t.valor !="" && t.data != "" && t.banco !="Selecione:" && saldo != ""){
 
            if(t.tipoTransacao == "enviar"){
                    if(parseFloat(saldo)<parseFloat(t.valor)){
                        alert("Saldo insuficiente");
                        return;
                    }else{
                        saldo = saldo - parseFloat(t.valor);
                    }
            }else if(t.tipoTransacao=="receber"){
                saldo = parseFloat(saldo) + parseFloat(t.valor);
            } else{
                    alert("tipo de transação invalida.");
            }

            alert("saldo: R$"+parseFloat(saldo));
            document.getElementById('tabela-relatorio').innerHTML =""
            historico.forEach((t)=>{
                document.getElementById('tabela-relatorio').innerHTML += '<tr>\
                                                                                <td>'+t.tipoChave+'</td>\
                                                                                <td>'+t.valorChave+'</td>\
                                                                                <td>'+t.tipoTransacao+'</td>\
                                                                                <td>'+t.valor+'</td>\
                                                                                <td>'+t.data+'</td>\
                                                                                <td>'+t.banco+'</td>\
                                                                      </tr>';
            });

            document.getElementById('saldo').innerHTML = "Saldo: R$"+parseFloat(saldo);
    }else{
        alert("Hmmm, falta inserir algum campo!")
    }
}


