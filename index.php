<?php
include 'Connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../Images/livre.jpg" sizes="35x35">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <meta name="description" content="">
        <meta name="author" content="">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <title></title>

        <style>
          
        </style>
    </head>

    <body>

       

        <form method="POST" name="form" id="form" enctype="multipart/form-data" style="margin-left:30%; margin-right:20%; margin-top:5%">
                                <div class="jumbotron">
                                    <div class="form-group">
                                        <label class="form-label">Région:
                                        </label>
                                        <select class="form-control"  name="reg" id="view_data">
                                            <option selected>-- choisir --</option>
                                            <?php
                                            $req = "select * from region";
                                            $req_e = $cnx->prepare($req);
                                            $req_e->execute();
                                            while ($region = $req_e->fetch()) {
                                                echo'<option value=' . $region['id'] . '>' . $region['libelle'] . '</option>';
                                            }
                                            ?>
                                        </select>                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Localité :
                                        </label>
                                        <select class="form-control"  name="ouvrage" id="detail">
                                            
                                        </select>
                                       <div class="form-group">
                                       <label class="form-label">Sols :
                                         <select class="form-control"  name="ouvrage1" id="detail1">
                                            
                                        </select>

                                         <div class="form-group">
                                       <table class="form-label" border="1"> :
                                         <tr class="form-control"  name="ouvrage1" id="detail1">
                                            
                                        </select>                                        
                                   
                            </form>
                            <table class="table table-condensed" border="1">


                            <tr class="active">...</tr>
<tr class="success"></tr>
<tr class="warning"></tr>
<tr class="danger"></tr>
<tr class="info"> </tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="active">...</td>
  <td class="success">...</td>
  <td class="warning">...</td>
  <td class="danger">...</td>
  <td class="info">...</td>
</tr>
</table>
                                            

       
       <script src="bootstrap/js/jquery-1.11.1.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>  

        <script>
                            $(document).ready(function () {

                                //code ajax pour la vue

                                $('#view_data').on('change', function () {
                                    var id = $(this).val();
									//console.log(id);
                                   
                                    $.ajax({
                                        url: "models.php",
                                        method: "POST",
                                        data: {vue: id},
                                        success: function (data) {
                                            $('#detail').html(data);
                                            //$('#dataModal').modal('show');
                                        }
                                    });
                                });


                            });
        </script>


   <script>
                            $(document).ready(function () {

                                //code ajax pour la vue

                                $('#detail').on('change', function () {
                                    var id = $(this).val();
									//console.log(id);
                                   
                                    $.ajax({
                                        url: "models2.php",
                                        method: "POST",
                                        data: {vue1: id},
                                        success: function (data) {
                                            $('#detail1').html(data);
                                            //$('#dataModal').modal('show');
                                        }
                                    });
                                });


                            });
        </script>


    </body>
</html>
