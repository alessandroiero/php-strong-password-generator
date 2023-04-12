<?php
// includiamo il file esterno delle funzioni
require_once __DIR__ .'/functions.php';
    
$pswlength= $_GET['pw'];
$password= create_pw($pswlength);


// facciamo la condizione per la lunghezza
if($_GET['pw'] > 7) {
    $pw_created  = "la tua pw è: {$password}";
}  elseif($_GET['pw'] < 7){
    $pw_created = "la pw deve essere più lunga!";
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <title>PHP Strong Password Generator</title>
</head>

<body class="container">
    <!-- titolo -->
    <div class="titolo">
        <h1>PHP Strong Password Generator</h1>
    </div>
    <!-- titolo -->

    <!-- form -->
    <form class="form py-4">
        <label for="pw">Quanto deve essere lunga la tua password?</label>
        <input class='px-2' name="pw" id="password" type="number" placeholder="cifra maggiore di 7">
        <button class="btn btn-primary" name="generapw" type="submit">crea</button>
    </form>
    <!-- /form -->

    <!-- stampiamo la password -->
    <div class="password-generata">
        <?php echo $pw_created; ?>
    </div>
    <!--/password-generata -->
</body>

</html>


<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->