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
                    <span class="card-title">Log a Visit</span>
                    <br>
                    <form>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="client" type="text" class="validate">
                                <label for="client">Select Client</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="date" type="text" class="datepicker">
                                <label for="date">Date</label>
                            </div>
                            <div class="input-field col s3">
                                <input id="time" type="text" class="timepicker">
                                <label for="time">Time</label>
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