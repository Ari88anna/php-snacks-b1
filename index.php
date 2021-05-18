<?php

    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $squadre = [
        [
            'squadra_casa'=> 'Olimpia Milano',
            'squadra_ospite'=> 'Cantù',
            'punti_squadra_casa'=> 74,
            'punti_squadra_ospite'=> 92,
        ],
        [
            'squadra_casa'=> 'Trento',
            'squadra_ospite'=> 'Virtus Bologna',
            'punti_squadra_casa' => 85,
            'punti_squadra_ospite'=> 90,
        ],
        [
            'squadra_casa'=> 'Trieste',
            'squadra_ospite'=> 'Reggiana',
            'punti_squadra_casa'=> 78,
            'punti_squadra_ospite'=> 69,
        ],
        [
            'squadra_casa'=> 'Brindisi',
            'squadra_ospite'=> 'Brescia',
            'punti_squadra_casa'=> 74,
            'punti_squadra_ospite'=> 71,
        ]
    ];  

    
    // Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    // variabile GET name
    $name = $_GET['name'];
    // var_dump($name);
    

    // variabile GET  mail
    $mail = $_GET['mail'];
    // var_dump($mail);

    // variabile GET age
    $age = $_GET['age'];
    // var_dump($age);

    $output = 'Accesso riuscito';
    
    if (strlen($name) < 3 ) { // se la lunghezza di name è minore di 3

        $output = 'Accesso negato';    
   
    } elseif ( strpos($mail, '@') === false || strpos($mail, '.') === false ) {  //Se la mail non contiene un punto e una chiocciola

        $output = 'Accesso negato';

    } elseif (!is_numeric($age)) { // se age non è un numero

        $output = 'Accesso negato';

    }

    echo $output ;  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>

<body>

    <h2>Serie A </h2>

    <ul>
        <?php for($i = 0; $i < count($squadre); $i++) { ?>

            <?php $this_squadra = $squadre[$i]?>            

            <?php ?>

            <li>
                <?php echo $this_squadra['squadra_casa']?> - <?php echo $this_squadra['squadra_ospite']?> | <?php echo $this_squadra['punti_squadra_casa']?> - <?php echo $this_squadra['punti_squadra_ospite']?>
            </li>


        <?php }?>

    </ul>


    
</body>
</html>