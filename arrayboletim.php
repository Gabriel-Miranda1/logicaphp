<?php
$boletim = [
    'aluno1' => array(
        'nome' => 'João',
        'notasb1' => array(
            'matematica' => 5,
            'portugues' => 4,
            'historia' => 8,
        ),
        'notasb2' => array(
            'matematica' => 4,
            'portugues' => 8,
            'historia' => 7,
        ),
        'notasb3' => array(
            'matematica' => 9,
            'portugues' => 5,
            'historia' => 8,
        ),
        'notasb4' => array(
            'matematica' => 5,
            'portugues' => 7,
            'historia' => 7,
        ),
    ),
    'aluno2' => array(
        'nome' => 'Maria',
        'notasb1' => array(
            'matematica' => 5,
            'portugues' => 4,
            'historia' => 3,
        ),
        'notasb2' => array(
            'matematica' => 4,
            'portugues' => 6,
            'historia' => 8,
        ),
        'notasb3' => array(
            'matematica' => 3,
            'portugues' => 9,
            'historia' => 9,
        ),
        'notasb4' => array(
            'matematica' => 6,
            'portugues' => 5,
            'historia' => 8,
        ),
    ),
    'aluno3' => array(
        'nome' => 'Pedro',
        'notasb1' => array(
            'matematica' => 5,
            'portugues' => 4,
            'historia' => 7,
        ),
        'notasb2' => array(
            'matematica' => 4,
            'portugues' => 3,
            'historia' => 9,
        ),
        'notasb3' => array(
            'matematica' => 9,
            'portugues' => 7,
            'historia' => 7,
        ),
        'notasb4' => array(
            'matematica' => 5,
            'portugues' => 8,
            'historia' => 8,
        ),
    ),
    'aluno4' => array(
        'nome' => 'Ana',
        'notasb1' => array(
            'matematica' => 5,
            'portugues' => 8,
            'historia' => 9,
        ),
        'notasb2' => array(
            'matematica' => 4,
            'portugues' => 6,
            'historia' => 8,
        ),
        'notasb3' => array(
            'matematica' => 6,
            'portugues' => 4,
            'historia' => 7,
        ),
        'notasb4' => array(
            'matematica' => 6,
            'portugues' => 7,
            'historia' => 9,
        ),
    ),
    'aluno5' => array(
        'nome' => 'Carlos',
        'notasb1' => array(
            'matematica' => 8,
            'portugues' => 10,
            'historia' => 8,
        ),
        'notasb2' => array(
            'matematica' => 5,
            'portugues' => 7,
            'historia' => 6,
        ),
        'notasb3' => array(
            'matematica' => 4,
            'portugues' => 9,
            'historia' => 7,
        ),
        'notasb4' => array(
            'matematica' => 6,
            'portugues' => 7,
            'historia' => 9,
        ),
    ),
];

foreach ($boletim as $aluno) {
    echo "Aluno: " . $aluno['nome'] . "<br>";
    $materias = ['matematica', 'portugues', 'historia'];
    foreach ($materias as $materia) {
        $somaNotas = 0;
        $bimestres = 0;
        foreach ($aluno as $key => $notas) {
            if (is_array($notas) && array_key_exists($materia, $notas)) {
                $somaNotas += $notas[$materia];
                $bimestres++;
            }
        }
        $media = $somaNotas / $bimestres;
        echo ucfirst($materia) . ": " . $media . "<br>";
    }
    echo "<br>";
}
?>
