<?php
if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de meuzeretlaurence.com</h1>
                    <p><b>Email : </b>' . $_POST['email'] . '<br>
                    <p><b>Numéro : </b>' . $_POST['phone'] . '<br>
                    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('antoinethomas.devweb@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo "<p>Votre message a bien été envoyé.</p>";
    }
 