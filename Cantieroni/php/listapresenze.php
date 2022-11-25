<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Presenze</title>
    <link rel="stylesheet" href="../css/listapresenze.css">
</head>
<body>
    <div>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th id="chi">Chi</th>
                <th id="orario">Orario</th>
            </tr>
            <?php
                for($i=0; $i<10; $i++){
                    ?>
                    <tr>
                        <td class="utenti">
                            <?php
                                if(rand(1, 2) == 1){
                                    ?>
                                        <img class="pallini" src="../img/pallino verde.png">
                                        Utente <?="$i"?>
                                    <?php
                                }
                                else{
                                    ?>
                                        <img class="pallini" src="../img/pallino rosso.png">
                                        Utente <?="$i"?>
                                    <?php
                                }
                            ?>
                        </td>
                        <td><?="$i"?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
</html>