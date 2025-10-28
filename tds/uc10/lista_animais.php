<?php
/*
    ___   __  _       _     __          __   
   /   | / /_(_)   __(_)___/ /___ _____/ /__ 
  / /| |/ __/ / | / / / __  / __ `/ __  / _ \
 / ___ / /_/ /| |/ / / /_/ / /_/ / /_/ /  __/
/_/  |_\__/_/ |___/_/\__,_/\__,_/\__,_/\___/
 
** Array de animais (15 registros) e tabela HTML
*/

$animais = [
    [
        'id' => 1,
        'nome_animal' => 'Rex',
        'tipo' => 'Cachorro',
        'raca' => 'Pastor Alemão',
        'dono' => 'João Silva',
        'telefone_dono' => '(11) 98765-4321'
    ],
    [
        'id' => 2,
        'nome_animal' => 'Miau',
        'tipo' => 'Gato',
        'raca' => 'Siamês',
        'dono' => 'Maria Oliveira',
        'telefone_dono' => '(21) 99876-5432'
    ],
    [
        'id' => 3,
        'nome_animal' => 'Pé de Pano',
        'tipo' => 'Cavalo',
        'raca' => 'Quarto de Milha',
        'dono' => 'Carlos Santos',
        'telefone_dono' => '(31) 91234-5678'
    ],
    [
        'id' => 4,
        'nome_animal' => 'Nina',
        'tipo' => 'Cachorro',
        'raca' => 'Poodle',
        'dono' => 'Ana Costa',
        'telefone_dono' => '(41) 99988-7766'
    ],
    [
        'id' => 5,
        'nome_animal' => 'Tico',
        'tipo' => 'Pássaro',
        'raca' => 'Calopsita',
        'dono' => 'Pedro Lima',
        'telefone_dono' => '(51) 98765-1234'
    ],
    [
        'id' => 6,
        'nome_animal' => 'Luna',
        'tipo' => 'Gato',
        'raca' => 'Persa',
        'dono' => 'Fernanda Rocha',
        'telefone_dono' => '(19) 98741-2589'
    ],
    [
        'id' => 7,
        'nome_animal' => 'Thor',
        'tipo' => 'Cachorro',
        'raca' => 'Rottweiler',
        'dono' => 'Marcos Vinícius',
        'telefone_dono' => '(47) 99632-1478'
    ],
    [
        'id' => 8,
        'nome_animal' => 'Pipoca',
        'tipo' => 'Coelho',
        'raca' => 'Mini Lop',
        'dono' => 'Beatriz Mendes',
        'telefone_dono' => '(27) 98877-6655'
    ],
    [
        'id' => 9,
        'nome_animal' => 'Dory',
        'tipo' => 'Peixe',
        'raca' => 'Palhaço',
        'dono' => 'Lucas Almeida',
        'telefone_dono' => '(85) 99785-4123'
    ],
    [
        'id' => 10,
        'nome_animal' => 'Mel',
        'tipo' => 'Cachorro',
        'raca' => 'Golden Retriever',
        'dono' => 'Cláudia Ferreira',
        'telefone_dono' => '(62) 98412-3698'
    ],
    [
        'id' => 11,
        'nome_animal' => 'Zeca',
        'tipo' => 'Papagaio',
        'raca' => 'Amazona',
        'dono' => 'Roberto Nunes',
        'telefone_dono' => '(71) 99123-4567'
    ],
    [
        'id' => 12,
        'nome_animal' => 'Bolinha',
        'tipo' => 'Hamster',
        'raca' => 'Sírio',
        'dono' => 'Laura Souza',
        'telefone_dono' => '(48) 99987-6543'
    ],
    [
        'id' => 13,
        'nome_animal' => 'Estrela',
        'tipo' => 'Cavalo',
        'raca' => 'Árabe',
        'dono' => 'Eduardo Campos',
        'telefone_dono' => '(65) 99234-5671'
    ],
    [
        'id' => 14,
        'nome_animal' => 'Nemo',
        'tipo' => 'Peixe',
        'raca' => 'Beta',
        'dono' => 'Isabela Torres',
        'telefone_dono' => '(92) 98876-5439'
    ],
    [
        'id' => 15,
        'nome_animal' => 'Pantera',
        'tipo' => 'Gato',
        'raca' => 'Maine Coon',
        'dono' => 'Gustavo Lima',
        'telefone_dono' => '(31) 98789-1234'
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinária - Lista de Animais</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            color: #7f8c8d;
            font-size: 1.1em;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 14px 16px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #3498db;
            color: white;
            text-transform: uppercase;
            font-size: 0.85em;
            letter-spacing: 0.5px;
        }
        tr:hover {
            background-color: #f1f8ff;
            transition: background-color 0.2s;
        }
        caption {
            font-weight: bold;
            margin-bottom: 12px;
            font-size: 1.2em;
            color: #2c3e50;
            caption-side: top;
        }
        .total {
            text-align: right;
            font-style: italic;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Clínica Veterinária PetAmigo</h1>
    <p class="subtitle">Sistema de Cadastro de Animais</p>

    <table>
        <caption>Registro de Animais Cadastrados</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Animal</th>
                <th>Tipo</th>
                <th>Raça</th>
                <th>Dono</th>
                <th>Telefone do Dono</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><strong>ID</strong></td>
                    <td>NOME</td>
                    <td>TIPO</td>
                    <td>RACA</td>
                    <td>DONO</td>
                    <td>TELEFONE</td>
                </tr>
        </tbody>
    </table>

    <p class="total"><strong>Total de animais cadastrados:</strong> XX</p>

</body>
</html>
