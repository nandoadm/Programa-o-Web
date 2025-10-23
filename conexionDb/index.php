<?php
$connectionString = ("host=localhost port=5432 dbname=local user=postgres password=123");
$connection = pg_connect($connectionString);

if ($connection) {
    echo "Conectado com sucesso ao banco de dados.";

    $result = pg_query($connection, "SELECT COUNT(*) FROM tbpessoa");
    if ($result) {
        $row = pg_fetch_row($result);
        echo "<br>Número de tabelas no banco de dados: " . $row[0];
    } else {
        echo "Erro ao executar a consulta.";
    }



    $dadosPessoa = array(
F        "pessobrenome" => "bla",
        "pesemail" => "bla@gmail.com",
        "pespassword" => "123",
        "pescidade" => "Sao Paulo",
        "pesestado" => "SP"
    );

    $insert = pg_query_params($connection, "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado)
     VALUES ($1, $2, $3, $4, $5, $6)", array_values($dadosPessoa));

    if ($insert) {
        echo "<br>Dados inseridos com sucesso.";
        $result = pg_query($connection, "SELECT * FROM tbpessoa");
    } else {
        echo "<br>Erro ao inserir dados.";
    }

    pg_close($connection);
} else {
    echo "Conexão Falhou.";
}