<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Presenze</title>
    <link rel="stylesheet" href="../css/listapresenze.css">
</head>
<body>
    <div class="table-responsive" style="overflow-x: hidden;">
        <table class="table table-bordered">
            <tr>
                <th>Chi</th>
                <th>Orario</th>
            </tr>
            <?php
                for($i=0; $i<15; $i++){
                    ?>
                    <tr>
                        <td>
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