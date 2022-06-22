<html>

<head>
    <title>login page</title>
</head>

<body>
    <form action="test.php" method="GET">
        <table align="center">
            <tr>
                <th colspan="2">
                    <h2 align="center">Login</h2>
                </th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="hidden" name="pwd" value = "1234"></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
    <?php

echo date("l jS \of F Y h:i:s A");

?>
</body>

</html>