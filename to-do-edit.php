<?php
include("./connect.php");


// edit code
if (isset($_GET['edit'])) {
    $edit = $_GET['edit'];
    // fetch task
    $select = "SELECT * FROM `todolist`";
    $selectQuery = mysqli_query($connect, $select);
    $fetch = mysqli_fetch_assoc($selectQuery);

    // edit
    if (isset($_POST['update'])) {
        $task = $_POST['task'];
        $update = "UPDATE `todolist` SET `task`='$task' WHERE id = $edit";
        $query = mysqli_query($connect, $update);
        header('location: to-do-list.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: rgba(92, 18, 210, 0.546);
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form {
        background-color: white;
        border-radius: 10px;
        width: 30%;
        padding: 30px;

        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    h2 {
        color: rgba(92, 18, 210, 0.924);
    }

    .enter {
        background-color: rgba(128, 128, 128, 0.26);
        height: 38px;
        border-radius: 20px;
        padding-left: 20px;
        display: flex;
        align-items: center;
    }

    input[type="text"] {
        border: none;
        outline: none;
        background-color: transparent;
        width: 100%;
    }

    #submit {
        color: white;
        background-color: rgba(92, 18, 210, 0.924);
        border: none;
        font-size: 13px;
        padding: 10px 20px;
        border-radius: 20px;
    }

    .show {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #delete {
        background-color: red;
    }

    #edit {
        background-color: rgba(92, 18, 210, 0.924);
        border: none;
        font-size: 13px;
        padding: 10px 20px;
        border-radius: 20px;
    }

    #edit a {
        text-decoration: none;
        color: white;
    }

    #delete {
        background-color: red;
        border: none;
        font-size: 13px;
        padding: 10px 15px;
        border-radius: 20px;
    }

    #delete a {
        text-decoration: none;
        color: white;
    }

    #edit {
        background-color: rgba(92, 18, 210, 0.924);
        border: none;
        font-size: 13px;
        padding: 10px 20px;
        border-radius: 20px;
    }

    #edit a {
        text-decoration: none;
        color: white;
    }
</style>

<body>

    <form action="" method="POST">
        <h2>Edit List</h2>
        <div class="enter">
            <input type="text" name="task" id="enterTask" value="<?php echo $fetch['task'] ?>">
            <input type="submit" name="update" value="Update" id="submit">
        </div>


    </form>

</body>

</html>