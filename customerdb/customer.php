<?php

    if (!isset($_GET["id"]))
    {
        header("Location: /customerdb");
    }

    include "../includes/db.php";
    $con = getDBConnection();
    $customerID = $_GET["id"];

    try {
        $query = "SELECT * FROM customerdatabase WHERE CustomerID = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $customerID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);

        $firstName = $row["FirstName"];
        $lastName = $row["LastName"];
        $address = $row["Address"];
        $city = $row["City"];
        $state = $row["State"];
        $zip = $row["Zip"];
        $phone = $row["Phone"];
        $email = $row["Email"];
        $password = $row["Password"];
    }
    catch (mysqli_sql_exception $ex) {
        echo $ex;
    }

    // do the update (update the db)
    if (!empty($_POST["txtFirstName"]) && !empty($_POST["txtLastName"]) &&
        !empty($_POST["txtAddress"]) && !empty($_POST["txtCity"]) &&
        !empty($_POST["txtState"]) && !empty($_POST["txtZip"]) &&
        !empty($_POST["txtPhone"]) && !empty($_POST["txtEmail"]) && !empty($_POST["txtPassword"]) ) {

        $txtFirstName = $_POST["txtFirstName"];
        $txtLastName = $_POST["txtLastName"];
        $txtAddress = $_POST["txtAddress"];
        $txtCity = $_POST["txtCity"];
        $txtState = $_POST["txtState"];
        $txtZip = $_POST["txtZip"];
        $txtPhone = $_POST["txtPhone"];
        $txtEmail = $_POST["txtEmail"];
        $txtPassword = $_POST["txtPassword"];

        try {
            $query = "UPDATE customerdatabase SET FirstName = ?, LastName = ?, Address = ?, City = ?, State = ?, Zip = ?, Phone = ?, Email = ?, Password =? WHERE CustomerID = ?;";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "ssssssssss", $txtFirstName,
                $txtLastName, $txtAddress, $txtCity, $txtState, $txtZip, $txtPhone, $txtEmail, $txtPassword, $customerID);
            mysqli_stmt_execute($stmt);

            header("Location: /customerdb");
        }
        catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rodrigo website</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="./css/grid.css">

</head>
<body>
<?php
include"../includes/header.php";
?>
<div id="three-column">
    <?php
    include "../includes/navigation.php";
    ?>
    <main >
        <form method="post" <div class="grid-container">

            <div class="grid-header">
                <h3>Add new customer</h3>
            </div>

            <div class="customer-first">
                <label for="txtFirstName">First Name</label>
            </div>
            <div class="firstname-input">
                <input type="text" name="txtFirstName" id="txtFirstName" value="<?=$firstName;?>">
            </div>

            <div class="customer-last">
                <label for="txtLastName">Last Name</label>
            </div>
            <div class="lastname-input">
                <input type="text" name="txtLastName" id="txtLastName" value="<?=$lastName;?>">
            </div>

            <div class="customer-address">
                <label for="txtAddress">Address</label>
            </div>
            <div class="address-input">
                <input type="text" name="txtAddress" id="txtAddress" value="<?=$address;?>">
            </div>

            <div class="customer-city">
                <label for="txtCity">City</label>
            </div>
            <div class="city-input">
                <input type="text" name="txtCity" id="txtCity" value="<?=$city;?>">
            </div>

            <div class="customer-state">
                <label for="txtState">State</label>
            </div>
            <div class="state-input">
                <input type="text" name="txtState" id="txtState" value="<?=$state;?>">
            </div>

            <div class="customer-zip">
                <label for="txtZip">Zip</label>
            </div>
            <div class="zip-input">
                <input type="text" name="txtZip" id="txtZip" value="<?=$zip;?>">
            </div>

            <div class="customer-phone">
                <label for="txtPhone">Phone</label>
            </div>
            <div class="phone-input">
                <input type="text" name="txtPhone" id="txtPhone" value="<?=$phone;?>">
            </div>

            <div class="customer-email">
                <label for="txtEmail">Email</label>
            </div>
            <div class="email-input">
                <input type="text" name="txtEmail" id="txtEmail" value="<?=$email;?>">
            </div>
            <div class="customer-password">
                <label for="txtPassword">Password</label>
                <input type="password" name="txtPassword" id="txtPassword" value="<?=$password;?>">
            </div>


            <div class="grid-footer">
                <input type="submit" value="Update Customer">
                <input type="button" value="Delete Customer" id="delete">

            </div>


        </div>
    </main>
</div>

<?php
include "../includes/footer.php"
?>
<script>
    const deleteButton = document.querySelector('#delete')
    deleteButton.addEventListener('click',() => {
        window.location = './delete.php?id=<?=$customerID?>'
    })
</script>
</body>
</html>