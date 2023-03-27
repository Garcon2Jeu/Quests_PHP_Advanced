<form action="form.php" method="post">
  <div>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="user_lastName" required>
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="user_firstName" required>
  </div>
  <div>
    <label for="courriel">Courriel :</label>
    <input type="email" id="courriel" name="user_email" required>
  </div>
  <div>
    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="user_tel" required>
  </div>
  <div>
    <label for="sujets">Sujet: </label>
    <select name="sujets" id="sujets" required>
      <option value="Retard">Retard</option>
      <option value="Absence">Absence</option>
      <option value="Apéro">Apéro</option>
    </select>
  </div>
  <div>
    <label for="message">Message :</label>
    <textarea id="message" name="user_message" required></textarea>
  </div>
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>
</form>

<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  if (!isset($_POST['user_lastName']) || (trim($_POST['user_lastName']) === "")) {
    $errors[] = "Le nom est obligatoire";
  }

  if (!isset($_POST['user_firstName']) || (trim($_POST['user_firstName']) === "")) {
    $errors[] = "Le prénom est obligatoire";
  }

  if (!isset($_POST['user_email']) || (trim($_POST['user_email']) === "")) {
    $errors[] = "Le mail est obligatoire";
  }

  if (filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) == false) {
    $errors[] = "Le mail n'est pas valide";
  }

  if (!isset($_POST['user_tel']) || (trim($_POST['user_tel']) === "")) {
    $errors[] = "Le numéros de téléphone est obligatoire";
  }

  if (!isset($_POST['sujets']) || (trim($_POST['sujets']) === "")) {
    $errors[] = "Le sujet est obligatoire";
  }

  if (!isset($_POST['message']) || (trim($_POST['message']) === "")) {
    $errors[] = "Le message est obligatoire";
  }

  if (empty($errors)) {
    header('Location: thanks.php');
  }
}
?>

<section>
  <?php
  if (count($errors) > 0) : ?>
    <div>
      <ul>
        <?php foreach ($errors as $errorMessage) : ?>
          <li><?= $errorMessage ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
</section>