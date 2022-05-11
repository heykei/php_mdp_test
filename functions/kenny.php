<?php

namespace kenny;

function checkPassword($password) {

    echo '<h1 class="text-center">Kenny</h1>';
    echo "<h5>Mot de passe: $password</h5>";
    echo '<h5 class="text-end">Force du mot de passe</h5>';

    // Validate password strength
    $majuscule = preg_match('@[A-Z]@', $password);
    $minuscule = preg_match('@[a-z]@', $password);
    $chiffre = preg_match('@[0-9]@', $password);
    $caractreSpeciaux = preg_match('@[-&=(_)+$^ù*:!;,?%]@', $password);
    $chaine = strlen($password) >= 12;
    $tab = array (
        'maj' => $majuscule,
        'min' => $minuscule,
        'numbr' => $chiffre,
        'spec' => $caractreSpeciaux,
        'mini' => $chaine,
    );

    $glob = array_filter($tab);

    if ($tab) {
    
        if(count($glob) == 1) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped bg-danger progress-bar-animated " role="progressbar" style="width: 20%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';
        }
        elseif (count($glob) == 2 ) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped bg-warning progress-bar-animated " role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';
        }

        elseif (count($glob) == 3 ) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped bg-info progress-bar-animated " role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';
        }

        elseif (count($glob) == 4) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" style="width: 80%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';
        }

        elseif (count($glob)== 5) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';

        }

        elseif (count($glob) == 0) {
            echo  '<div class="progress"><div class="progress-bar progress-bar-striped bg-danger progress-bar-animated " role="progressbar" style="width: 0%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>';
        }
    }
    if (!$majuscule || !$minuscule || !$chiffre || !$caractreSpeciaux || !$chaine) {
    
        if ($majuscule || $minuscule || $chiffre || $caractreSpeciaux || !$chaine) {     
            echo '<ul class="list-group mt-5 mx-auto" style="max-width: 350px">
                 <li class="list-group-item active" aria-current="true">Le mot de passe doit contenir au moins:</li>';
        }
        if (!$chiffre) {
            echo '<li class="list-group-item">1 chiffre</li>';
        }
        if (!$minuscule) {
            echo '<li class="list-group-item">1 minuscule</li>';
        }
        if (!$majuscule) {
            echo '<li class="list-group-item">1 majuscule</li>';
        }

        if (!$caractreSpeciaux) {
            echo '<li class="list-group-item">1 caractère spécial</li>';
        }
        if (!$chaine) {
            echo '<li class="list-group-item">12 caractères</li>';
        }
       
        echo'</ul>';
    }
    else {
        echo '<a href="index.php" class="text-center btn btn-success d-grid gap-1 col-1 mx-auto mt-4 py-1 px-1">OK</a>';
    }
}