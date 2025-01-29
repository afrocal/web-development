<html>
    <head>
    </head>
    <body>

        <form action="test1.php" method="get">
            Username: <input type="text" name="username">
            <input type="submit">
        </form> 
        <br>
        <?php echo $_GET["username"] ?> 
 
         
    </body>
    
</html>