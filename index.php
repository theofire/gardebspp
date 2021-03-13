<?php
session_start();
?>
<!--METTRE LES NOMS-->
 <!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="utf-8">
 <title>Accueil</title>
 <link rel="stylesheet" type="text/css" href="main.css">
 </head>
 <body>
 	<h2>Feuille de garde</h2>

<?php if (!empty($_SESSION['msg_usr'])):
    echo $_SESSION['msg_usr'];
    unset($_SESSION['msg_usr']);
endif; ?>

<form action="traitement.php" method="post">
 
      <fieldset>
      <legend>VSAV 418</legend>
      <input type="hidden" name="vhl" value="VSAV 418">
      <input type="hidden" name="type" value="vsav">
      <label for="cavsav1">Chef d'agrès</label>
      <input id="cavsav1" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="eqvsav1">Équipier</label>
      <input id="eqvsav1" placeholder="Grade + Nom" autofocus="" required="" name="eq"><br>
      <label for="condvsav1">Conducteur</label>
      <input id="condvsav1" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>
  <p><input type="submit" value="Envoyer"></p>
</form>

<form action="traitement.php" method="post">
      <fieldset>
      <legend>VSAV 411</legend>
      <input type="hidden" name="vhl" value="VSAV 411">
      <input type="hidden" name="type" value="vsav">
      <label for="cavsav2">Chef d'agrès</label>
      <input id="cavsav2" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="eqvsav2">Équipier</label>
      <input id="eqvsav2" placeholder="Grade + Nom" autofocus="" required="" name="eq"><br>
      <label for="condvsav2">Conducteur</label>
      <input id="condvsav2" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
    <form action="traitement.php" method="post">
      <fieldset>
      <legend>FPTL 133</legend>
      <input type="hidden" name="vhl" value="FPTL 133">
      <input type="hidden" name="type" value="fpt">
      <label for="cafptl133">Chef d'agrès</label>
      <input id="cafptl133" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="pcfptl133">Premier Chef</label>
      <input id="pcfptl133" placeholder="Grade + Nom" autofocus="" required="" name="pc"><br>
      <label for="psfptl133">Premier Servant</label>
      <input id="psfptl133" placeholder="Grade + Nom" autofocus="" required="" name="ps"><br>
      <label for="condfptl133">Conducteur</label>
      <input id="condfptl133" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>


    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>FPTL 178</legend>
      <input type="hidden" name="vhl" value="FPTL 178">
      <input type="hidden" name="type" value="fpt">
      <label for="cafptl178">Chef d'agrès</label>
      <input id="cafptl178" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="pcfptl178">Premier Chef</label>
      <input id="pcfptl178" placeholder="Grade + Nom" autofocus="" required="" name="pc"><br>
      <label for="psfptl178">Premier Servant</label>
      <input id="psfptl178" placeholder="Grade + Nom" autofocus="" required="" name="ps"><br>
      <label for="condfptl178">Conducteur</label>
      <input id="condfptl178" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>PSE 299</legend>
      <input type="hidden" name="vhl" value="PSE 299">
      <input type="hidden" name="type" value="fpt">
      <label for="capse299">Chef d'agrès</label>
      <input id="capse299" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="pcpse299">Premier Chef</label>
      <input id="pcpse299" placeholder="Grade + Nom" autofocus="" required="" name="pc"><br>
      <label for="pspse299">Premier Servant</label>
      <input id="pspse299" placeholder="Grade + Nom" autofocus="" required="" name="ps"><br>
      <label for="condpse299">Conducteur</label>
      <input id="condpse299" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>  

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>EPAN 330</legend>
      <input type="hidden" name="vhl" value="EPAN 330">
      <input type="hidden" name="type" value="divers">
      <label for="caepan330">Chef d'agrès</label>
      <input id="caepan330" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condepan330">Conducteur</label>
      <input id="condepan330" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>CA 348</legend>
      <input type="hidden" name="vhl" value="CA 348">
      <input type="hidden" name="type" value="divers">
      <label for="caca348">Chef d'agrès</label>
      <input id="caca348" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condca348">Conducteur</label>
      <input id="condca348" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>CD 389</legend>
      <input type="hidden" name="vhl" value="CD 389">
      <input type="hidden" name="type" value="divers">
      <label for="cacd389">Chef d'agrès</label>
      <input id="cacd389" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condcd389">Conducteur</label>
      <input id="condcd389" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>VTU 291</legend>
      <input type="hidden" name="vhl" value="VTU 291">
      <input type="hidden" name="type" value="divers">
      <label for="cavtu291">Chef d'agrès</label>
      <input id="cavtu291" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condvtu291">Conducteur</label>
      <input id="condvtu291" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>VPS 19</legend>
      <input type="hidden" name="vhl" value="VPS 19">
      <input type="hidden" name="type" value="divers">
      <label for="cavps19">Chef d'agrès</label>
      <input id="cavps19" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condvps19">Conducteur</label>
      <input id="condvps19" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>SPVL 928</legend>
      <input type="hidden" name="vhl" value="SPVL 928">
      <input type="hidden" name="type" value="divers">
      <label for="caspvl928">Chef d'agrès</label>
      <input id="caspvl928" placeholder="Grade + Nom" autofocus="" required="" name="ca"><br>
      <label for="condspvl928">Conducteur</label>
      <input id="condspvl928" placeholder="Grade + Nom" autofocus="" required="" name="cond"><br>
      </select><br>
      </fieldset>

    <p><input type="submit" value="Envoyer"></p>
</form>
<form action="traitement.php" method="post">
      <fieldset>
      <legend>GOLF-3</legend>
      <input type="hidden" name="vhl" value="GOLF-3">
      <input type="hidden" name="type" value="golf">
      <label for="op75">Opérateur 75</label>
      <input id="op75" placeholder="Grade + Nom" autofocus="" required="" name="op"><br>
      <label for="tikdep">Ticket de départ</label>
      <input id="tikdep" placeholder="Grade + Nom" autofocus="" required="" name="tik"><br>
      </select><br>
      </fieldset>

  <p><input type="submit" value="Envoyer"></p>
</form>
 </body>
</html> 
