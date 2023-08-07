<!DOCTYPE html>
<html>
<head>
    <title>Form Örneği</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $cinsiyet = isset($_POST["cinsiyet"]) ? $_POST["cinsiyet"] : "";
        $ilgi_alani = isset($_POST["ilgi_alani"]) ? $_POST["ilgi_alani"] : array();
        $sehir = isset($_POST["sehir"]) ? $_POST["sehir"] : "";
        $message = isset($_POST["message"]) ? $_POST["message"] : "";
    
        echo "<h2>Gönderilen Bilgiler:</h2>";
        echo "<p><strong>Ad:</strong> " . $name . "</p>";
        echo "<p><strong>E-posta:</strong> " . $email . "</p>";
        echo "<p><strong>Cinsiyet:</strong> " . $cinsiyet . "</p>";
        
        if (!empty($ilgi_alani)) {
            echo "<p><strong>İlgi Alanları:</strong> " . implode(", ", $ilgi_alani) . "</p>";
        } else {
            echo "<p><strong>İlgi Alanları:</strong> Seçilmedi</p>";
        }
        
        echo "<p><strong>Şehir:</strong> " . $sehir . "</p>";
        echo "<p><strong>Mesaj:</strong> " . $message . "</p>";
    }
    ?>
    
    <form method="POST" action="">
        <label>Ad:</label>
        <input type="text" name="name"><br>
        
        <label>E-posta:</label>
        <input type="email" name="email"><br>
        
        <label>Cinsiyet:</label>
        <input type="radio" name="cinsiyet" value="Erkek">Erkek
        <input type="radio" name="cinsiyet" value="Kadın">Kadın<br>
        
        <label>İlgi Alanları:</label>
        <input type="checkbox" name="ilgi_alani[]" value="Programlama">Programlama
        <input type="checkbox" name="ilgi_alani[]" value="Tasarım">Tasarım
        <input type="checkbox" name="ilgi_alani[]" value="Müzik">Müzik<br>
        
        <label>Şehir:</label>
        <select name="sehir">
            <option value="Istanbul">İstanbul</option>
            <option value="Ankara">Ankara</option>
            <option value="Izmir">İzmir</option>
        </select><br>
        
        <label>Mesaj:</label>
        <textarea name="message"></textarea><br>
        
        <input type="submit" value="Gönder">
    </form>
</body>
</html>
