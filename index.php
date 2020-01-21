<!-- Riscrivere questa pagina del sito google: https://policies.google.com/faq
Ci sono diverse domande con relative risposte: la cosa a cui vorrei prestaste più attenzione
è la gestione del “database” di faq e la visualizzazione di queste domande e risposte utilizzando PHP.
Una volta che la lista di faq è popolata in maniera dinamica (con php), aggiungete l'header
e il footer e stilate tutto con sass
Nome repo: php-google-faq -->
<?php
$google_faqs = [
    ['question' => "<h3>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h3>",
    'answer' => "<p>testo della answer 1</p>"],

    ['question' => "<h3>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h3>",
    'answer' => "<p>testo della answer 2</p>"],

    ['question' => '<h3>Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?</h3>',
    'answer' => "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'>fai clic qui.</a> Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
    è inoltre possibile <a href='#'>visitare la nostra pagina di assistenza per avere ulteriori informazioni.</a></p>"],

    ['question' => "<h3>Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?</h3>",
    'answer' => "<p>testo della answer 4</p>"]
];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script> -->
    <link rel="stylesheet" href="public/css/style.css">
    <title>Boolean clss#8 - google faq con php</title>
</head>

<body>

    <header>

    </header>

    <main class="container">

    <?php
    foreach ($google_faqs as $faq) {
        echo $faq['question'];
        echo '<br>';
        echo $faq['answer'] ;
        echo '<br>';
    }
    ?>





    </main>
    <footer>
        <div id="#footer-$bar">

        </div>
    </footer>

    <!-- <script id="template-NAME" type="text/x-handlebars-template"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- js bootstrap -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="public/js/main.js"></script>
</body>

</html>
