
        <?php
        //generation des données
        $nbutilisateur = 100; //nombre d'utilisateurs
        $nbtache = 50; //nombre de tâches

        echo "<h3>création des utilisateurs</h3>";
        $data = [];
        $sql = "insert into utilisateur values ";
        for ($i = 1; $i <= $nbutilisateur; $i++) {
            if ($i == 1) {
                $uti_mdp = password_hash("guinot2019", PASSWORD_DEFAULT); 
                $data[] = "(null,'daba','$uti_mdp',1)";
            } else {
                $uti_username = $faker->name;
                $utl_mot_de_passe = password_hash("motdepasse$i", PASSWORD_DEFAULT);   //crypter le mot de passe
                $data[] = "(null,'$uti_username','$utl_mot_de_passe',2)";
            }
        }
        $link->query($sql . implode(",", $data));


        echo "<h3>création des categories</h3>";
        $data = [];
        $categorie = array("téléphoner", "envoyer un mail", "envoyer un courrier", "rencontrer", "rédiger un document", "aller à rendez-vous", "aller sur un site", "autre");

        $sql = "insert into categorie values ";
        for ($i = 0; $i < count($categorie); $i++) {
            $cat_nom = $categorie[$i];
            $data[] = "(null,'$cat_nom')";
        }
        $link->query($sql . implode(",", $data));

        echo "<h3>création des taches</h3>";
        $data = [];
        $sql = "insert into tache values ";
        $date = false;
        for ($i = 1; $i <= $nbtache; $i++) {
            $tac_libelle = "libelle de la tache n°$i";
            $hasard = rand(0, 10);
            if ($hasard % 2 == 0) {
                $dateheure = mktime(rand(0, 23), rand(0, 59), 0, rand(1, 12), rand(1, 30), 2019);
                $tac_date_heure = date("Y-m-d-H-i-s", $dateheure);
                $date = true;
            }
            $tac_memo = "memo : tache $i";
            shuffle($categorie);
            $tac_categorie = rand(1, count($categorie));
            $tac_utilisateur = rand(1, $nbutilisateur);

            if ($hasard > 5 and $hasard < 8)
                $tac_etat = "archiver";
            else
                $tac_etat = "";

            // structuration de la requette selon l'existance du champs date 
            if ($date)
                $data[] = "(null,'$tac_libelle','$tac_date_heure','$tac_memo','$tac_categorie','$tac_utilisateur','$tac_etat')";
            else
                $data[] = "(null,'$tac_libelle',null,'$tac_memo','$tac_categorie','$tac_utilisateur','$tac_etat')";
        }
        $link->query($sql . implode(",", $data));
        ?>
