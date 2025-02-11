<?php
$alunos = array (
    'aluno1' => [
        'nome' => 'João',
        'materia' => 'Matemática',
        'nota' => 7
    ],
    'aluno2' => [
        'nome' => 'Maria',
        'materia' => 'Português',
        'nota' => 5
    ], 
    'aluno3' => [
        'nome' => 'José',
        'materia' => 'História',
        'nota' => 3
    ],
    );
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno['nome'] . "<br>";
        echo "Matéria: " . $aluno['materia'] . "<br>";
        echo "Nota: " . $aluno['nota'] . "<br>";
    
    if ($aluno['nota'] >= 7) {
        echo "O aluno foi aprovado <br><br>";
    } elseif ($aluno['nota'] >= 5 && $aluno['nota'] < 7) {
        echo "O aluno está em recuperação <br><br>"; 
    } 
        else { echo "O aluno está reprovado <br><br>"; 
        }
    }