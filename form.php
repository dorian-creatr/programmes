<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
    <br>
    <select name="choix">
    <option value="choix1">frite</option>
    <option value="choix2">fr</option>
    <option value="choix3">it</option>
    <option value="choix4">rr</option>
</select>
<br>
<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
<br>
Aimez-vous les frites ?
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
<br>
<input type="hidden" name="pseudo" value="Mateo21" />
</p>

</form>


<p>envoi de fichier</p>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>
