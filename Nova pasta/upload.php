<?php
// Repassa a variável do upload
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

// Caso a variável $arquivo contenha o valor FALSE, esse script foi acessado
// diretamente, então mostra um alerta para o usuário
if(!$arquivo)
{
    echo "Não acesse esse arquivo diretamente!";
}
// Imagem foi enviada, então a move para o diretório desejado
else
{
    // Diretório para onde o arquivo será movido
    $diretorio = "./uploads/";
	
	$nome_arquivo=$diretorio . $arquivo['name'];
	while (file_exists($nome_arquivo))
		$nome_arquivo=$diretorio . time ().'.jpg';
    // Move o arquivo
    // Lembrando que se $arquivo não fosse declarado no começo do script,
    // você estaria usando $_FILES['arquivo']['tmp_name'] e $_FILES['arquivo']['name']
    if (move_uploaded_file($arquivo['tmp_name'], $nome_arquivo))
    {
        echo "Arquivo Enviado com sucesso!";
    }
    else
    {
        echo "Erro ao enviar seu arquivo!";
    }
}
?>
