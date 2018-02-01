<tr>
    <td>David</td>
    <td>Yi</td>
    <td>109</td>
    <td>ABC</td>
    <td>1234567890</td>
    <td>davidyi@david.yi</td>
    <td><a class="material-icons black-text modal-trigger" href ="#edit" >edit</a></td>
</tr>
<div id="edit" class="modal">
    <div class="modal-content">
        <h5>Edit Client Information</h5>
        <p>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s3">
                        <input value="David" id="firstname" type="text">
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="input-field col s3">
                        <input value="Yi" id="lastname" type="text">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="input-field col s1">
                        <input value="60" id="age" type="number">
                        <label for="age">Age</label>
                    </div>
                    <div class="input-field col s5">
                        <input value="davidyi@david.yi" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input value="123 David Yi" id="street" type="text">
                        <label for="street">Street</label>
                    </div>
                    <div class="input-field col s1">
                        <input value="YI" id="state" type="text">
                        <label for="state">State</label>
                    </div>
                    <div class="input-field col s1">
                        <input value="12345" id="zip" type="text">
                        <label for="zip">Zip</label>
                    </div>
                    <div class="input-field col s4">
                        <input value="123-456-7890" id="phone" type="tel" class="validate">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="input-field col s1">
                        <input value="ABC" id="branch" type="text">
                        <label for="branch">Branch</label>
                    </div>
                    <div class="input-field col s1">
                        <input value="" id="Di" type="text">
                        <label for=""></label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="notes" class="materialize-textarea"></textarea>
                        <label for="notes">Notes</label>
                    </div>
                </div>
            </form>
        </div>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
</div>