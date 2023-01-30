<?php
session_start();
require 'connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Family Edit</title>
</head>

<body>


    <div>
        <div>
            <div>
                <h4>Family Edit
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
                        <form action="function.php" method="POST">
                            <input type="hidden" name="family_id" value="<?= $family['id']; ?>">

                            <div>
                                <label>Family Name</label>
                                <input type="text" name="name" value="<?= $family['name']; ?>" class="form-control">
                            </div>
                            <div>
                                <label>Family Email</label>
                                <input type="email" name="email" value="<?= $family['email']; ?>" class="form-control">
                            </div>
                            <div>
                                <label>Family Address</label>
                                <input type="text" name="address" value="<?= $family['address']; ?>" class="form-control">
                            </div>

                            <div>
                                <button type="submit" name="update" class="btn btn-primary" href="index.php">
                                    Update Member
                                </button>
                            </div>

                        </form>
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