<div class="modal-body text-center">
    <p id="notification_deux"></p>
<form class="form-group" action="{{route("inser_maternite")}}" id="formulaire_deux">
        @csrf
        <input type="hidden" value="{{$objet_maternite->id}}" name="id_maternite">
        <div class="form-floating mt-2">
            <select name="maternite_grossesse_a_terme" class="form-control" required>
                <option value>Etait Une grossesse à Terme? ?</option>
                <option>Non</option>
                <option>Oui</option>
            </select>
            <label> Grossesse à T</label>
        </div>
        <div class="form-floating mt-2">
            <select name="maternite_statut_serologique_vih" class="form-control" required>
                <option value>Est-t-il Une PVV ?</option>
                <option value="Negatif">Non</option>
                <option value="Positif">Oui</option>
            </select>
            <label>Statut sérologique VIH</label>
        </div> 
        <div class="form-floating mt-2">
            <input type="text" name="maternite_obs" class="form-control" maxlength="90" required placeholder="Quelle est L'observation">
            <label>Observation</label>
        </div> 
        <div class="mt-3">
        <button class="btn btn-success" id="boutton_deux"><label class="bi bi-save2"></label> Enregister</button>
        </div>
    </form>
</div>