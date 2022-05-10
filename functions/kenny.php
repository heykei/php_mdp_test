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
    $specialChars = preg_match('@[-&(_)=+$^ù*:!;,?]@', $password);
    $numCara = strlen($password) <= 12;
    $tab = array (
        'maj' => $uppercase,
        'min' => $lowercase,
        'numbr' => $number,
        'spec' => $specialChars,
        'mini' => $numCara,
    );

        if ($tab) {
            # code...
        }
    // if(!$uppercase || !$lowercase || !$number || !$specialChars || $numCara) {
    //     echo '<div class="progress">
    //             <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
    //         </div><br>';
    //     echo '<div class="card  mx-auto " style="max-width: 30rem;">
    //             <div class="card-header card text-white bg-primary">
    //                  le mot de passe doit contenir au moins :
    //             </div>
    //             <ul class="list-group list-group-flush">
    //                 <li class="list-group-item">1 chiffre</li>
    //                 <li class="list-group-item">1 minuscule</li>
    //                 <li class="list-group-item">1 majuscule</li>
    //                 <li class="list-group-item">1 caractère spècial</li>
    //                 <li class="list-group-item">12 caractères</li>
    //             </ul>
    //             </div>';
    // }else{
    // echo '<a class="btn btn-success" href="index.php" role="button">OK</a>';
    // }
    
}
