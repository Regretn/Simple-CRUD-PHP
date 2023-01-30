<?php
require 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family View</title>
</head>

<body>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <h4>Family View Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div>

                        <?php
                        if (isset($_GET['id'])) {
                            $family_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM family WHERE id='$family_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $family = mysqli_fetch_array($query_run);
                        ?>

                                <div>
                                    <label><b>Family Name</b></label>
                                    <p class="form-control">
                                        <?= $family['name']; ?>
                                    </p>
                                </div>
                                <div>
                                    <label><b>Family Email</b></label>
                                    <p class="form-control">
                                        <?= $family['email']; ?>
                                    </p>
                                </div>
                                <div>
                                    <label><b>Family Address</b></label>
                                    <p class="form-control">
                                        <?= $family['address']; ?>
                                    </p>
                                </div>


                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>