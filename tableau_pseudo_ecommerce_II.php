<h2>Liste des articles dans la Bdd</h2><p>
<table name="listedesarticles" width="800" border="0">
<?php

include_once "config.php";


$db = mysqli_connect($SERVER, $USER, $PASS, $DBASE);

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    $b_connect=FALSE;
    exit();
}
else {

$b_connect=TRUE;//Connexion réussie
//print "Yo connexion PHP 7 trop cool !<br>\n";

}

//$res = mysqli_query($db, $req)
if ($ModeDebog==1) {print "Fin de déboggage PHP 7<br>\n";}

//mysqli_select_db($DBASE,$db);


//print "Affichage des résultat en PHP 7<br>\n";
//Liste des produits
if ($ModeDebog==1) {print "Listing des produits l_article_7.php<br>\n";}
$req= "select IdProd, LibelleProd, Description, Image, PrixHT from produit";//
if ($res = mysqli_query($db,$req)) {
  //  printf("Super ! Select a retourn&eacute %d lignes.\n", mysqli_num_rows($res));

    print "Affichage des résultat en PHP 7<br>\n";
    $ligne="<tr>\n";//j'intialise la ligne
    //recupération du resultat standard dans un tableau simple
    while($rows=mysqli_fetch_row($res)){
    //Ici je peux remplacer cela par un modulo (voit test_modulo.php), je peux être plus malin et prendre en compte le Nbre de ligne revoyées par la requête....
    //ici je e contente d'un compteur, pas très fufute !
    $i++;//On transforme $i en compteur ! Mais c'est déjà un compteur !
    if ($i<4) {
    $ligne .= "<td width='20'><a href='id_prod.php?codeprod=".$rows[0]."'><img width='200' border='0' src='images/".$rows[3]."'></a></td><td width='50'><img width='50' border='0' src='images/null.jpg'></img></td>\n";
  } else {
    $ligne .= "</tr>\n";//Je fini la ligne
    $i=0;//Je recommence à compter !
    print $ligne;
  }



    }

    /* Libération du jeu de résultats */
    mysqli_free_result($res);
}



?>
</table>
