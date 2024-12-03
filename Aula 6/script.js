document.addEventListener("DOMContentLoaded",()=>{
    var estado = document.getElementById('estado');
    estado.addEventListener("change", (obj)=>{
        carregaCidades(estado);
    })
});

function carregaCidades(campo){
    var estado = campo.options[campo.selectedIndex].value;
    let fd = new FormData();
    fd.append("estado", estado);
    fetch("http://localhost:81/vitor/Aula 6/cidades.php", {
        method: "POST",
        body: fd
    }).then(
        async resposta => {
            var cidades = await resposta.json();
            criaOptions(cidades);
        }
    ).catch(error=>console.log(error));
}

async function criaOptions(resposta) {
    var selectCidade = document.getElementById("cidade");
    limpaOptions(selectCidade);
    for(var cidade of resposta) {
        alert(cidade);
        var option = document.createElement("option");
        option.setAttribute("value", cidade);
        option.textContent = cidade;
        selectCidade.appendChild(option);
    }
}
function limpaOptions(campo) {
    var opt;
    while(opt=campo.firstChild) {
        campo.removeChild(opt);
    }
}