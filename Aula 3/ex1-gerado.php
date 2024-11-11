<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação automática de Formulário</title>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('formCadastro');
            form.addEventListener('submit', (e: Event) => {
                e.preventDefault();
                const nomeCampo = document.getElementById('nome');
                const nomeStr = nomeCampo.value;
                if(nomeStr.trim()==""){
                    alert("Você deve preencher o campo 'Nome'");
                    e.preventDefault();
                }

                const idadeCampo = document.getElementById('idade');
                const idadeStr = nomeInput.value;
                if(idadeStr.trim()=="" && !validaIdade(idadeCampo)){
                    alert("Você deve preencher o campo 'Idade'");
                    e.preventDefault();
                }

                const sexoCampo = document.getElementsByName('sexo');
                var validaCamposexo = false;
                for(index in sexoCampo){
                    if(sexoCampo[index].checked){
                        validaCamposexo=true;
                    }
                }
                if(!validaCamposexo) {
                    alert("Você deve preencher o campo 'Sexo'");
                    e.preventDefault();
                }

                const cidade_nascimentoCampo = document.getElementById('cidade_nascimento');
                const cidade_nascimentoStr = cidade_nascimentoCampo.value;
                if(cidade_nascimentoStr.trim()==""){
                    alert("Você deve preencher o campo 'Cidade de Nasc'");
                    e.preventDefault();
                }

                const estado_nascimentoCampo = document.getElementById('estado_nascimento');
                const estado_nascimentoIndex = estado_nascimentoCampo.selectedIndex;
                if(estado_nascimentoIndex==-1){
                    alert("Você deve preencher o campo 'Estado de Nasc'");
                    e.preventDefault();
                }


                const cpfCampo = document.getElementById('cpf');
                const cpfStr = cpfCampo.value;
                if(cpfStr.trim()=="" || !validaCpf(cpfCampo)){
                    alert("Você deve preencher o campo 'CPF'");
                    e.preventDefault();
                }
       
            });
        });
    </script>
</head>
<body>
    <form method="POST" action="cadastro.php" id="formCadastro">
        <div class="itemWrapper">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome."/>
        </div>
        <div class="itemWrapper">
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" placeholder="Informe sua Idade."/>
        </div>
        <div class="itemWrapper">
            <label>Sexo:</label>
            <input type="radio" id="sexo_M" name="sexo" value="M">
            <label for="sexo_M">Masculino</label><br>&nbsp;&nbsp;
            <input type="radio" id="sexo_F" name="sexo" value="F">
            <label for="sexo_F">Feminino</label><br>&nbsp;&nbsp;
            <input type="radio" id="sexo_O" name="sexo" value="O">
            <label for="sexo_O">Outros</label>
        </div>
        <div class="itemWrapper">
            <label>Esporte Preferido:</label>
            <input type="checkbox" id="esporte_preferido_F" name="esporte_preferido" value="F">
            <label for="esporte_preferido_F">Futebol</label>&nbsp;&nbsp;
            <input type="checkbox" id="esporte_preferido_V" name="esporte_preferido" value="V">
            <label for="esporte_preferido_V">Vôlei</label><br>&nbsp;&nbsp;
            <input type="checkbox" id="esporte_preferido_N" name="esporte_preferido" value="N">
            <label for="esporte_preferido_N">Natação</label><br>&nbsp;&nbsp;
            <input type="radio" id="esporte_preferido_O" name="esporte_preferido" value="O">
            <label for="esporte_preferido_O">Outros</label>
        </div>
        <div class="itemWrapper">
            <label for="cidade_nascimento">Cidade de Nasc:</label>
            <input type="text" id="cidade_nascimento" name="cidade_nascimento" placeholder="Informe a cidade que você nasceu."/>
        </div>
        <div class="itemWrapper">
            <label for="estado_nascimento">Estado de Nasc:</label>
            <select id="estado_nascimento" name="estado_nascimento">
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
                <option value="ES">Espírito Santo</option>
                <option value="MG">Minas Gerais</option>
                <option value="O">Outros</option>
            </select>
        </div>
        <div class="itemWrapper">
            <label for="cpf">CPF:</label>
            <input type="number" id="cpf" name="cpf" placeholder="Informe seu CPF."/>
        </div>
        <div class="itemWrapperBTNsSubmitReset">
            <button type="submit" id="botao_enviar" name="enviar">Enviar</button>&nbsp;&nbsp;
            <button type="reset" id="botao_limpar_form" name="reset">Limpar Formulário</button>
        </div>
    </form>
</body>
</html>