<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmerAPI Frontend</title>
    <link rel="stylesheet" href="crops.css">
</head>
<body>
    <h1>FarmerAPI Frontend</h1>

    <h2>All Available Crops</h2>
    <ul id="cropList"></ul>

    <h2>Crop Details</h2>
    <label for="cropId">Enter Crop ID:</label>
    <input type="number" id="cropId">
    <button onclick="getCropDetails()">Get Details</button>
    <div id="cropDetails"></div>

    <script src="crops.js"></script>
</body>
</html>
