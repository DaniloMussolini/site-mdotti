<?php
// Exibir erros para debug (remover em produção)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// PHPMailer - Inclusão
require(__DIR__ . "/../phpmailer/src/PHPMailer.php");
require(__DIR__ . "/../phpmailer/src/SMTP.php");
require(__DIR__ . "/../phpmailer/src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    
    // Verificação e validação do reCAPTCHA
    $captcha = $_POST['g-recaptcha-response'] ?? '';
    if (empty($captcha)) {
        echo '<script>
            alert("Por favor, confirme que você não é um robô.");
            localStorage.send = true;
            window.location.href = "https://mdotti.com/";
        </script>';
        exit;
    }

    $secretKey = '6Lf6oEYrAAAAAHZwRmOSpRZEXvtFZfjJTn9HYcTn';
    $remoteIp = $_SERVER['REMOTE_ADDR'];

    $recaptchaResponse = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$remoteIp}"
    );
    $recaptchaResult = json_decode($recaptchaResponse);

    if (!$recaptchaResult || !$recaptchaResult->success) {
        echo "Erro: falha na validação do reCAPTCHA.";
        exit;
    }

    // Sanitização e validação dos campos
    $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $tel      = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_SPECIAL_CHARS);
    $empresa  = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$nome || !$email || !$mensagem) {
        echo "Por favor, preencha nome, e-mail e mensagem corretamente.";
        exit;
    }

    // Configuração do PHPMailer
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->isSMTP();
    $mail->Host       = 'mail.mvmt.com.br';
    $mail->Port       = 465;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = 'mail@mvmt.com.br';
    $mail->Password   = '1_Thiu?G0GVD'; // 🔒 Segurança: use variável de ambiente se possível

    $mail->setFrom('mail@mvmt.com.br', 'MDotti');
    $mail->addAddress('contato@mdotti.com', 'MDotti');
    $mail->addReplyTo($email, $nome);

    $mail->isHTML(true);
    $mail->Subject = 'M.Dotti - Novo Contato';

    $mail->Body = "
        <p><strong>Nome:</strong> {$nome}</p>
        <p><strong>E-mail:</strong> {$email}</p>
        <p><strong>Telefone:</strong> {$tel}</p>
        <p><strong>Empresa:</strong> {$empresa}</p>
        <p><strong>Mensagem:</strong><br>" . nl2br($mensagem) . "</p>
    ";

    if ($mail->send()) {
        echo '<script>
            localStorage.send = true;
            window.location.href = "https://mdotti.com/success/";
        </script>';
    } else {
        echo "Erro ao enviar: " . $mail->ErrorInfo;
    }
}
?>
