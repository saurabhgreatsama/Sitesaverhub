<!-- <?php foreach ($testlist as $item): ?>
    <?php 
    $full_string = $item->url;
    $url = substr($full_string, strpos($full_string, '/') + 1);
    ?>
    <a href="<?php echo $url; ?>"><?php echo $url; ?></a><br>
<?php endforeach; ?> -->

<!-- <form action="<?php echo base_url('process_form')?>" method="POST">
    <input type="text" name="user_id" value="<?php echo $test1 ?>">
    <input type="text" name="url" value="<?php echo $test[0] ?>">
    <label for="sitename">Sitename:</label>
    <input type="text" name="sitename" id="sitename" required><br>
	<input type="text" name="details" id="details" required><br>
    <button type="submit">Submit</button>
</form> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: white;
            color: black;
			margin-top: 117px;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #cdb30c;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group textarea {
            height: 100px;
            resize: none;
        }
        .submit-button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .submit-button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
	<center><h1><bold>SITESAVERHUB</bold></h1></center>
    <div class="form-container">
        <h2 style="color: white;">Site Information Form</h2>
        <form action="<?php echo base_url('process_form')?>" method="post">
		<input type="hidden" name="user_id" value="<?php echo $test1 ?>">
    <input type="hidden" name="url" value="<?php echo $test[0] ?>">
            <div class="form-group">
                <label for="sitename">Site Name</label>
                <input type="text" id="sitename" name="sitename" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="details" required></textarea>
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</body>
</html>







