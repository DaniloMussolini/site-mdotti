<?php
// Ativar exibição de erros para debug (remova em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// PHPMailer - Inclusão das classes
require(__DIR__ . "/../phpmailer/src/PHPMailer.php");
require(__DIR__ . "/../phpmailer/src/SMTP.php");
require(__DIR__ . "/../phpmailer/src/Exception.php");

// Importar as classes (deve vir antes de qualquer código)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verificar reCAPTCHA
$captcha = $_POST['g-recaptcha-response'] ?? '';

if (empty($captcha)) {
    echo '<script>
        window.alert("Confirme que você não é um Robô!");
        localStorage.send = true;
        window.location.href = "https://mdotti.com/";
    </script>';
    exit;
}

// Nova chave secreta reCAPTCHA
$secretKey = '6Lf6oEYrAAAAAHZwRmOSpRZEXvtFZfjJTn9HYcTn';

// Verificação do reCAPTCHA com Google
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip=" . $_SERVER['REMOTE_ADDR']);
$resposta = json_decode($resposta);

// Verifica sucesso da validação
if ($resposta && $resposta->success) {

    // Validação e sanitização dos dados
    $nome  = filter_input(INPUT_POST, 'name-news', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'mail-news', FILTER_VALIDATE_EMAIL);

    if (!$nome || !$email) {
        echo "Dados inválidos.";
        exit;
    }

    // Configuração do envio via PHPMailer
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->isSMTP();
    $mail->Host       = 'mail.mvmt.com.br';
    $mail->Port       = 465;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = 'mail@mvmt.com.br';
    $mail->Password   = '1_Thiu?G0GVD'; // 🔒 Substituir por variável de ambiente se possível

    $mail->setFrom('mail@mvmt.com.br', 'MDotti');
    $mail->addAddress('contato@mdotti.com', 'MDotti');
    $mail->addReplyTo($email, $nome);

    $mail->isHTML(true);
    $mail->Subject = 'M.Dotti - Novo Lead';

    $mail->Body = "
        <p><strong>Nome:</strong> {$nome}</p>
        <p><strong>E-mail:</strong> {$email}</p>
    ";

    // Envia e redireciona
    if ($mail->send()) {
        echo '<script>
            localStorage.send = true;
            window.location.href = "https://mdotti.com/success/";
        </script>';
    } else {
        echo "Erro ao enviar: " . $mail->ErrorInfo;
    }

} else {
    echo "Erro: validação do reCAPTCHA falhou.";
    exit;
}
?>
