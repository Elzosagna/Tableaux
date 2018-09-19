<?php
    //exercice pour dédramatiser les tableaux

    // premier niveau faire ce tableau
    $arr = [
        "coucou72",
        "vie_oiseau",
        "test_value50",
        "bonjour",
        "arbitraire",
    ];

    //second  niveau faire ce tableau
    $arr1 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => 25,
        "bonjour" => 20,
        "arbitraire" => 5,
    ];

    //troisème  niveau faire ce tableau
    $arr2 = [
        "coucou72" => 10,
        "vie_oiseau" => 15,
        "test_value50" => [
            "in_tab" => "in tab",
            "in_tab1" => "dans tableau 1",
        ],
        "bonjour" => 20,
        "arbitraire" => 5,
    ];




    //afficher les valeurs comme l'exemple suivant :
    //la valeur coucou72 (ou) valeur de la clé est égale à 10
    //la valeur vie_oiseau (ou) valeur de la clé est égale à 15 ....

    $rtl = '<br>'; // ou “\n” pour l'exécution en ligne de commande

    // parcourir le premier tableau $arr avec for, foreach et while
    echo '=> Exercice avec premier tableau $arr'.$rtl.$rtl;

    echo '-> Avec for '.$rtl;
    for ($i=0; $i <count($arr) ; $i++) {
      echo $arr[$i].$rtl;
    }

    echo '-> Avec foreach '.$rtl;
    foreach ($arr as $element) {
      echo $element.$rtl;
    }
    $a=0;
    echo '-> Avec while '.$rtl;
    while ($a < count($arr)) {
      echo $arr[$a].$rtl;
      $a++;
    }

    echo $rtl.'-------------'.$rtl;

    // parcourir le deuxième et troisième tableau avec foreach
    echo 'Exercice avec le deuxième et le troisème tableau '.$rtl.$rtl;

    echo '-> Avec le tableau $arr1'.$rtl;
    foreach ($arr1 as $element => $value) {
      echo "la valeur ".$element." (ou) valeur de la clé est égale à ".$value .$rtl;
    }

    echo $rtl.'-> Avec le tableau $arr2'.$rtl;
    foreach ($arr2 as $element => $value) {
      if ($element != "test_value50") {
        echo "la valeur ".$element." (ou) valeur de la clé est égale à ".$value .$rtl;
      } else {
        foreach ($value as $key => $value1) {
          echo "la valeur ".$key." (ou) valeur de la clé est égale à ".$value1 .$rtl;
        }
      }
    }
?>
