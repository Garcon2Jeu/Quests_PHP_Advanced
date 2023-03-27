<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastName">
    </div>
    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstName">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telephone">Téléphone :</label>
        <input  type="tel"  id="telephone"  name="user_phoneNumber">
    </div>
    <div>
      <label for="sujets">Sujet: </label>
      <select name="sujets" id="sujets">
        <option value="Retard">Retard</option>
        <option value="Absence">Absence</option>
        <option value="Apéro">Apéro</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>