<?php


if(isset($_POST['submit']))
{

include_once('config.php');

$Nome = $_POST['nome'];
$Telefone = $_POST['telefone'];
$Celular = $_POST['celular'];
$Email = $_POST['email'];
$Email_recuperacao = $_POST['email_recuperacao'];
$Data_nasc = $_POST['data_nasc'];
$cidade_nasc = $_POST['cidade_nasc'];
$Bairro_nasc =$_POST['bairro_nasc'];
$CPF = $_POST['cpf'];
$RG = $_POST['rg'];

$result = mysqli_query($conexao, "INSERT INTO users(nome,telefone1,telefone2,email,email_recuperacao,data_nasc,cidade_nasc,bairro_nasc,,cpf,RG) values('$nome','$email','$data_nasc','$genero', '$cpf')");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <style>
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: blue;
        }

        .field{
            border: 1px solid #ddd;
            padding: 30px;
            align-items: center;
            margin: 20px;
            display: inline;
            border-radius: 36px 35px 35px 10px;
            -webkit-border-radius: 36px 35px 35px 10px;
            -moz-border-radius: 36px 35px 35px 10px;
        }
        .legend {
            color: #ddd;
            text-align: center;
            display: flex;
        }
        .cadastrar {
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: 0;
            display: flex;
        }

        .inputUser {
            border-radius: 20px;
            ;
        }

        .inputtext{
            color: #ddd;
        }

        .submit-button {
            justify-content: center;
            border-radius: 15px;
            display: flex;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="box">
        <fieldset class="field">
            <legend class="legend">FORMULARIO</legend>
                <label class="cadastrar">Cadastre-se</label>
                    <br>
                        <label for="Nome" class="inputtext">nome completo</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  
                            <br>
                            <label for="Tefefone" class="inputtext">telefone1</label>
                            <br>
                            <input type="Telefone" id="tefone1" class="inputUser" required/>
                            <br>
                            <label for="Celular" class="inputtext">celular</label>
                            <br>
                            <br>
                            <input type="Celular" id="celular" class="inputUser" requirede/>
                           <label for="Email" class="inputtext">email</label>
                            <br>
                            <input type="text"  name="email" id="email" class="inputUser" required/>  
                            <br>
                            <label for="Email_recuperacao" class="inputtext">email_recuperacao</label>
                            <br>
                            <inpult type="Email_recuperacao" id="emal_rec" class="inputUser" required/>
                            <br>
                           <label for="Data_nasc" class="inputtext">Data de Nascimento</label>
                           <br>
                           <br>
                          <input type="Data_nasc" id="data_nasc" class="inputUser" required/>
                           <br>
                          <label for="Cidade_nasc" class="inputtext">cidade_nasc</label>
                          <br>
                          <br>  
                          <input type="Cidade_nasc"  id="cidade_nasc" class="inputUser" required/>
                          <br>
                          <br>
                          <input type="Bairro_nasc" id="bairro_nasc" class="inputUser" required/>
                          <br>
                          <label for="Bairro_nasc" class="inputtext">bairro Nascimento</label>
                          <br>
                          <br>
                          <label for="CPF" class="inputtext">cpf</label>
                          <br>
                          <br>
                          <input type="text" id="cpf" name="cpf" class="inputUser" required/>
                          
                          <br>
                          <label for="RG" class="inputtext">RG</label>
                           <br>
                           <br>
                           <input type="text" id="RG" class="inputUse" required/>
                           <br>
                           <label for="Dta_emissao_RG" class="inputtext">data_emissao_RG</label>
                            <br>
                            <br>
                           <inpult type="Data_emissao_RG" id="data_emissao_RG" class="inputUse" required/>
                            <br>
                           
                         <p class= "inputtext">endereço<p>
                            <input type="Endereço" id="endereço" class="inpultUser" required/>
                              <br>  
                            <label for="Rua" class="inputtex">rua</label>
                            <br>
                            <br>
                            <inpul tytex="Rua" id="rua" class="inputUser" required/>
                            <br>
                            <label for ="Numero" class="inputtex" >numero</label>
                             <br>
                             <br>
                             <inpult type="Numero" id="numero" class="inputUse" required/>
                             <br>
                             <label for ="Complemento" class="inputtex" >complemento</label>
                             <br>
                             <br>
                             <inpul tytex="Complemento" id="complemento" class="inputUser" required/>
                            <br>
                            <label for ="Bairro" class="inputtex" >bairro</label>
                             <br>
                             <br>
                             <inpul tytex="Bairro" id="bairro" class="inputUser" required/>
                            <br>
                            <label for ="Cidade" class="inputtex" >cidade</label>
                             <br>
                             <br>
                             <inpul tytex="Cidade" id="cidade" class="inputUser" required/>
                            <br>
                            <label for ="Cep" class="inputtex" >cep</label>
                             <br>
                             <br>
                             <inpul tytex="Cep" id="cep" class="inputUser" required/>
                            <br>
                            <label for ="Nome_usuário" class="inputtex" >nome_usuário</label>
                             <br>
                             <br>
                             <inpul tytex="Nome_usuário" id="nome_usuário" class="inputUser" required/>
                            <br>
                            <label for ="Senha_usuário" class="inputtex" >senha_usuário</label>
                             <br>
                             <br>
                             <inpul tytex="Senha_usuário" id="senha_usuário" class="inputUser" required/>
                            <br>
                            <label for ="profissão" class="inputtex" >profissão</label>
                            <br>
                            <br>
                            <inpul tytex="Profissão" id="profissão" class="inputUser" required/>
                            <br>
                            <label for ="Nível_escolaridade" class="inputtex" >nível_escolaridade</label>
                            <br>
                            <br>
                            <inpul tytex="Nível_escolaridade" id="nível_escolaridade" class="inputUser" required/>
                            <br>
                            <label for ="Estado civil" class="inputtex" >estado civil</label>
                            <br>
                            <br>
                           <input type="Estado civil" id="estado civil" class="inputUser" required/>
                            <br>
                            <label for ="Altura" class="inputtex" >altura</label>
                            <br>
                            <br>
                            <input type="Altura" id="altura" class="inputUser" required/>
                            <br>
                            <label for ="Peso" class="inputtex" >peso</label>
                            <br>
                            <br>
                            <input type="Peso" id="peso" class="inputUser" required/>

                        <p class="inputtext">GENERO</p>
                            <input type="radio" id="masculino"  name="genero"  value="masculino" required/>
                            <label for="masculino">masculino</label>
                            <br>
                            <input type="radio" id="feminino"  name="genero"  value="feminino" required/>
                            <label for="feminino">feminino</label>
                            <br>
                            <input type="radio" id="naores"  name="genero"  value="naores" required/>
                            <label for="feminino">prefiro nao responder</label>
                            <br>
                            <br>
                        <label for="cpf" class="inputtext">CPF</label>
                        <br>
                            <input type="text"  name="cpf" id="cpf" class="inputUser" required/>
                            <br>
                            <br>
                            <input type="submit" name="submit" id="submit" class="submit-button"/>
            
        </fieldset>
        </div>
    </form>

</body>
</html>
