<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
</head>
<body>
    <h1>Kayıt Ol</h1>
    <form action="process/register_process.php" method="post">
        <label>Kullanıcı Adı:</label>
        <input type="text" name="username" required><br>
        <label>E-Posta:</label>
        <input type="email" name="email" required><br>
        <label>Şifre:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Kayıt Ol</button>
    </form>
</body>
</html>