<?php include 'head.blade.php';?>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<?php include 'navbar.php';?>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input placeholder="Search for a Veteran..." id="search" type="text" class="validate">
            </div>
        </div>
    </div>
</div>

<div class="container">

    <ul class="collapsible" data-collapsible="expandable">
        <li>
            <div class="collapsible-header center-align">
                Options
            </div>
            <?php include 'selector.php';?>
        </li>
    </ul>
    <div class="section">
        <div class="row">
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
                    <?php include 'table.blade.php';?>
                    <?php include 'table.blade.php';?>
                    </tbody>
                </table>
                <!-- CODE FOR COLLECTION GOES HERE -->

            </div>
        </div>
    </div>
</div>
</body>
</html>