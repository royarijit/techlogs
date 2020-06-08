<?php

if(isset($_SESSION['username'])){

    //dashboard
}
else{
    ?>
    <html>
    <head>
        <title>
            Techlogs Home
        </title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <div class="navbar">Techlogs</div>
    <br><br><br><br><br>
    <center>
    <form action="" method="post">
                <input type="search" placeholder="Enter keywords to search techlogs" name="search" class="search_bar"><input type="submit" name="submit" class="search_btn" value="Search">
                </form>
<br><br>
        <div class="account_card"><br><br>Join Techlogs Now!<br><br><br>
        <form action="signup.php" method="post">
<input type="username" name="username" required placeholder="Your name"><br><br>
<input type="email" name="email" required placeholder="Email"><br><br>
<input type="password" name="password" required placeholder="Password"><br><br>
            <input type="password" name="conf_password" required placeholder="Confirm password"><br><br><br>
            <input type="submit" class="submit_btn" name="submit" value="Sign Up"><br><br>
            <a href="login.php" style="text-decoration: none;font-size: 15px;"> login here</a>

</form>
</div>

</center>
    <br><br><b><br><br></b>
    </body>
    </html>
<?php
}
?>