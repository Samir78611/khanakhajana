<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <style>
        /* CSS Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Form Container */
form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

/* Form Labels */
form label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
}

/* Form Inputs */
form input[type="text"],
form input[type="file"] {
    width: calc(100% - 22px); /* account for padding */
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border-color 0.3s;
}

form input[type="text"]:focus,
form input[type="file"]:focus {
    border-color: #5b9dd9;
    outline: none;
}

/* Submit and Reset Buttons */
form input[type="submit"],
form input[type="reset"] {
    width: calc(50% - 12px); /* account for margin */
    padding: 10px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background-color: #5b9dd9;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="reset"] {
    background-color: #d9534f;
    margin-left: 10px;
}

form input[type="submit"]:hover,
form input[type="reset"]:hover {
    background-color: #428bca;
}

form input[type="reset"]:hover {
    background-color: #c9302c;
}

/* Media Queries for Responsiveness */
@media (max-width: 480px) {
    form {
        padding: 15px;
    }

    form input[type="submit"],
    form input[type="reset"] {
        width: 100%;
        margin-bottom: 10px;
    }

    form input[type="reset"] {
        margin-left: 0;
    }
}

    </style>
    <form action="{{url('#')}}" method="post" enctype="multipart/form-data">
    
        <h1 style="color:green">Edit Food Details</h1><hr>
        <label for="food_name">Food</label>
        <input type="text" id="food_name" name="food_name" value="{{ $edit_food[0]->food_name }}" required><br>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" required><br>
        <label for="price">Price</label>
        <input type="text" id="price" name="price" required><br>
        <label for="quality">Food Quality</label>
        <input type="text" id="quality" name="quality" required><br>
        <label for="feedback">Give your feedback</label>
        <input type="text" id="feedback" name="feedback" required><br>
        <input type="submit" value="submit">
        <input type="reset" value="Reset"> 
    </form>

</body>
</html>