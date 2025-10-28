<?php
// Importe o documento com os arrays aqui!
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Show</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 1300px;
            margin: 20px auto;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        header {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 25px;
            text-align: center;
        }
        header h1 { margin: 0; font-size: 2em; }
        header p { margin: 8px 0 0; opacity: 0.9; font-size: 1.1em; }
        .info {
            padding: 15px 25px;
            background: #ecf0f1;
            font-weight: bold;
            color: #2c3e50;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #3498db;
            color: white;
            padding: 14px 12px;
            text-align: left;
            font-weight: 600;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 0.95em;
        }
        tr:hover {
            background-color: #f8fbff;
        }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .id { font-weight: bold; color: #2980b9; width: 60px; }
        .email { font-family: 'Courier New', monospace; color: #27ae60; font-size: 0.9em; }
        .telefone { white-space: nowrap; }
        caption {
            font-size: 1.3em;
            font-weight: bold;
            padding: 18px;
            color: #2c3e50;
            text-align: left;
            caption-side: top;
        }
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr { display: block; }
            thead tr { display: none; }
            tr { margin-bottom: 15px; border: 1px solid #ddd; border-radius: 8px; padding: 10px; }
            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 12px;
                width: 45%;
                font-weight: bold;
                text-align: left;
                color: #555;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Empresa Show Ltda.</h1>
        <p>Lista Oficial de Colaboradores</p>
    </header>

    <div class="info">
        Total de funcionários: <strong>XX</strong>
    </div>

    <table>
        <caption>Funcionários Cadastrados</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Setor</th>
                <th>Cargo</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="id" data-label="ID">id</td>
                    <td data-label="Nome">nome</td>
                    <td data-label="Setor">setor</td>
                    <td data-label="Cargo">cargo</td>
                    <td class="telefone" data-label="Telefone">telefone</td>
                    <td class="email" data-label="E-mail">email</td>
                </tr>
        </tbody>
    </table>
  <!-- Lista de produtos: (continuar) -->
</div>

</body>
</html>
