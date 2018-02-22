<?php include 'head.blade.php';?>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<?php include 'navbar.php';?>
<div class="container">
    <div class="row">
        <br>
        <div class="col s12">
            <div class="card white">
                <div class="card-content">
                    <span class="card-title">Add Client</span>
                    <br>
                    <form>
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
                <div class="card-action">
                    <a href="#">Save</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>