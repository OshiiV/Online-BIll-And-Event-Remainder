<?php

    include 'connect.php';
    $id=$_GET['updateid'];
    if(isset($_POST['addtolist'])){
        $Task = $_POST['Task'];
        $Time = $_POST['Time'];

        $sql="update `crud` set id =$id, Task= '$Task', Time= '$Time' where id=$id";

        $result=mysqli_query($con,$sql);
        if($result){
            echo "updated successfully";
           // header('location:dis.php');
        }else{
            die(mysqli_error($con));
        }



    }


?>

<html>
<head>
	<title>
		RemindMe!
	</title>
	<link rel="stylesheet" href="todo.css"/>
</head>
	<body class="bgcolor">
		<header>
				<h1>RemindMe!</h1>
		</header>
		<nav>
			<ul>
				<li class="it"><a href="home.html">Home</a></li>
				<li> <a href="calander.html">calander</a></li>
				<li><a href="todo.html">To-Do</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="faq.html">FAQ</a></li>
			</ul>
		</nav>


      <div class ="task" >
        <table-caption>Add Task</table-caption>
      </div> 

      <form method="POST">
        <div class="name">
            <label for="tname">Task:</label>
            <input type="text" id="Task" name="Task" autocomplete="off">
        </div>

        <br>

        <div class="time">
            <label for="time">Time:</label>
            <input type="text" id="Time" name="Time" autocomplete="off">
        </div>

        <button id="addtolist" name="addtolist">Add To List</button>
        
      </form>

	
	
	</body>
	<footer>
		<p>RemindMe!,copyright &copy;2023</p>
	</footer>

	
</html>
		
		
	
