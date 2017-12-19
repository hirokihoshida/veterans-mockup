<?php include 'head.php';?>

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
    <div class="section">
        <div class="row">
            <div class="col s12">
                <ul class="collapsible popout" data-collapsible="expandable">

                    <li>
                        <div class="collapsible-header">
                            John Doe
                        </div>
                        <?php include 'info.php';?>
                    </li>
                    <li>
                        <div class="collapsible-header">David Yi</div>
                        <?php include 'info.php';?>
                    </li>
                    <li>
                        <div class="collapsible-header">Person 3</div>
                        <?php include 'form.php';?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>