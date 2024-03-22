<html>
    <head></head>
    <body>
        <form method="POST" action="vali.php">

        password:<input type="password" name="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br>
        
        <label>Phone No:</label>
        <input type="tel" name="phone" pattern="^\d{3}-\d{3}-\d{4}$" required><br>

        e-mail<input type="email" name="em" pattern="[a-z0-9.]+@[a-z0-9.]+\.[a-z]{2,3}$"><br>
        what ever :<input type="text" pattern="/four|for|4/"><br>
        <button name="submit">submit</button>

        <?php
            if(preg_match("/ell/","hello world",$matches));{
            echo "match found <br>";
            echo $matches[0]."<br>";
            }
            if(preg_match("/ll.*/","hellooww",$matches));
            {
            echo "match found"."<br>";
            echo $matches[0];
            }
        ?>
        </form>
    </body>
</html>
<!-- ?0|1
*0|more
+1|more -->
