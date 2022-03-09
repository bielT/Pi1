
<?php

function cadastro_bd($conn){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $rua = $_POST['rua'];
        $num = $_POST['num'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        $query = "INSERT INTO perfil VALUES ('$nome', '$sobrenome', '$email', '$rua', '$num', '$estado', '$cidade')"; 
        $perfil = mysqli_query($conn,$query);

        
        if($perfil){
            echo "Informações Salvas!";
        }
        else{
            echo "Error: Não foi possivel salvar as informações preenchidas";
        }

} /*Inserindo Dados do Cadastro.html*/
?>