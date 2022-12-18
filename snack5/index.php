<!--Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. 
-->

<?php

$paragrafo = "Le avventure di Pinocchio di Carlo Collodi sono un classico per l’infanzia senza tempo.

In questa edizione troviamo la prefazione di Giampietro De Angelis che offre un quadro sull’autore, Carlo Collodi. Anzitutto Collodi è un paese nei pressi di Pescia, in Toscana, ed il paese dove si trovavano i nonni di Collodi, che in realtà si chiamava Carlo Lorenzini.

L’autore passò molto tempo dal nonno mentre i genitori lavoravano a Firenze e il fascino del paesino deve averlo colpito così tanto da voler adottare come cognome proprio il nome del borgo medievale. Un paese che dagli anni Cinquanta vanta anche un parco dedicato a Pinocchio, che ripercorre le atmosfere della fiaba, una favola per bambini, sì, ma sempre attuale anche per gli adulti. Collodi, si legge nella prefazione, si formò proprio nel paese del nonno, diventando in seguito giornalista e scrittore.";

$arrayParagrafi = explode( '.', $paragrafo);

// var_dump( $arrayParagrafi);

for($i=0; $i<count($arrayParagrafi); $i++){

    if( $arrayParagrafi[$i] !== ''){
        echo "<p>";
        echo $arrayParagrafi[$i];
        echo "</p>";
    }
}

?>