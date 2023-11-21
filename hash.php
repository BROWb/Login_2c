<?php
 function criarhash($senha){
    $aboiadeira = password_hash($senha,PASSWORD_DEFAULT);
    return $aboiadeira;
 }

?>