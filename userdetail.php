<?php
include 'config.php';


  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
    	.container
        {
        --stripe: #cfd8dc;
  --bg: #e1e1e1;

  background: linear-gradient(135deg, var(--bg) 25%, transparent 25%) -50px 0,
    linear-gradient(225deg, var(--bg) 25%, transparent 25%) -50px 0,
    linear-gradient(315deg, var(--bg) 25%, transparent 25%),
    linear-gradient(45deg, var(--bg) 25%, transparent 25%);
  background-size: 100px 100px;
  background-color: var(--stripe);
    }
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}
        

    </style>
</head>
<body>
 <div class="bg">
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Users</h2>
            <?php
                include 'config.php';
                $sql = "SELECT id,name,email,balance FROM  users" ;
                $result=mysqli_query($conn,$sql);
                if(!$result)
                    echo mysqli_error($conn);
                $rows=mysqli_fetch_assoc($result);
            ?>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                <td class="py-2"><?php echo $rows['id'] ?></td>
                <td class="py-2"><?php echo $rows['name']?></td>
                <td class="py-2"><?php echo $rows['email']?></td>
                <td class="py-2"><?php echo $rows['balance']?></td>
                </tr>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                <tr>
                <td class="py-2"><?php echo $rows['id'] ?></td>
                <td class="py-2"><?php echo $rows['name']?></td>
                <td class="py-2"><?php echo $rows['email']?></td>
                <td class="py-2"><?php echo $rows['balance']?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        <br>
           
        </select>
        
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>