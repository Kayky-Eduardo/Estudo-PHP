<?php
# deste tipo
$carro = array();

# simplificado
$carro = ["saveiro", "volvo", "Toyota"];

# Múltiplas linhas
$dedo = [
    "mindinho",
    "indicador",
    "dedão",
    "e assim vai"
];

# Criando com chaves
$carro = [
    0 => "saveiro",
    1 => "volvo",
    2 => "Toyota"
];

$meucarrro = [
    "marca" => "Ford",
    "modelo" => "Mustang",
    "ano" => 1964
];

# Dá para criar array vazia e adicionar chave e valor depois
$meu_carro = [];
$meu_carro["marca"] = "ford";
$meu_carro["modelo"] = "Mustang";
$meu_carro["ano"] = 1964;

# Acessando itens

echo $meu_carro["marca"];

function funcao(){
    echo "<br>Eu vim de uma função!";
}

$minha_array = ["Carro"=>"volvo", "idade"=>"15", "mensagem"=>funcao()];
$minha_array["mensagem"];

?>