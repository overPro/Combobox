<?php

include('Connexion.php');


      if (isset($_POST["vue1"])) {
            $output = '';
            //$sql = "select * from localsol where id_local='" . $_POST["vue1"] . "'";
            //$sql = "select * from localsol, sol where id_sol='" . $_POST["vue1"] . "' ";
$sql = "SELECT sol.libelle, sol.descript FROM localsol, sol, localite WHERE localsol.id_local= '" . $_POST["vue1"] . "' AND localsol.id_sol=sol.id  limit 2 ";
            $req = $cnx->prepare($sql);
            $req->execute();

				while ($localite = $req->fetch()) {
					
            $output .= 
                                                /*'<option value=' . $localite['id'] . '>' . $localite['id'] . '</option>';*/
                                                '<option value=' . $localite['id'] . '>' . $localite['libelle'] . '</option>';
                                            }
           
           
            echo $output;
			 }
          
?>