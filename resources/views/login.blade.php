<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1>loging page</h1>      

        <?php
        if (isset($error)) {
            echo $error;
        }
        ?>

        <form action="login" method="post">
            @csrf
            Username <input type="text" name="uname"/><br>
            Password <input type="password" name="password"/>
            <input type="submit" value="login"/>
        </form>


    </body>

</html>

