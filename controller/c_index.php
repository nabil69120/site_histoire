<?php
    $page_url = "index.php";

    //------Recherche des couvertures------
    include("./model/m_connexionBDD.php");
    include("./model/m_couverture_index.php");

    try
    {
        $conn = ConnexionBDD::getConnexion();
        $sql = "SELECT * FROM `couverture`";
        //$sth = $conn->prepare($sql);
        //$sth->execute();
        //$data = $sth->fetchAll(PDO::FETCH_ASSOC);
        $nb_couvertures = 0;
        foreach  ($conn->query($sql) as $row) {
            $couverture_index[$nb_couvertures] = new CouvertureIndex($row['id'], $row['title'], $row['description'], $row['link_img']);
            $nb_couvertures++;
            //print $row['id_story'] . "\t";
            //print  $row['name'] . "\t";
            //print $row['calories'] . "\n";
        }
        //$couverture_index[0] = new CouvertureIndex($row['name'],$row['name']);

        //echo $data;
    }
    catch(PDOException $e)
    {
        $erreur = $e->getMessage();
    }








    include("./view/main.php");
?>