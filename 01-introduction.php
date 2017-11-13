<?php
/*
  INDÍCE:
  - Introdução a variável
  - Tipos de dados no php
  - Variáveis pré-definidas
  - Escopo de variável
  - Operadores no PHP
  - String
  - Include e Require
*/

//----------------------------------------------------------------------------------------------------------------------------------------------
/*
  Introdução a variável
    Espaço na memória que grava dados temporáriamente
*/
  $variavel = 'valor';
  echo "string"; //Echo imprime  o valor
  var_dump($variavel); //Imprime  o tipo de dado, o tamanho que gastou e o valor dentro da variavel

  /*Recomendações:
  - Padrão CamelCase começar com a primeira letra em minuscúlo e se tiver mais de uma palavra, colocar em maísculo a primeira letra da próxima palavra. Ex: textName
  - Pode ter números no nome da variável, mas, não pode começar com número.
  - Único caracter especial para por: Underline. Ex: $var_numerica;
  - Não pode usar variáveis reservadas.
 */

 unset($variavel); //Limpa a variável
 isset($variavel); //Usado para verificar se uma variável está definida. (Dentro de um if).
 echo "string"." ".$variavel; //Concatenação: junta duas coisas. Ex: echo $name." ".$lastname; (Junta Nome(espaço)Sobrenome)

//----------------------------------------------------------------------------------------------------------------------------------------------

 /*
      Tipos de dados no php (8 tipos dividos em 3 grupos)
      *Tipos básicos:
        - Interger (Inteiro): numérico;
        - String: caracteres;
        - Floating point numbers(Ponto flutuante): numérico com casas decimais;
        - Bolean (Boleano):verdadeiro ou falso;
      *Tipos compostos
        - Array: mapa odernado. Relaciona valores a chaves. Ex: array(chave  => valor, chave2 => valor2);
        - Object(Objeto):  é a instância de uma classe (Orientação a Objeto);
      *Tipos especiais;
        - Resource (recurso);
        - Null (nulo): variável sem valor;
*/
  $numero = 200; //interger
  $nome = "Alv"; //string
  $decimal = 140.34; //float
  $vivo = true; //bolean

  $frutas = array("uva", "amora", "jaca"); //array
  $data = new DateTime(); //Objeto

  $arquivo = fopen("ex.php","r"); //resource
  $semValor = null; //null

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Variáveis pré-definidas (Arrays superglobais):
    Variáveis que já vem com algum recurso, desde informações externas (ex: no formulário $_GET["chave"] e $_POST["chave"]) e infomrações de ambientes (supergoblais: pode acessar as informações em qualquer lugar do php).
    Toda informação por Get ou Post vem do tipo string. Para não ser um dado que não é string, tem que fazer a conversão
*/
  $nome = (int)$_GET["chave"]; //Conversão de string para interger.
  $ip = $_SERVER["REMOTE_ADDR"]; //Variável global para pegar o IP do provedor de acesso do usuário.
  interger.
  $ip = $_SERVER["SCRIPT_NAME"]; //Variável global para pegar a URL (útil para log de acesso).

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Escopo de variável
    Até onde a variável terá atuação. Quando se cria uma variável, só existe no arquivo em que foi criada (Escopo local).
    Se criar uma variável em uma função, só será enxergada dentro da função. (Dentro das chaves {}).
*/

  $nome = "Alv";
  function fun(){
    global $nome; //global: palavra reservada
    echo $nome;
  }
  fun();
  //Ouvir globalmente a váriavel nome neste escopo fun, que foi definida fora.

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Operadores no PHP
    Algo que recebe um ou mais valores e que devolve outro valor
    *Operadores de atribuição: atribui um valor há uma variável
        - Operadores combinados: pega um valor de uma expressão e usa o próprio valor para o resultado da expressão.
    *Operadores de String: Operador de concatenação e Operador de atribuição de concatenação
    *Operadores aritméticos: operações de matemática básica entre valores.
    *Operadores de comparação: compara dois valores.
    *Operadores Incrementais/Decrementais: (afetam apenas números e strings).
