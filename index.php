<?php
    /** ESERCIZIO DA CONSEGNARE */
    /**
     * 1-Creare una variabile con assegnato un testo per popolare un paragrafo.
     * 2- Visualizzare a schermo il paragrafo.
     * 3- Visualizzare a schermo la lunghezza di testo del paragrafo.
     * 4- Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, 
     * ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, 
     * all'interno del testo creato da voi sopra, con tre *.
     * 5- Stampare a schermo il paragrafo con il testo censurato.
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
    <!-- 1-Creare una variabile con assegnato un testo per popolare un paragrafo. -->
    <?php
        $testoParagrafo = " pppppppppppppppppppppppppppppppppppppppppppppppppppppproooova";
    ?>

    <!-- 2- Visualizzare a schermo il paragrafo. -->
    <h1>Esercizio badwords con php</h1>
    <p>
        <?php 
            echo $testoParagrafo; // echo è il comando di print
        ?>
    </p>

    <!-- 3- Visualizzare a schermo la lunghezza di testo del paragrafo. -->
    <p>il paragrafo è lungo: 
        <?php 
            echo strlen($testoParagrafo)
        ?> 
        caratteri
    </p>

    <!-- 4- censura parola -->
    <?php
        $parolaCensurata = $_GET["badword"];
        $testoCensurato = str_replace("$parolaCensurata", "***", $testoParagrafo);
    ?>

    <!-- 5- Stampare a schermo il paragrafo con il testo censurato. -->
    <p><?php echo $testoCensurato;?></p>

</body>
</html>