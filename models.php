<?php

include('Connexion.php');


      if (isset($_POST["vue"])) {
            $output = '';
            $sql = "select * from localite where id_region='" . $_POST["vue"] . "'";
            $req = $cnx->prepare($sql);
            $req->execute();

				while ($localite = $req->fetch()) {
					
            $output .= 
                                                '<option value=' . $localite['id'] . '>' . $localite['libelle'] . '</option>';
                                            }
           
           
            echo $output;
			 }
          
?>