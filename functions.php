<?php
// FUNCTIONS

// il parametro lunghezza proviene dalla variabile $lunghezzaPassword,che questa variabile prende i dati che il client inserisce nella input 
function generaPasswordCasuale($lunghezza)
{
    // caratteri validi che possono essere utilizzati per generare la password casuale
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';

    // $password, variabile inizializzata come una stringa vuota per memorizzare la password casuale .
    $password           = '';
    $lunghezzaCaratteri = strlen($caratteri);

    for ($i = 0; $i < $lunghezza; $i++) {
        //l'indice deve essere sempre all'interno dei limiti validi dell'array,quindi - 1
        $carattereCasuale = $caratteri[rand(0, $lunghezzaCaratteri - 1)];

        //il carattereCasuale viene aggiunto alla passwordcon .=
        $password .= $carattereCasuale;
    }
    return $password;
}