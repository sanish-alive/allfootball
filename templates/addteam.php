<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/addteam.css">
    <title>Add Team Details</title>
</head>
<body>
    <div class="container">
        <h2>Add Team Details</h2>
        <form action="addteamauth.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="coach">Coach:</label>
                <input type="text" id="coach" name="coach" required>
            </div>

            <div class="form-group">
                <label for="history">History:</label>
                <textarea id="history" name="history" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="stadium">Stadium:</label>
                <input type="text" id="stadium" name="stadium" required>
            </div>

            <div class="form-group">
                <label for="ranking">Ranking:</label>
                <input type="number" id="ranking" name="ranking" required>
            </div>

            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" id="logo" name="logo" accept="image/*" required>
            </div>

            <input type="submit" name="submit" value='submit'/>
        </form>
    </div>
</body>
</html>




