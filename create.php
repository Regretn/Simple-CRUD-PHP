<?php

session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Create Family</title>
</head>

<body>

    <div>
        <div>
            <div>
                <h4>Family Add
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div>
                <form action="function.php" method="POST">

                    <div>
                        <label>Family Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div>
                        <label>Family Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div>
                        <label>family Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="save" href="index.php">Save Family</button>
                        <!-- You need to click the back button in order to see the update -->
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>