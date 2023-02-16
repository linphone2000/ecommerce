<!DOCTYPE html>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<link rel="stylesheet" href="style.css">
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
    <form class="login" action="insert.php" method="POST" enctype="multipart/form-data">
        <div>
            <input class="login__input" type="text" id="name" name="name" placeholder="Enter name" required>
        </div>
        <br>

        <div>
            <input class="login__input" type="text" id="category" name="category" placeholder="Enter category" required>
        </div>    
        <br>

        <div>
            <input class="login__input" type="text" id="price" name="price" placeholder="Enter price" required>
        </div>    
        <br>

        <div>
            <input class="login__input" type="text" id="description" name="description" placeholder="Enter description" required>
        </div>    
        <br>

        <div>
            <input class="login__submit" type="file" name="img">
        </div>

        <div class="login__position">
				<input class="login__submit" type="submit" value="Upload">
		</div>    
    </form>
</div> 
<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>
</html>