<form class="form-avis">
    <h5>Ajouter un avis</h5>
    <div class="form-row">
        <div class="col">
            <input class="form-control field" id="pseudo" type="text" placeholder="Pseudo" name="pseudo">
        </div>
        <div class="col">
            <input class="form-control field" id="mail" type="text" placeholder="Adresse mail" name="mail">
        </div>
        <div class="col">
            <select id="note" class="form-control field">
                <option disabled selected>Note</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>

    <textarea class="form-control field" id="commentaire" placeholder="Commentaire"></textarea>
    <button type="button" class="btn btn-primary" id="sendComment">Envoyer votre avis</button>
</form>