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
                    <label for="" class="d-none d-lg-inline col-lg-2">4 bandes</label>
                    <label for="nbr11" class="col-md-4  my-md-5 mt-5 h-25 d-lg-none">Premier chiffre significatif</label>
                    <select class="col-md-7 col-lg-2 mt-3 my-md-5 h-25" name="dnbr11" id="dnbr11" >
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
                    <label for="nbr21" class="col-md-4  my-md-5 mt-5 h-25 d-lg-none">Deuxième chiffre significatif</label>
                    <select class="col-md-7 col-lg-2 mt-3 my-md-5 h-25" name="nbr21" id="nbr21" >
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
                    <label for="nbr3" class="col-md-4  my-md-5 mt-5 h-25 d-lg-none">Troisième chiffre significatif</label>
                    <select class="col-md-7 col-lg-2 mt-3 my-md-5 h-25" name="nbr3" id="nbr3" >
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
                    <label for="mult1" class="col-md-4  my-md-5 mt-5 h-25 d-lg-none">Multiplicateur</label>
                    <select class="col-md-7 col-lg-2 mt-3 my-md-5 h-25" name="mult1" id="mult1" >
                        <option value="" style="background-color: gold;" class="text-light">Or</option>
                        <option value="" style="background-color: silver;" class="text-light">Argent</option>
                        <option value="" style="background-color: black;" class="text-light">Noir</option>
                        <option value="" style="background-color: maroon;" class="text-light">Marron</option>
                        <option value="" style="background-color: red;" class="text-light">Rouge</option>
                        <option value="" style="background-color: orange;" class="text-light">Orange</option>
                        <option value="" style="background-color: yellow;" class="text-light">Jaune</option>
                        <option value="" style="background-color: green;" class="text-light">Vert</option>
                        <option value="" style="background-color: blue;" class="text-light">Bleu</option>
                        <option value="" style="background-color: magenta;" class="text-light">Violet</option>
                    </select>
                    <label for="tol1" class="col-md-4  my-md-5 mt-5 h-25 d-lg-none">Tolerence</label>
                    <select class="col-md-7 col-lg-2 mt-3 my-md-5 h-25" name="tol1" id="tol1" >
                        <option value="" style="background-color: gold;" class="text-light">Or</option>
                        <option value="" style="background-color: silver;" class="text-light">Argent</option>
                        <option value="" style="background-color: maroon;" class="text-light">Marron</option>
                        <option value="" style="background-color: red;" class="text-light">Rouge</option>
                        <option value="" style="background-color: green;" class="text-light">Vert</option>
                        <option value="" style="background-color: blue;" class="text-light">Bleu</option>
                        <option value="" style="background-color: magenta;" class="text-light">Violet</option>
                    </select>
                    



                    <span class=" col-0 col-md-6"></span>
                    <button type="button" class="btn btn-primary col-2 mt-4" >Calculer</button>
                </div>
            </div>
        </div>
    </section>
   
    

   
   
    


    <script src="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>