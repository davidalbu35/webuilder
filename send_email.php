<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email où le message sera envoyé
    $to = "webuilder@outlook.be";  // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de votre formulaire de contact";

    // Corps du message
    $body = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre site web.\n\n";
    $body .= "Nom : $name\n";
    $body .= "Prénom : $surname\n";
    $body .= "Email : $email\n";
    $body .= "Message :\n$message\n";

    // En-têtes pour l'email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message. Nous vous répondrons dans les plus brefs délais.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
}
?>
