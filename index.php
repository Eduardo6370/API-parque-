<?php
$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$rota = rtrim($rota, '/') . '/';

if ($rota == '/parque/') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        "mensagem" => "Bem-vindo ao Parque de Diversões!",
        "brinquedos" => [
            "/parque/carrinhobatebate/",
            "/parque/rodagigante/",
            "/parque/montanharussa/",
            "/parque/carrossel/",
            "/parque/barcodireto/",
            "/parque/casasustos/",
            "/parque/torrequeda/"
        ]
    ], JSON_UNESCAPED_UNICODE);

} elseif ($rota == '/parque/carrinhobatebate/') {
    echo "Você está no Carrinho Bate-Bate! Divirta-se!";

} elseif ($rota == '/parque/rodagigante/') {
    echo "Você está na Roda Gigante! Divirta-se!";

} elseif ($rota == '/parque/montanharussa/') {
    echo "Você está na Montanha Russa! Divirta-se!";

} elseif ($rota == '/parque/carrossel/') {
    echo "Você está no Carrossel! Divirta-se!";

} elseif ($rota == '/parque/barcodireto/') {
    echo "Você está no Barco Direto! Divirta-se!";

} elseif ($rota == '/parque/casasustos/') {
    echo "Você está na Casa dos Sustos! Divirta-se!";

} elseif ($rota == '/parque/torrequeda/') {
    echo "Você está na Torre de Queda! Divirta-se!";

} else {
    http_response_code(404);
    echo "Rota não encontrada!";
}