<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cidade</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <main>
        <div class="container">
            <fieldset>
                <legend>Cadastro de Cidade</legend>
                <form action="AlteraCidadeExe.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" 
                               name="nome" 
                               id="nome" required
                               value="<?php echo $row['nome'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" required>
                            <option value="AC"<?php echo $row['estado'] == "AC" ? " selected" : ""; ?>>Acre/AC</option>
                            <option value="AL"<?php echo $row['estado'] == "AL" ? " selected" : ""; ?>>Alagoas/AL</option>
                            <option value="AP"<?php echo $row['estado'] == "AP" ? " selected" : ""; ?>>Amapá/AP</option>
                            <option value="AM"<?php echo $row['estado'] == "AM" ? " selected" : ""; ?>>Amazonas/AM</option>
                            <option value="BA"<?php echo $row['estado'] == "BA" ? " selected" : ""; ?>>Bahia/BA</option>
                            <option value="CE"<?php echo $row['estado'] == "CE" ? " selected" : ""; ?>>Ceará/CE</option>
                            <option value="DF"<?php echo $row['estado'] == "DF" ? " selected" : ""; ?>>Distrito Federal/DF</option>
                            <option value="ES"<?php echo $row['estado'] == "ES" ? " selected" : ""; ?>>Espirito Santo/ES</option>
                            <option value="GO"<?php echo $row['estado'] == "GO" ? " selected" : ""; ?>>Goiás/GO</option>
                            <option value="MA"<?php echo $row['estado'] == "MA" ? " selected" : ""; ?>>Maranhão/MA</option>
                            <option value="MT"<?php echo $row['estado'] == "MT" ? " selected" : ""; ?>>Mato Grosso/MT</option>
                            <option value="MS"<?php echo $row['estado'] == "MS" ? " selected" : ""; ?>>Mato Grosso do Sul/MS</option>
                            <option value="MG"<?php echo $row['estado'] == "MG" ? " selected" : ""; ?>>Minas Gerais/MG</option>
                            <option value="PA"<?php echo $row['estado'] == "PA" ? " selected" : ""; ?>>Pará/PA</option>
                            <option value="PB"<?php echo $row['estado'] == "PB" ? " selected" : ""; ?>>Paraíba/PB</option>
                            <option value="PR"<?php echo $row['estado'] == "PR" ? " selected" : ""; ?>>Paraná/PR</option>
                            <option value="PE"<?php echo $row['estado'] == "PE" ? " selected" : ""; ?>>Pernambuco/PE</option>
                            <option value="PI"<?php echo $row['estado'] == "PI" ? " selected" : ""; ?>>Piauí/PI</option>
                            <option value="RJ"<?php echo $row['estado'] == "RJ" ? " selected" : ""; ?>>Rio de Janeiro/RJ</option>
                            <option value="RN"<?php echo $row['estado'] == "RN" ? " selected" : ""; ?>>Rio Grande do Norte/RN</option>
                            <option value="RS"<?php echo $row['estado'] == "RS" ? " selected" : ""; ?>>Rio Grande do Sul/RS</option>
                            <option value="RO"<?php echo $row['estado'] == "RO" ? " selected" : ""; ?>>Rondônia/RO</option>
                            <option value="RR"<?php echo $row['estado'] == "RR" ? " selected" : ""; ?>>Roraima/RR</option>
                            <option value="SC"<?php echo $row['estado'] == "SC" ? " selected" : ""; ?>>Santa Catarina/SC</option>
                            <option value="SP"<?php echo $row['estado'] == "SP" ? " selected" : ""; ?>>São Paulo/SP</option>
                            <option value="SE"<?php echo $row['estado'] == "SE" ? " selected" : ""; ?>>Sergipe/SE</option>
                            <option value="TO"<?php echo $row['estado'] == "TO" ? " selected" : ""; ?>>Tocantins/TO</option>
                        </select>
                    </div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <div class="form-group">
                        <button type="submit" class="btn">Cadastrar</button>
                    </div>
                </form>
            </fieldset>
            <button class="btn"><a href="./index.html">Voltar</a></button>
        </div>
    </main>
    <footer id="footer">
    </footer>
</body>
</html>