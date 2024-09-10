<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>code de couleur des rèsistance</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body >
    <?php 
         include 'menu.php';
    ?>
    <section >
        <div class="container p-5">
            <div class="justify-content-end">
                <div class="row">
                    <label for="demande" class="col-md-4  my-md-5 mt-5 h-25">Premier chiffre significatif</label>
                    <select class="col-md-7 mt-3 my-md-5 h-25" name="demande" id="demande" >
                        <option value="" style="background-color: maroon;" class="text-light">Marron</option>
                        <option value="" style="background-color: red;" class="text-light">Rouge</option>
                        <option value="" style="background-color: orange;" class="text-light">Orange</option>
                        <option value="" style="background-color: yellow;" class="text-light">Jaune</option>
                        <option value="" style="background-color: green;" class="text-light">Vert</option>
                        <option value="" style="background-color: blue;" class="text-light">Bleu</option>
                        <option value="" style="background-color: magenta;" class="text-light">Violet</option>
                        <option value="" style="background-color: gray;" class="text-light">Gris</option>
                        <option value="" style="background-color: white;" class="text-darck">Blanc</option>
                    </select>
                    <label for="demande" class="col-md-4  my-md-5 mt-5 h-25">Deuxième chiffre significatif</label>
                    <select class="col-md-7 mt-3 my-md-5 h-25" name="demande" id="demande" >
                        <option value="" style="background-color: black;" class="text-light">Noir</option>
                        <option value="" style="background-color: maroon;" class="text-light">Marron</option>
                        <option value="" style="background-color: red;" class="text-light">Rouge</option>
                        <option value="" style="background-color: orange;" class="text-light">Orange</option>
                        <option value="" style="background-color: yellow;" class="text-light">Jaune</option>
                        <option value="" style="background-color: green;" class="text-light">Vert</option>
                        <option value="" style="background-color: blue;" class="text-light">Bleu</option>
                        <option value="" style="background-color: magenta;" class="text-light">Violet</option>
                        <option value="" style="background-color: gray;" class="text-light">Gris</option>
                        <option value="" style="background-color: white;" class="text-darck">Blanc</option>
                    </select>
                    <label for="demande" class="col-md-4  my-md-5 mt-5 h-25">Multiplicateur</label>
                    <select class="col-md-7 mt-3 my-md-5 h-25" name="demande" id="demande" >
                        <option value="">Or</option>
                        <option value="">Argent</option>
                        <option value="">Noir</option>
                        <option value="">Marron</option>
                        <option value="">Rouge</option>
                        <option value="">Orange</option>
                        <option value="">Jaune</option>
                        <option value="">Vert</option>
                        <option value="">Bleu</option>
                        <option value="">Violet</option>
                    </select>
                    <label for="demande" class="col-md-4  my-md-5 mt-5 h-25">Tolerence</label>
                    <select class="col-md-7 mt-3 my-md-5 h-25" name="demande" id="demande" >
                    <option value="">Noir</option>
                        <option value="">Or</option>
                        <option value="">Argent</option>
                        <option value="">Marron</option>
                        <option value="">Rouge</option>
                        <option value="">Vert</option>
                        <option value="">Bleu</option>
                        <option value="">Violet</option>
                    </select>
                    



                    <span class=" col-0 col-md-6"></span>
                    <button type="button" class="btn btn-primary col-2 mt-4" >solution</button>
                </div>
            </div>
        </div>
    </section>
   
    

   
   
    


    <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>