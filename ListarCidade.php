<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM cidade";
        //EXECUTA a  consulta
        $result = mysqli_query($con, $sql);
        //RETORNA apenas uma linha
    ?>
    <header>
        <button id="menu-button">☰</button>
        <nav id="menu">
            <ul>
                <li><a href="index.html">☰</a></li>
                <li><a href="cadastro.html">☰</a></li>
                <li><a href="ListarCidade.php">☰</a></li>
                <!-- Adicione mais itens de menu conforme necessário -->
            </ul>
        </nav>
    </header>

    <h1>Consulta de Cidades</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
        </tr>
        <script>
        const menuButton = document.getElementById('menu-button');
        const menu = document.getElementById('menu');

        menuButton.addEventListener('click', () => {
            menu.classList.toggle('open');
        });
    </script>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
            }
        ?>
</body>
</html>