<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steganografi LSB</title>
    <link rel="stylesheet" href="stylekritik.css">
</head>
<body>
    <div class="container">
        <h1>Steganografi LSB</h1>
        <form action="steganography.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Pilih Gambar (PNG):</label>
                <input type="file" name="image" id="image" accept="image/png" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan Rahasia:</label>
                <textarea name="message" id="message" rows="4" placeholder="Tulis pesan..." required></textarea>
            </div>
            <button type="submit" name="action" value="encrypt">Enkripsi</button>
            <button type="submit" name="action" value="decrypt">Dekripsi</button>
        </form>
        <a href="home.php"><button type="button" class="btn btn-danger" style="border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; width: 100%;">Back to Home</button></a>
    </div>
</body>
</html>
