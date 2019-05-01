<?php
/* >>>>>>>>>>>>>>>>>.>>>>>>>>>>>>>>>>>>>>aula 13 basico 
$nome = "Rodrigues";
echo $nome;
var_dump($nome);
*/

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> aula 14  basico
$nome = "Gabriel";
$sobrenome = "Rodrigues";
$nomeCompleto = $nome." " .$sobrenome;

 //echo $nomeCompleto; // concatenação de variaveis 

  // comando para forçar a parada do código

echo "<br/>"; // quebra de linha com tag HTML

//unset($nome); // unset() deleta os dados de dentro a variavel

//echo isset($nome); // isset() mostar o que tem dentro da variavel


$frutas = array("laranja", "Manga", "Goiaba"); // criando arrays 
//echo $frutas[2];

$nascimento = new DateTime(); // criando obejetos 
//var_dump($nascimento);

$arquivo = fopen("index.php", "r"); // pegando arquivos no computador
var_dump($arquivo);
*/

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> AULA 15

//$nome = (int)$_GET["a"]; // GET[] recebe o valor dado pelo usauario e retorna para a variavel/ (int)convertendo o arquivo para inteiro
//var_dump($nome);

//$ip = $_SERVER["SCRIPT_NAME"]; // pega o ip do usuario "REMOTE_ADDR" // pega os arquivos que o usuiario está usando "SCRIPT_NAME"
//echo $ip;

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> AULA 16
/*
$nome = "Rodrigues"; // variavel global

function teste() // crindo o escopo com a variavel global 
{
	global $nome; // faz com que a variaval seja a mesma que está fora do escopo da função
	echo $nome;
}

function teste2() // criando o escopo e definindo o valor da varialve interno
{
	$nome = "João";// variavel interna
	echo $nome." Agora é o teste 2";
}

teste();
echo "</br>";
teste2();
*/

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> AULA 17

/*$nome = "Rodrigues";

echo $nome." mais alguma coisa <br>";

$nome .= " treinamento"; // .= soma o que estiver dentro da variavel

echo $nome; */

/*$valor = 0;

$valor += 125; // soma conteuro variaval

echo $valor."</br>";

$valor *= .9; // porcentagem de desconto de um valor

echo $valor."</br>";

$a = NULL;
$b = NULL;
$c = 10;

var_dump($a ?? $b ?? $c); // o operador ?? verifica se a variavel é nula e pula ela 
*/
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> AULA 18

//str_replace(search, replace, subject) - troca a letra da varialve 
//strlen(string) retorna o tamanho da variavel string

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> AULA 19

function soma($a , $b)
{
	return $a + $b;
}
?>
=======

echo "<strong>Olá mundo</strong>";

echo "Eu sou o localhost e servidor";

?>

