<h2>Merci <?php echo $_POST['user_firstName'] . " " . $_POST['user_lastName'];?> de nous avoir contacté à propos de “<?php echo $_POST['sujets'] ?>”.</h2> 

<br> <br>

<p>Un de nos conseillers vous contactera soit à l’adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_tel'] ?> dans les plus brefs délais pour traiter votre demande : </p>

<br>

<p><?php echo $_POST['user_message'];?></p>

