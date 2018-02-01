<?php include 'head.blade.php'; ?>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<?php include 'navbar.php'; ?>

<div class="container">
    <div class="section">
        <div class="row">
            <br>
            <br>
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img src="Clients.jpg">
                        <span class="card-title"><b>Clients</b></span>
                    </div>
                    <div class="card-content">
                        <p>Information and data for all Veterans Services clients.</p>
                    </div>
                    <div class="card-action">
                        <a href="list.blade.php" class="black-text">View</a>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img src="Report.jpg">
                        <span class="card-title black-text"><b>Reports</b></span>
                    </div>
                    <div class="card-content">
                        <p>Generate reports for individual client or entire database.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="black-text">Individual</a>
                        <a href="#" class="black-text">Group</a>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img src="Report.jpg">
                        <span class="card-title black-text"><b>Visits</b></span>
                    </div>
                    <div class="card-content">
                        <p>Log the visits of clients.</p>
                    </div>
                    <div class="card-action">
                        <a href="log.blade.php" class="black-text">Log Visit</a>
                    </div>
                </div>
            </div>
            <div class="col s6">
                <div class="card">
                    <div class="card-image">
                        <img src="Search.jpg">
                        <span class="card-title"><b>Search</b></span>
                    </div>
                    <div class="card-content">
                        <p>Search the database of clients.</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="black-text">Basic</a>
                        <a href="#" class="black-text">Advanced</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>