<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="todo-app">
        <h2>To-do List <img src="images/icon.png"></h2>
        <div class="row">
            <input type="text" name="input" class="input-box" placeholder="Masukkan Kegiatanmu">
            <button name="btn-add" onclick="addTask()">Add</button>
        </div>
                <ul id="list-container">
                <!-- <li class="checked">Task 1</li>
                <li>Task 2</li>
                <li>Task 3</li> -->
                </ul>
                <button type="submit"><a href="../index.php">Logout</a></button>   
    </div>
</div>
<script src="script.js"></script>
</body>
</html>