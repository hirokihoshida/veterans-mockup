<?php include 'head.blade.php';?>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<?php include 'navbar.php';?>
<div class="container">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" class="datepicker">
        </div>
        <div class="col s12">
            <table class="striped">
                <thead>
                <tr>
                    <th>First</th>
                    <th>Last</th>
                    <th>Age</th>
                    <th>Branch</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Edit</th>
                </tr>
                </thead>

                <tbody>
                <?php include 'table.blade.php';?>

                </tbody>
            </table>
            <!-- CODE FOR COLLECTION GOES HERE -->


        </div>
    </div>
</div>
</body>
</html>