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
                                <input value="" id="firstname" type="text">
                                <label for="flkirstname">First Name</label>
                            </div>
                            <div class="input-field col s3">
                                <input value="" id="lastname" type="text">
                                <label for="lastname">Last Name</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="age" type="number">
                                <label for="age">Age</label>
                            </div>
                            <div class="input-field col s5">
                                <input value="" id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input value="" id="street" type="text">
                                <label for="street">Street</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="state" type="text" >
                                <label for="state">State</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="zip" type="text">
                                <label for="zip">Zip</label>
                            </div>
                            <div class="input-field col s4">
                                <input value="" id="phone" type="tel" class="validate">
                                <label for="phone">Phone</label>
                            </div>

                            <div class="input-field col s1">
                                <input value="" id="branch" type="text">
                                <label for="branch">Branch</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="disability" type="text">
                                <label for="disability">Disability</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="senior" type="text">
                                <label for="senior">Senior</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="charservice" type="text">
                                <label for="charservice">Character of Service</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="validid" type="text">
                                <label for="validid">Valid ID</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="incomelevel" type="text">
                                <label for="incomelevel">Income Level</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="benefits" type="text">
                                <label for="benefits">Benefits</label>
                            </div>
                            <div class="input-field col s1">
                                <input value="" id="drivers" type="text">
                                <label for="drivers">Drivers</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="Background" type="text">
                                <label for="Background">Background</label>
                            </div>
                            <div class="input-field col s2">
                                <input value="" id="combat" type="text">
                                <label for="combat">Combat Zone Service</label>
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