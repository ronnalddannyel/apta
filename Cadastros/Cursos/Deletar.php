<?php
session_start();
require_once('../../../../db.php'); // Inclua aqui o arquivo de conexão com o banco de dados

if (isset($_POST['Ret'])) {
    $id =  base64_decode($_POST['IdEstoque']);

    // Verifique se o registro existe antes de deletar
    $sql = "SELECT * FROM ReposicoesConcluidasCemPorCento WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // O registro existe, execute a deleção
        $deleteSql = "DELETE FROM ReposicoesConcluidasCemPorCento WHERE id = $id";
        if (mysqli_query($conn, $deleteSql)) {
            
            // Deleção bem-sucedida
            echo "Item deletado com sucesso.";
            header("Location: ./index.php");
        } else {
            // Ocorreu um erro ao deletar
            echo "Erro ao deletar o item: " . mysqli_error($conn);
        }
    } else {
        // O registro não existe
        echo "Registro não encontrado.";
    }
}
?>