<!DOCTYPE html>
<html>
    <head>
        <title>SIA Mahasiswa</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
<body>
    <div class="container">
        <h1>SIA Mahasiswa</h1>
        <p>Silahkan login untuk melanjutkan.</p>
        <form action="proses/login.php" method="post">
            <label>Username</label>
            <br>
            <input type="text" name="username">
            <br><br>        
            <label>Password</label>
            <br>
            <input type="password" name="password">
            <br><br>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>