<?php
require_once './vendor/autoload.php';
require 'navbar.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
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

<body>
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
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                            <div class="col-lg-10">
                                <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?></label>
                            <div class="col-lg-10">
                                <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                            </div>
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

    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
</body>

</html>