*/
  $nome = "Alv" //Operador de atribuição
  $valorTotal = 0; //Atribui o valor 0
  $valorTotal += 100;
  $valorTotal += 25;
  echo $valorTotal; //Imprime a soma de valor total (125)
  $valorTotal -= 10;
  echo $valorTotal;  //Imprime a soma - 10(115)
  $valorTotal *= .9;
  echo $valorTotal; //Imprime 90% do valor;


  echo $nome."string"; //Operador de String (Operador de concatenação)
  $nome .="string" // //Operador de String (Operador de atribuição de concatenação). Junta o conteúdo da variável com o conteúdo atribuido.

  $a = 10;
  $b = 2;
  echo +$a; //Identidade. Conversão de $a para int ou float conforme apropriado.
  echo -$b; //Negação. Oposto de $a.
  echo $a + $b; //Adição. Soma de $a e $b.
  echo $a - $b; //Subtração. Diferença entre $a e $b.
  echo $a * $b; //Multiplicação. Produto de $a e $b.
  echo $a / $b; //Divisão. Quociente de $a e $b.
  echo $a % $b; //Módulo. Resto de $a dividido por $b.
  echo $a ** $b; //Exponencial. Resultado de $a elevado a $b.

  $a = 30;
  $b = 55;
  echo $a==$b; //Igual. Verdadeiro (TRUE) se $a é igual a $b.
  echo $a===$b; //Idêntico. Verdadeiro (TRUE) se $a é igual a $b, e eles são do mesmo tipo.
  echo $a!=$b; //Diferente. Verdadeiro se $a não é igual a $b.
  echo $a<>$b; //Diferente. Verdadeiro se $a não é igual a $b.
  echo $a!==$b; //Não idêntico. Verdadeiro se $a não é igual a $b, ou eles não são do mesmo tipo
  echo $a<$b; //Menor que. Verdadeiro se $a é estritamente menor que $b.
  echo $a>$b; //Maior que. Verdadeiro se $a é estritamente maior que $b.
  echo $a<=$b; //Menor ou igual. Verdadeiro se $a é menor ou igual a $b.
  echo $a>=$b; //Maior ou igual. Verdadeiro se $a é maior ou igual a $b.
  echo $a<=>$b; /*Spaceship (nave espacial). Um integer menor que, igual a ou maior  que zero quando $a é, respectivamente, menor  que, igual a ou maior que $b. (Útil para comparações do tipo maior, menor ou igual).
  Imprime um valor -1, 0 ou 1, quando:
  $a < $b imprime -1;
  $a == $b imprime 0;
  $a > $b imprime 1; */
  $c = NULL;
  $d = NULL;
  echo $c ?? $d ?? $a; //Null Coalesce. Ignora a variável nula. Como $c é nulo, olha o $d, se $d é nulo, olha o $a, como $a não é nulo, imprime $a.

  $a = 10;
  echo ++$a; //Pré-incremento. Incrementa $a em um, e então retorna $a. Imprime o resultado de 1+$a;
  echo $a++; //	Pós-incremento. Retorna $a, e então incrementa $a em um. Imprime o resultado de $a+1;
  echo --$a; //Pré-decremento. Decrementa $a em um, e então retorna $a. Imprime o resutado de $a-1;
  echo $a--; //Pós-decremento. Retorna $a, e então decrementa $a em um. Imprime o resutado de 1-$a;

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  String

  Aspas simples(''): mostra apenas a string
  Aspas duplas (""): mostrar o conteúdo da variável
*/
$nome = 'Alv $sobrenome'; //Imprime Alv $sobrenome;
$sobrenome = "$nome Las"; //Imprime Alv Las;

$nome = strtoupper($nome); //Converte tudo em maiúsculo, exceto caracteres.
$nome = strtolower($nome); //Converte tudo para minuscúlo, excerto caracteres.
echo ucwords ($nome); //Primeira letra de cada palavra em maiúsculo.
echo ucfirst ($nome);  //Apenas a primeira letra da palavra fica maíscula.

$emqualvariavel = str_replace("valor que vai trocar", "pelo que", $emqualvariavel);
//ex:
$frase = "Jogando purpurina na vida";
$frase = str_replace("a", "e", $frase);//troca A por E, ficando Jogendo pupurine ne vide.

$procura = strpos($emqualvariavel, "qual palavra");
$procura = strpos($frase, "vida"); //Imprime a posição da palavra em int

$sub = substr($frase, 0, 17); //Procura a partir de uma posição, neste caso, a partir da primeira letra (0), até qual posição, pode ser por indicar a posição, ou variável.
var_dump($sub); //Imprime: Jogendo purpurine
$palavra = "na;"
$text = substr($frase, $procura + strlen($palavra), strlen($frase) ); //strlen:Retorna o tamanho de uma string
var_dump($text)//Mostra o texto depois da palavra "na"

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Include e Require
    Include: importa um trecho de página. Como por exemplo, fazer uma página menu e fazer um include em toda página que for usar, em vez de repetir o código.
      - include_once: o arquivo é chamado apenas uma vez.

    Require: é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele gera uma exceção enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue, além de ter mais recursos que o require.
      - require_once: o arquivo é chamado apenas uma vez.

    Recomendações:
      - O include tem recursos como o include dinâmico que podem dar uma brecha de segurança. Sendo o Require mais seguro.
*/
  include "menu.php";
  include_once 'file.php';
  require "menu.php";
  require_once "menu.php";

 ?>
