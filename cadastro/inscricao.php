<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$email = $_POST['email'];

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


echo "<span style = 'font-size: 20px';>Os dados enviados para o cadastro são os seguintes:</span> <br><br>";

echo "<span style = 'font-weight: bold';>Nome: </span>". $nome . "<br>";
echo "<span style = 'font-weight: bold';>CPF: </span>". $cpf . "<br>";
echo "<span style = 'font-weight: bold';>Idade: </span>". $idade . "<br>";
echo "<span style = 'font-weight: bold';>E-mail: </span>". $email . "<br>";

echo "<span style = 'font-weight: bold';>Rua: </span>". $rua . "<br>";
echo "<span style = 'font-weight: bold';>Número: </span>". $numero . "<br>";
echo "<span style = 'font-weight: bold';>Complemento: </span>". $complemento . "<br>";
echo "<span style = 'font-weight: bold';>Bairro: </span>". $bairro . "<br>";
echo "<span style = 'font-weight: bold';>Cidade: </span>". $cidade . "<br>";
echo "<span style = 'font-weight: bold';>Estado: </span>". $estado . "<br><br>";



if($idade > 15 && $cidade == "São Paulo"){
    echo "<span style='color:green;'>Você foi matriculado!</span>";
}
else if($idade <= 15 && $cidade == "São Paulo"){
    echo "<span style ='color:red;'>Você não foi matriculado por não ter idade mínima</span>";
}
else if($cidade != "São Paulo" && $idade > 15){
    echo "<span style = 'color:red;'>Você não foi matriculado por não residir em São Paulo</span>";
}
else{
    echo "<span style = 'color:red;'>Você não pode ser matriculado</span>";
}

?>