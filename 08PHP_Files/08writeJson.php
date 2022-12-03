<?php

function addRowJson($simbol, $kompanija, $cena) {

    //$data = [$simbol, $kompanija, $cena];
    $data = array(
        'simbol' => $simbol,
        'kompanija' => $kompanija,
        'cena' => $cena
    );
    
    $fileName = 'files/stocks2.json';

    file_put_contents($fileName, json_encode($data));
}