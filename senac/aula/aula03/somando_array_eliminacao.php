<?php

echo "<h2>2 - Dois alunos com 4 notas</h2>";

$alunos = [
    [
        'nome' => 'Maria',
        'Nota1' => 10,
        'Nota2' => 9,
        'Nota3' => 8,
        'Nota4' => 10,
    ],
    [
        'nome' => 'João',
        'Nota1' => 7,
        'Nota2' => 8,
        'Nota3' => 6,
        'Nota4' => 9,  
    ]
];

foreach ($alunos as $aluno) {
    $nome = $aluno['nome'];

    $soma_notas = 0;
    $qtd_notas = 0;

    foreach ($aluno as $key => $value) {
        # code...
        if ($key !== 'nome' && is_numeric($value)) {
            $soma_notas += $value;
            $qtd_notas++;
        }
    }
    $media = $soma_notas / $qtd_notas;

    echo "<h3>Aluno: $nome</h3>";
    echo "Soma: $soma_notas<br>";
    echo "Média: " . number_format($media, 2, ',', '.') . "<hr>";
}