<?PHP if (!session_id()) session_start(); if (!$_SESSION[ 'logon']){ header( "Location:index.html"); die(); } require_once( 'database.php'); $querySeedlingInventory='Select SeedlingID, AddDate, Amount
    From seedlingInventory 
    Order By seedlingID' ; $statement=$ db -> prepare($querySeedlingInventory); $statement -> execute(); $sInv = $statement -> fetchAll(); $statement -> closeCursor(); ?>



<!DOCTYPE html>
<!--
	Rachel H. Lewis
	Sweet by Nature, Inc. Employee Portal HTML
	inventory-seedlings.php
	Honeybush Seedling Inventory
-->
<html lang="en">

<head>
    <title>Honeybush Plot Reports | Sweet by Nature, Inc.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Link to google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"></span>
            <a class="navbar-brand" href="index.html">
            Sweet by Nature, Inc.
        </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#TopNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="TopNav">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="#sales" class="nav-link">Sales</a>
                </li>
                <li class="nav-item">
                    <a href="#inventory" class="nav-link">Inventory</a>
                </li>
                <li class="nav-item">
                    <a href="#customers" class="nav-link">Customers</a>
                </li>
                <li class="nav-item">
                    <a href="#reports" class="nav-link">Reports</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Section: Main -->
    <div class="main-links border-top border-light">
        <h1 class="text-center">Honeybush Seedling Inventory</h1>

        <!-- 
			
			PHP TABLE FOR ACCESSING HONEYBUSH PLOT REPORTS WILL GO HERE

			-->

        <table cellpadding="0" cellspacing="0" style="width: 100%">
            <tr>
                <th>Seedling Batch ID</th>
                <th>Date Harvested</th>
                <th>Amount in Inventory</th>
            </tr>
            <?php foreach ($sInv as $s) { ?>
            <tr>
                <td>
                    <?php echo $s[ 'SeedlingID']; ?>
                </td>
                <td>
                    <?php echo $s[ 'AddDate']; ?>
                </td>
                <td>
                    <?php echo $s[ 'Amount']; seedlings?>
                </td>
            </tr>
            <?php } ?>
    </div>
    <!-- Section: Links grid-->
    <div class="container-fluid secondary-links">
        <div class="row">
            <div class="col-xs-12 col-lg-6 col-xl-3">
                <a id="sales"><h4>Sales and Purchase Orders</h4></a>
                <a href="sales-new-order.php">
                    <p>Place a new order</p>
                </a>
                <a href="sales-history.php">
                    <p>Sales history
                        <p>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-3">
                <a id="inventory"><h4>Inventory and Tracking</h4></a>
                <a href="inventory-seedling.php">
                    <p>Honeybush seedling inventory</p>
                </a>
                <a href="inventory-extract.php">
                    <p>Honeybush extract inventory</p>
                </a>
                <a href="inventory-growth-cycle.php">
                    <p>Growth cycle tracker</p>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-3">
                <a id="customers"><h4>Customers</h4></a>
                <a href="customers-manu.php">
                    <p>Existing beverage manufacturer customers</p>
                </a>
                <a href="customers-seedling.php">
                    <p>Existing seedling customers</p>
                </a>
                <a href="customers-new.php">
                    <p>Add a new customer</p>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-3">
                <a id="reports"><h4>Reports</h4></a>
                <a href="reports-plot.php">
                    <p>Honeybush plot reports</p>
                </a>
                <a href="reports-seedling.php">
                    <p>Honeybush seedling reports</p>
                </a>
                <a href="reports-extract.php">
                    <p>Honeybush extract reports</p>
                </a>
                <a href="reports-sales.php">
                    <p>Sales reports</p>
                </a>
            </div>
        </div>
    </div>
    <!-- Section: Footer -->
    <nav class="navbar navbar-expand-sm footer justify-content-center">
        <p class="small">&copy; <a href="https://www.rachelhlewis.com">Rachel H. Lewis</a> for Sweet by Nature, Inc.</p>
    </nav>
</body>

</html>