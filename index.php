<!DOCTYPE html>
<html>
<head></head>
<body>

<header>
<h1> Empresa Binária <h1>
<h2>Sistema Plano de Carreira Vendedores</h2>
</header>

<p id="demo"></p>
<p id="demo2"></p>


<script>
var obj = JSON.parse('{ "id":"1", "nome":"Vendedor 1", "pt":"0 pt", "esquerda":"null", "direita":"null"}');
document.getElementById("demo").innerHTML = obj.nome + ", " + obj.pt + ", Perna Esquerda: " + obj.esquerda + ", Perna direita: " + obj.direita ;

var obj2 = JSON.parse('{ "id":"1", "nome":"Vendedor 1", "pt":"0 pt", "esquerda":"null", "direita":"null"}');
document.getElementById("demo2").innerHTML = obj.nome + ", " + obj.pt + ", Perna Esquerda: " + obj.esquerda + ", Perna direita: " + obj.direita ;

</script>

<?php

echo 'Hello World  PHP!';

if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
    $stmt = $db->prepare('select * from foo',
        array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
} else {
    die("my application only works with mysql; I should use \$stmt->fetchAll() instead");
}

#$mysqli = mysqli_connect('127.0.0.0.1','root','','plano_carreira_vendedores','3308');
#echo 'procedural';

?>
</body>
</html>