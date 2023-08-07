<?php
// Giriş durumunu kontrol etmek için kullanıcı adı ve şifreyi burada tanımlayın.
$username = "s221210414";
$password = "16229904722";

// Kullanıcının formu doldurup gönderip göndermediğini kontrol ediyoruz.
if (isset($_POST['username']) && isset($_POST['password'])) {
    $inputUsername = $_POST['username'];
    $inputPassword = $_POST['password'];

    // Girilen kullanıcı adı ve şifreyi kontrol ediyoruz.
    if ($inputUsername == $username && $inputPassword == $password) {
        echo "<h1>Giriş yapıldı!</h1>";
    } else {
        // Yönlendirme kodu ile geri sayfaya yönlendiriyoruz ve hatalı giriş mesajı gösteriyoruz.
        echo "<h1>Hatalı kullanıcı adı veya şifre!</h1>";
        echo "<p>3 saniye içinde giriş sayfasına yönlendirileceksiniz.</p>";
        header("Refresh: 3; url=login.html"); // 3 saniye sonra login.html sayfasına yönlendirme yapacak.
        exit; // Daha fazla işlem yapmadan çıkış yapar.
    }
}
?>