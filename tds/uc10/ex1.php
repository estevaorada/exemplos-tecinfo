<?php
/*
    ___   __  _       _     __          __   
   /   | / /_(_)   __(_)___/ /___ _____/ /__ 
  / /| |/ __/ / | / / / __  / __ `/ __  / _ \
 / ___ / /_/ /| |/ / / /_/ / /_/ / /_/ /  __/
/_/  |_\__/_/ |___/_/\__,_/\__,_/\__,_/\___/
 
** Leia os enunciados e responda abaixo dos comentários.
** Link para consulta: https://www.php.net/manual/pt_BR/ref.array.php
*/
// ===============================================================
/*
ATIVIDADE EXEMPLO:
- Crie um array simples com CINCO números;
- Pesquise uma função ordene o array;
- Exiba o array por meio do Foreach;
- Pesquise uma função que some todos os elementos do array e atribua em uma variável.
- Exiba a soma dos elementos do array.
*/
// RESPOSTA:
$arrayNumeros = [10, 0, 4, 2, 1];
sort($arrayNumeros);
foreach($arrayNumeros as $v){
    echo $v . "<br>";
}
$somaNumeros = array_sum($arrayNumeros);
echo $somaNumeros;
echo "<br><br>";
// ===============================================================
/*
ATIVIDADE 1:
- Crie um array simples com quatro nomes de lanhces;
- Exiba o array por meio de um laço FOR;
- Exiba o array por meio do Foreach;
- Utilize uma função do PHP para mostrar quantos itens existem no array.
*/
// RESPOSTA:

 
 
// ===============================================================
/*
ATIVIDADE 2:
Utilizando o mesmo array criado no exercício anterior:
- Adicione mais dois lanches ao final do Array (Append);
- Adicione dois lanches no início do Array (Unshift/Prepend);
- Exiba o array por meio do Foreach;
*/
// RESPOSTA:


 
// ===============================================================
/*
ATIVIDADE 3:
Utilizando o mesmo array utilizado no exercício anterior:
- Pesquise na documentação do PHP uma função que inverta a ordem dos elementos no Array;
- Atribua o array invertido em um novo array chamado $lanchesInvertido;
- Exiba o array $lanchesInvertido com o Foreach.
 
*/
// RESPOSTA:
 

 
// ===============================================================
 
// ===============================================================
/*
ATIVIDADE 4:
- Analise o seguinte exemplo de Array: https://i.imgur.com/w7SStAm.png
 
- Veja a seguinte tabela de produtos: https://i.imgur.com/20vohPB.png
-- Elabore um array com os dados da tabela de produtos supracitada;
-- Utilize o Foreach para mostrar todos os dados da tabela, inclusive as chaves.
 
*/
// RESPOSTA:


 // ===============================================================
/*
ATIVIDADE 5:
- Crie um array associativo com 5 frutas, onde a CHAVE é o nome da fruta e o VALOR é o preço (em reais);
- Utilize uma função do PHP para ordenar o array pelo VALOR (preço) em ordem crescente;
- Exiba o array ordenado com Foreach, mostrando tanto a chave quanto o valor no formato:
  "Fruta: [nome] - Preço: R$ [valor]";
- Utilize uma função para encontrar o preço mais alto e exiba a fruta mais cara.
*/
// RESPOSTA:



// ===============================================================
/*
ATIVIDADE 6:
Utilizando o mesmo array associativo do exercício anterior:
- Pesquise e utilize uma função que remova o primeiro elemento do array;
- Em seguida, utilize uma função que remova o último elemento do array;
- Exiba o array resultante com Foreach (chave e valor);
- Utilize uma função para verificar se uma fruta específica (ex: "maçã") ainda existe no array e exiba uma mensagem apropriada.
*/
// RESPOSTA:



// ===============================================================
/*
ATIVIDADE 7:
- Crie um array numérico com 6 notas de um aluno (valores entre 0 e 10);
- Pesquise e utilize uma função que arredonde todas as notas para 1 casa decimal;
- Utilize uma função para calcular a média das notas e armazene em uma variável;
- Exiba todas as notas arredondadas com Foreach;
- Exiba a média com 2 casas decimais;
- Use uma estrutura condicional para exibir se o aluno foi "Aprovado" (média >= 7) ou "Reprovado".
*/
// RESPOSTA:



// ===============================================================
 
/*
        ______                                 _           _ _           
        (____  \                _              | |         | | |          
        ____)  ) ___  ____     | |_ ____ ____| | _   ____| | | _   ___  
        |  __  ( / _ \|    \   |  _) / ___) _  | || \ / _  | | || \ / _ \ 
        | |__)  ) |_| | | | |  | |__| |  ( ( | | |_) | ( | | | | | | |_| |
        |______/ \___/|_|_|_|   \___)_|   \_||_|____/ \_||_|_|_| |_|\___/                                                                     
*/
?>
