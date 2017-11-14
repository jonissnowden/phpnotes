<?php
/*
  INDÍCE:
  - If, elseif, else
  - Switch case
  - For
  - Foreach
  - While e do while
*/

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  If, elseif, else
*/
  $idade = 8;
  if($idade<12){//condição
  //  executa esse bloco, se a condição for verdade. Se tiver só uma linha, não precisa de chaves
    echo "Criança";
  }
  else if($idade>12){//condição
    //excuta esse bloco se a condição do if não for verdade e se esta condição for verdade.
    echo "pré-adolescente";
    //pode escrever elseif, e este pode ser repetido várias vezes.
  }
  else{
    //Se nenhum das condições acima foram atendidas, executa esse bloco
        echo "Não é criança";
  }
  $idade2 = 20;
  echo ($idade < $idade2)? "Idade menor que 20" : "Idade maior que 20"; //Operador ternário (ou operador condicional)
  //Se a condição ($idade < $idade2) ?(então) "Imprimir se a condição for verdade" :(else) "Imprimir se a condição não for atendida."

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Switch case
    Semelhante ao if, porém, utiliza casos (case) definidos.
*/
  $semana = 1;
  switch ($semana) { //Variável
    case 0: //Caso a variável seja 0
      echo "Domingo"; //Imprimir domingo
      break; //Quebra para não executar o resto do código se esse caso for verdade.
    case 1: //Caso a variável seja 1
      echo "Segunda";  //Imprimir segunda
      break;
    default: //Como um else. Se nenhum caso for verdade
      echo "Não é domingo nem segunda"; //Imprimir "Não é domingo nem segunda".
      break;
  }

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  For
    É um laço de repetição, é utilizado como contador. Tem início, fim e uma taxa incrimental ou decremental.
*/
  for ($i=0; $i <10; $i++) { //Condição: início; até quando executa; parte do incremento ou decremento.
    echo $i; //Imprime de 0 a 9 de 1 em 1;
  }

  for ($i=0; $i < 100 ; $i+=5) {
    echo $i; //Imprime de 0 a 95 de 5 em 5;
  }

  for ($i = 1; ; $i++) {
      if ($i > 10) {
          break; //Não é recomendado usar break dentro de for
      }
      echo $i; //Imprime de 1 a 9 de 1 em 1;
  }

  for ($i=date("Y"); $i > date("Y")-10; $i--) { //date("Y"): pega o ano atual.
      echo "$i <br>"; //Imprime do ano atual até 9 anos atrás
  }

  echo "<select>";
  for ($i=date("Y"); $i > date("Y")-100; $i--) {
    echo "<option value= $i>$i</option>"; ////Imprime do ano atual até 99 anos atrás dentro de uma lista no option
  }
  echo "</select>";

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  Foreach
    O constutor Foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objeto
*/
  $semana = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");
  foreach ($semana as $dias) {
    echo $dias; //Imprime todos os valores do array
  }
  foreach ($semana as $numero =>$dias) {
    echo "$numero $dias<br>"; //Imprime o número da semana, a partir de 0 junto com o dia.
  }

//----------------------------------------------------------------------------------------------------------------------------------------------

/*
  While e do While
    While: enquanto a condição for verdadeira, o laço irá executar.
    Do while: executa pelo menos a primeira iteração do laço. A expressão de avaliação é verificada ao final de cada iteração em vez de no começo.
*/
$a = true;
while ($a) {
  $numero = rand(1,10); //número aleatório de 1 a 10
  if ($numero ==3){
    echo "Número três"; //Imprime "Número três" quando o if for verdadeiro
    $a = false; //Deixa a condição falsa para que pare quando o if for verdadeiro
  }
  echo "$numero <br>"; //Imprime todos os números aleatórios até que saia o 3 e execute o if.
}

$total = 100;
$desconto = 0.9;
  do { //Faça isso
    $total *=$desconto; //desconto de 10% no valor total
  }
  while ($total > 100);{ //Desconto enquanto $total for maior que 100;
    echo $total; //Deu desconto de 10% mesmo que $total = 100 e não maior.
  } //No do while, mesmo que a condição seja falsa, é executado pelo menos uma vez.
 ?>
