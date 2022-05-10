<?php

// namespace kenny;

function checkPassword($password) {

    echo '<h1 class="text-center">Kenny</h1>';
    // ...
    echo "<h4>Mot de passe: $password<h4>";
    echo '<h4 class="text-end">Force du mot de passe<h4>';

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
    echo 'Password should be at least 12 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
    echo 'Strong password.';
    }
}
