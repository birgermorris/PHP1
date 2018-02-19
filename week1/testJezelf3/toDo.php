<?php
    $tasks = [
            ["description" => "PHP Test jezelf 1", "hours" => 30, "category" => "School"],
            ["description" => "Cleaning room", "hours" => 2, "category" => "Home"],
            ["description" => "Preparing for work", "hours" => 0.5, "category" => "Work"],
            ["description" => "Choosing songs for playlist", "hours" => 4, "category" => "Spare time"],
            ["description" => "PHP Test jezelf 2", "hours" => 1, "category" => "Home"],
        ];
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>PHP 1</title>
	<style>
        .toDo {
            display:flex;
            justify-content:space-between;
        }
        .red{
            background-color: darkred;
        }
        .green{
            background-color: darkseagreen;
        }
        .orange{
            background-color: darkorange;
        }
    </style>
</head>
<body>
<h1>To Do List</h1>

<div class="list">
	<?php foreach($tasks as $task): ?>
        <div class="toDo <?php 
            switch($task["hours"]){
        case $task["hours"] > 5:
            echo "red";
            break;
        case $task["hours"] > 1:
            echo "orange";
            break;
        case $task["hours"] > 0:
            echo "green";
            break;
        }
             ?>">
            <p class="description"><?php echo $task["description"]; ?></p>
            <p class="category"><?php echo $task["category"]; ?></p>   
        </div>
       
    <?php endforeach; ?>
</div>
</body>
</html>