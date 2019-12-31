<!DOCTYPE html>
<html lang="pt-bR">
<head>
    <title>Vendedores</title>
</head>
<body>


<div>
    <header>
        <h1> Empresa Binária</h1>
        <h2>Sistema Plano de Carreira Vendedores</h2>
    </header>
</div>

<p id="demo"></p>
<p id="demo2"></p>


<script>
    var obj = JSON.parse('{ "id":"1", "nome":"Vendedor 1", "pt":"0 pt", "esquerda":"null", "direita":"null"}');
    document.getElementById("demo").innerHTML = obj.nome + ", " + obj.pt + ", Perna Esquerda: " + obj.esquerda + ", Perna direita: " + obj.direita;

    var obj2 = JSON.parse('{ "id":"1", "nome":"Vendedor 1", "pt":"0 pt", "esquerda":"null", "direita":"null"}');
    document.getElementById("demo2").innerHTML = obj.nome + ", " + obj.pt + ", Perna Esquerda: " + obj.esquerda + ", Perna direita: " + obj.direita;

</script>

<?php

echo 'Hello World  PHPMyAdmin!';

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Nome</th><th>Pontos</th><th>PernaEsquerda</th><th>PernaDireita</th></tr>";

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plano_carreira_vendedores";
//3308 wamp 3306 workbench

try {
    $conn = new PDO("mysql:host=$servername;port=3308;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("use plano_carreira_vendedores");
    $stmt->execute();

    //echo "<p>database changed</p>";
    print_r("database changed");

    $stmt = $conn->prepare("SELECT * FROM vendedores");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

echo '<br>';
echo 'Hello World  Workbench MySQL Server Community!';

?>
</body>
</html>