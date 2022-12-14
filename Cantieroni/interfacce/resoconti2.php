<!DOCTYPE html>
<html lang="it">
<head>
  <title>Resoconti</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-3">.col-sm-3</div>
    <div class="col-6">
        <div style="height:210px; border-style:solid; border-color:#808080; border-width:2px; border-left:none; border-right: none; border-top: none;" >

        <form method="POST">
          <input type="hidden" name="IdUtente" value="Zhario" />
            <div style="text-align : center; border-style:solid; none; border-color:#000000; border-width:2px; border-radius: 12px; overflow: hidden; ">
                <div style="background-color: rgba(255, 142, 0, 0.98);">
                  <label for="oggetto" style="margin-botto: 2px; ">Oggetto:</label>
                  <input type="text"  name="oggetto" value="" style="border: none; background-color: transparent; resize: none; outline: none; width: 92%; height:50px " >
                </div>
                <div style="border-style:solid; border-left:none; border-right: none; border-color:#000000; border-width:1px; background-color: rgba(231, 228, 228, 0.86);">
                  <textarea name="resoconto" cols="40" rows="4" style="border: none; background-color: transparent; resize: none; outline: none; width: 100%; height:auto;" ></textarea>
                </div>
                <input type="file" id="files" name="files" multiple>
                <input type="submit" value="Manda" name="invio">
          </div>
        </form>
      </div>



      <div style="margin-top: 15px">

      <?php
      if(isset($_POST["invio"])){
        for($i=0; $i< 10; $i++){
        if((isset($_POST["oggetto"])) && (isset($_POST["resoconto"])) && (isset($_POST["IdUtente"])) ){
          $og = $_POST["oggetto"];
          $text= $_POST["resoconto"];
          $id = $_POST["IdUtente"];

          echo '<div style="margin: auto;border-style:solid; none; border-color:#000000; border-width:1px; border-radius: 12px; overflow: hidden;">
          <div style="background-color: rgba(255, 142, 0, 0.98);">
          &emsp;Utente: '. $id .' &emsp;Oggetto: '. $og . '
          </div>
          <div style="border-style:solid; border-left:none; border-right: none; border-color:#000000; border-width:1px; min-height: 100px; background-color: rgba(231, 228, 228, 0.86);">
              '. $text .'
          </div>
          <div style="text-align:center; ">
            QUI STANNO I DOCUMENTI/FOTO RICEVUTI
          </div >
          </div>
          <br><br>
          ';
        }
        }
      }
        
          

      ?>
      </div>
    </div>
    


    <div class="col-3">.col-sm-3</div>

  </div>

</div>

</body>
</html>