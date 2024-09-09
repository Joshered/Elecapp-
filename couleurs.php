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
                    <label for="demande" class="col-md-4  my-md-5 mt-5 h-25">premier chiffre significatif</label>
                    <select class="col-md-7 mt-3 my-md-5 h-25" name="demande" id="demande" >
                        <option value="">Puissance</option>
                        <option value="">Tension</option>
                        <option value="">Intensité</option>
                        <option value="">Rèsistance</option>
                    </select>
                    <label for="" class="col-md-4   my-md-5 mt-5 h-25">Données</label>
                    <select class="col-md-3 me-5 mt-3 my-md-5 h-25" name="donnee1" id="donnee1" >
                    <option value="">Puissance</option>
                        <option value="">Tension</option>
                        <option value="">Intensité</option>
                        <option value="">Rèsistance</option>
                    </select>
                    <select class="col-md-3  mt-3 my-md-5 h-25" name="donnee2" id="donnee2" >
                    <option value="">Puissance</option>
                        <option value="">Tension</option>
                        <option value="">Intensité</option>
                        <option value="">Rèsistance</option>
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