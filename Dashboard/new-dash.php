<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nikusoft_api";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed");
?>

<!DOCTYPE html>
<!-- saved from url=(0042)https://api.nikusoft.com/new-dashboard.php -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./Dashboard_files/new-dashboard.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Animation Link  -->
    <link rel="stylesheet" href="./Dashboard_files/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Jquery link  -->
    <script src="./Dashboard_files/jquery-3.7.1.slim.min.js.download" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- modal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- modal -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="use-credentials">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="./Dashboard_files/css2">

</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <!-- Update -->

    <?php
    //    ⬇️
    if (isset($_POST['update'])) {

        $apiname = $_POST['apiname'];
        $apiscope = $_POST['apiscope'];
        $fddatabase = $_POST['fdDatabaseId'];
        $fdapifor = $_POST['fdApiFor'];
        $fdwhitelist = $_POST['fdWhitelistedDomains'];
        $apiurl = $_POST['fdRedirectURL'];
        $fdapikey = $_POST['fdApiKey'];
        $fdsecret = $_POST['fdSecret'];
        $fdvalidity = $_POST['fdValidityTill'];
        $status = $_POST['status'];

        $updatequery = "UPDATE `tb_apis` SET 
                            `fdAppName`='$apiname'
                            -- `fdScopes`='$apiscope',
                            -- `fdWhitelistedDomains`='$fdwhitelist',
                            -- `fdRedirectURL`='$apiurl',
                            -- `fdApiKey`='$fdapikey',
                            -- `fdSecret`='$fdsecret',
                            -- `fdValidityTill`='$fdvalidity',
                            -- `fdDatabaseId`=' $fddatabase',
   
                            -- `fdApiFor`='$fdapifor',

                            -- `status`='$status'
    
                            WHERE fdId=4";

        $update = mysqli_query($conn, $updatequery);
        if (!$update) {
            die("QUERY FAILED" . mysqli_error($conn));
        } else {
            echo '<script>alert("Api updated successfully")</script>';
        }
    }
    ?>
    <section id="main" data-scroll-container="">

        <div id="page-1">
            <div id="page-12">
                <!-- <div id="create-api"> -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    <!-- <a href="#" data-target="#myModal"></a> -->
                    Create API
                </button>

                <!-- </div> -->
                <div id="search">
                    <input type="search" placeholder="Search" name="search">
                </div>
            </div>

            <div class="animation-ball1"></div>
            <div class="animation-ball2"></div>
            <div id="hero-shape">
                <div id="hero-1"></div>
                <div id="hero-2"></div>
                <div id="hero-3"></div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create Api</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-row">
                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <input name="userId" type="hidden" value="9">
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Api Name</label>
                                    <input type="text" class="form-control p-2 mr-3" name="appName" placeholder="Enter Your App NAme">
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Select DataBase</label>
                                    <select name="databases" id="database" class="form-select p-3">
                                        <option selected disabled>--Select DataBase--</option>
                                        <option value="1">onetest_db</option>
                                        <option value="2">nikusoft_yt</option>
                                        <option value="3">db_calender_test</option>
                                        <option value="4">nikusoft_onespect</option>
                                    </select>
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Select Table</label>
                                    <select name="dbtables" id="table" class="form-select p-3">
                                        <option selected disabled>--Select Table--</option>
                                        <option value="1">null</option>
                                    </select>
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Select Purpose of Api</label>
                                    <select name="api_for" id="purpose" class="form-select p-3">
                                        <option selected disabled>--Select Purpose of Api--</option>
                                        <option value="1">Read</option>
                                        <option value="2">Login</option>
                                        <option value="3">Registration</option>
                                    </select>
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Scopes</label>
                                    <select name="scopes[]" id="scope" class="form-select p-3">
                                        <option selected disabled>--Select Scopes--</option>
                                        <option value="1">Read</option>
                                        <option value="2">Write</option>
                                    </select>
                                </div>
                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Domain/IP Addresses for Whitelisting</label>
                                    <input type="url" class="form-control p-2 mr-3" name="whitelistedDomains" placeholder="Domain/IP Addresses for Whitelisting">
                                </div>
                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">API Redirect URLS</label>
                                    <input type="text" class="form-control p-2 mr-3" name="redirectUrl" placeholder="Enter Redirect URLS">
                                </div>

                                <div class="form-group mx-sm-12 mb-2 col-md-12">
                                    <label for="input">Validity Till</label>
                                    <input type="date" class="form-control p-2 mr-3" name="validityTill">
                                </div>

                                <button type="submit" name="create" class="btn pl-5 pr-5 btn-success text-white m-4 ">Register API</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="myFunction()" data-dismiss="modal">Close &times;</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- </div> -->


            <!-- -------create modal End-------------------- -->
            <?php
            if (isset($_POST['apiCreate'])) {
                // Validate and sanitize form data
                $userId = filter_var($_POST['userId'], FILTER_VALIDATE_INT);
                $appName = filter_var($_POST['appName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $databaseId = filter_var($_POST['databases'], FILTER_VALIDATE_INT);
                $DbTables = $_POST['dbtables'];
                $apiFor = $_POST['api_for'];
                $scopes = implode(',', $_POST['scopes']); // Convert array to comma-separated string
                $whitelistedDomains = filter_var($_POST['whitelistedDomains'], FILTER_SANITIZE_URL);
                $redirectUrl = filter_var($_POST['redirectUrl'], FILTER_SANITIZE_URL);
                $validityTill = $_POST['validityTill']; // No need for validation as it's a date
                // Generate API key
                $apiKey = generateApiKey();

                $apiSecretCode = generateBearerToken();

                // SQL query to insert into tb_apis using prepared statement
                $insertQuery = "INSERT INTO tb_apis (fdUserid, fdAppName, fdScopes, fdWhitelistedDomains, fdRedirectURL, fdApiKey, fdSecret, fdValidityTill, fdDatabaseId,fdTables,fdApiFor)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                // Prepare the statement
                $stmt = $conn->prepare($insertQuery);

                // Bind parameters
                $stmt->bind_param("isssssssisi", $userId, $appName, $scopes, $whitelistedDomains, $redirectUrl, $apiKey, $apiSecretCode, $validityTill, $databaseId, $DbTables, $apiFor);

                // Execute the statement
                if ($stmt->execute()) {
                    echo '
        <script>
        Swal.fire({
            title: "Good job!",
            text: "API registered successfully!",
            icon: "success"
        });
        </script>
        ';
                } else {
                    echo "Error: " . $stmt->error;
                }
                // Close the statement
                $stmt->close();
            }
            ?>

            <div id="container">

                <?php
                // $query = "SELECT * FROM tb_apis WHERE status = 'active' AND fdDelete = 0";
                $query = "SELECT `tb_apis`.*, `tb_databases`.*  FROM `tb_apis`, `tb_databases` 
                WHERE 
                `tb_apis`.`status` = 'active' 
                AND `tb_apis`.`fdDelete` = 0
                AND `tb_apis`.`fdDatabaseId` = `tb_databases`.`fd_id`";

                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                $results = mysqli_fetch_assoc($data);
                ?>

                <div class="popup-form" id="popup-form">
                    <h1 class="text-center heading">Api Report</h1>

                    <form class="form-row">

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Api Id</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiid" value="<?php echo $results['fdid']; ?>" readonly>
                        </div>

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Api Name</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiname" value="<?php echo $results['fdAppName']; ?>" placeholder="Api NAme">
                        </div>

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Scopes</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiscope" value="<?php echo $results['fdScopes']; ?>" placeholder="Scopes">
                        </div>

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Database</label>
                            <input type="text" class="form-control p-2 mr-3" name="apidb" value="<?php echo $results['fd_database_name']; ?>" placeholder="Database">
                        </div>

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Api For</label>
                            <input type="text" class="form-control p-2 mr-3" name="apifor" value="<?php echo $results['fdApiFor']; ?>" placeholder="Api For">
                        </div>

                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Whitelisted Domains</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiwhitedom" value="<?php echo $results['fdWhitelistedDomains']; ?>" placeholder="Whitelisted Domains">
                        </div>
                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Redirect Url</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiredurl" value="<?php echo $results['fdRedirectURL']; ?>" placeholder="Redirect Url">
                        </div>
                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Api Key</label>
                            <input type="text" class="form-control p-2 mr-3" name="apikey" value=" <?php echo $results['fdApiKey']; ?> " readonly>
                        </div>
                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Secret</label>
                            <input type="text" class="form-control p-2 mr-3" name="apisecret" value=" <?php echo $results['fdSecret']; ?> " readonly>
                        </div>
                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Validity Till</label>
                            <input type="text" class="form-control p-2 mr-3" name="apivalidtill" value=" <?php echo $results['fdValidityTill']; ?> " placeholder="Validity Till">
                        </div>
                        <div class="form-group mx-sm-6 mb-2 col-md-4">
                            <label for="input">Action</label>
                            <input type="text" class="form-control p-2 mr-3" name="apiaction" value=" <?php echo $results['status']; ?> " placeholder="Action">
                        </div>

                        <button type="submit" name="update" class="btn pl-5 pr-5 btn-click btn-success text-white glow-on m-4 ">Update</button>
                        <button type="submit" name="delete" class="btn pl-5 pr-5 btn-click btn-danger text-white glow-on m-4  ">Delete</button>
                        <button type="close" class="btn pl-5 pr-5 btn-warning text-white glow-on m-4  ">Close &times;</button>

                    </form>

                </div>

                <div class="row">
                    <?php

                    $sql = "SELECT * FROM tb_apis WHERE status = 'active' AND fdDelete = 0";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_object($result)) {
                    ?>
                            <div class="rows">
                                <!-- <div class="rows"> -->
                                <div class="card-hover-effect">
                                    <div class="cards aos-init aos-animate" data-aos="slide-up" data-aos-offset="100" data-aos-easing="ease-in-out">
                                        <div class="card-content">
                                            <div class="app-name">
                                                <h3 class="animate-charcter">
                                                    <?php echo $row->fdAppName; ?>
                                                </h3>
                                            </div>
                                            <div class="api-name">
                                                <h4> <?php echo  $row->fdApiKey; ?> </h4>
                                            </div>
                                            <div class="api-key" data-api-key="">
                                                <p class="api-key-value">

                                                </p>
                                                <svg class="copy-btn" xmlns="http://www.w3.org/1000/svg" data-key="<?php echo  $row->fdApiKey; ?>" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                                </svg>
                                                <button type="submit" name="update" class="btn btn-lg btn-outline-success mt-3 btn-click">Update</button>
                                                <button type="submit" name="delete" class="btn btn-lg btn-outline-danger mt-3 btn-click">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                        }
                    } else {
                        echo "No Data Found!";
                    }
                        ?>
                            </div>

                </div>
            </div>
    </section>

    <!-- ---------------- -->

    <script src="https://unpkg.com/aos@next/dist/aos.js">
            AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            // copy api key
            jQuery('.copy-btn').click(function() {
                var text = $(this).attr("data-key");
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(text).select();
                document.execCommand("copy");
                console.log(text);
                $temp.remove();
                alert("Text copied!");
            });

            // Form Pop-up
            $(".btn-click").on("click", function() {
                console.log("Card clicked");
                $(".popup-form").css("display", "block");
            });
// close button popup
            function myFunction() {
  document.getElementById("#popup-form").style.display = "none";
}
        });
    </script>

    // <script>
        //     $(document).ready(function() {
        //         $(".copy-btn").on("click", function() {
        //             // Get the text to copy
        //             var textToCopy = document.getElementsByClassName("api-key-value").innerText;

        //             // Create a temporary textarea element
        //             var tempTextArea = document.createElement("textarea");
        //             tempTextArea.value = textToCopy;

        //             // Append the textarea element to the document
        //             document.body.appendChild(tempTextArea);

        //             // Select the text inside the textarea
        //             tempTextArea.select();
        //             tempTextArea.setSelectionRange(0, 99999); /* For mobile devices */

        //             // Copy the selected text to the clipboard
        //             document.execCommand("copy");

        //             // Remove the temporary textarea
        //             document.body.removeChild(tempTextArea);

        //             // Provide some feedback to the user
        //             alert("Copied to clipboard: " + textToCopy);
        //         })

        //         // Form Pop-up
        //         $(".cards").on("click", function() {
        //             console.log("Cards");
        //             $(".popup-form").css("display", "block");
        //         })

        //     });
    </script>
</body>

</html>