<?php
require_once './plugin/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './plugin');
$mailLoader   = new SplClassLoader('SimpleMail', './plugin');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./plugin-config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    $captchaResult = $_POST["form-captcha-result"];
    $firstNumber = $_POST["form-first-number"];
    $secondNumber = $_POST["form-second-number"];
    $checkTotal = $firstNumber + $secondNumber;

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message && $captchaResult == $checkTotal) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                <p><strong>{$config->get('fields.phone')}:</strong> {$phone}</p>
                <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/ceap.css" charset="utf-8">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />

    <title>Bem-vindo ao Projeto CEAP</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <a class="navbar-brand" href="/">
            <span>
                <img alt="Logotipo" src="img/logo_escolas.png" class="logo-navbar">
                Projeto CEAP
            </span>
        </a>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#extern-navbar-collapse">
                <span class="sr-only">Mostrar / Esconder Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="extern-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/site/sistemas">Sistemas</a></li>
                    <li><a href="/site/sobre">Sobre o projeto</a></li>
                    <li><a href="/site/contato.php">Contato</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $config->get('fields.panel-title'); ?></h3>
            </div>
            <div class="panel-body">
                <?php if (!empty($emailSent)): ?>
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-success text-center">
                        <?php echo $config->get('messages.success'); ?>
                    </div>
                    <a href="contato.php">Voltar a página anterior</a>
                </div>
                <?php else: ?>
                <?php if (!empty($hasError)): ?>
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-danger text-center">
                        <?php echo $config->get('messages.error'); ?>
                    </div>
                </div>
                <?php endif; ?>

                <div class="col-md-8 col-md-offset-2">
                    <p>
                        Caso queira entrar em contato conosco, preencha o formulário com as informações abaixo.
                        <br>
                        <i>(Os campos marcados com * são obrigatórios.)</i>
                    </p>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <form novalidate action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?> (*):</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?> (*):</label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?> :</label>
                            <div class="col-lg-10">
                                <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?> (*):</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?> (*):</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="5" id="form-message" style="resize:none" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-captcha-result" class="col-lg-2 control-label"><?php echo $config->get('fields.captcha-title'); ?> (*):</label>
                            <?php
                                $min_number = 1;
                                $max_number = 10;

                                $random_number1 = mt_rand($min_number, $max_number);
                                $random_number2 = mt_rand($min_number, $max_number);
                            ?>
                            <div class="col-lg-10" style="display: flex;">
                                <p style="margin: 15px 5px 10px 5px;"><?php echo $random_number1 . ' + ' . $random_number2 . ' = '; ?></p>
                                <input style="width: 80px;margin: 10px;" id="form-captcha-result" name="form-captcha-result" class="form-control" type="text" style="width: 120px;" required>
                                <p id="form-captcha-error" class="hidden-error has-error" style="color:#a94442; margin: 15px 5px 10px 5px;"><?php echo $config->get('messages.captcha-error'); ?></p>
                            </div>

                            <input id="form-first-number" name="form-first-number" type="hidden" value="<?php echo $random_number1; ?>" />
                            <input id="form-second-number" name="form-second-number" type="hidden" value="<?php echo $random_number2; ?>" />

                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-5 col-lg-10 col-sm-offset-5">
                                <button type="reset" class="btn btn-link"><?php echo $config->get('fields.btn-clean'); ?></button>
                                <button type="submit" class="btn btn-success"><?php echo $config->get('fields.btn-send'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
