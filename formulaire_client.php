<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<title>Ajouter un client</title>
</head>

<body>
<h2>Ajouter un nouveau client</h2><br>
<form action="add_client.php" method="post">
<table width="452" border="1">
  <tr>
    <td width="114">Nom :</td>
    <td width="322"><input type="text" name="snom" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td>Prénom :</td>
    <td><input type="text" name="sprenom" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td>Adresse :</td>
    <td><input type="text" name="sadresse" size=30 maxlength="150" /></td>
  </tr>
  <tr>
    <td>Code postal :</td>
    <td><input type="text" name="scodepostal" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td>Ville :</td>
    <td><input type="text" name="sville" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td>Tel fixe : </td>
    <td><input type="text" name="stelfixe" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td>Mobile :</td>
    <td><input type="text" name="smobile" size=20 maxlength="30" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Enregistrer" /></td>
  </tr>
</table>
</form>
</body>
</html>
