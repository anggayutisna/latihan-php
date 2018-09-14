<html>

<head>
        <title>Login Form</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">

    Username : <input type="text" name ="username"><br>
    Password : <input type="password" name ="password"><br>

    <input type="submit" name="Input" value="Login">
    </FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    if ($_POST["username"]=="angga" && $_POST["password"]=="123"){
    echo "Login Berhasil";
}   else{
    echo "Login gagal";
}
}