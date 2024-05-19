<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food service App</title>
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
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
            justify-content: center;
            align-items: center;
        }

        /* Header Section */
        .header {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .image-slider {
            position: absolute;
            width: 100%;
            height: 250%;
            display: flex;
        }

        .image-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            position: absolute;
        }

        .image-slider img.active {
            opacity: 1;
        }

        .header-content {
            position: absolute;
            top: 222px;
            left: 0;
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            overflow: hidden;
        }

        .search-bar input {
            padding: 5px 10px;
            border: none;
            outline: none;
            background-color: transparent;
            color: #fff;
        }

        .search-bar button {
            background-color: transparent;
            border: none;
            color: #fff;
            padding: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #menu-select {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            padding: 10px;
            color: #fff;
            border-radius: 5px;
        }

        #logout {
            position: relative;
            right: 34px;
            background-color: #dc3545;
            border-radius: 12px;
        }

        #logout:hover {
            background-color: #c82333;
        }

        /* Main Content Section */
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }

        /* Footer Section */
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
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
            width: calc(100% - 22px);
            /* account for padding */
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
            width: calc(50% - 12px);
            /* account for margin */
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
        <blade media|%20(max-width%3A%20480px)%20%7B%0D>form {
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
    @if(Session::has('success'))
        <h3 style="color:green">{{ Session::get('success') }}</h3>
    @endif
    <header class="header">
        <div class="image-slider">
            <img src="{{ url('pic.jpg') }}" class="slide active" alt="Food Image 1">
            <img src="{{ url('pic_2.jpg') }}" class="slide" alt="Food Image 2">
            <img src="{{ url('pic_3.jpg') }}" class="slide" alt="Food Image 3">
        </div>
        <div class="header-content">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search...">
                <button id="cancel-search">&times;</button>
            </div>
            <select id="menu-select">
                <option value="option1">Menu Option 1</option>
                <option value="option2">Menu Option 2</option>
                <option value="option3">Menu Option 3</option>
            </select>
            <button id="logout">Logout</button>
        </div>
    </header>

    <main class="main-content">
        <h1 style="color:#c2309e">Welcome to Khana khajana Service</h1>
        <!-- Main content goes here -->
    </main>
    <hr>
    <hr>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <label for="food_name">Food Name</label>
        <input type="text" id="food_name" name="food_name" required><br>
        <label for="image">Image</label>
        <input type="file" id="image" name="image"  accept="image/jpg, image/jpeg" required><br>
        <label for="price">Price</label>
        <input type="text" id="price" name="price" required><br>
        <label for="quality">Food Quality</label>
        <input type="text" id="quality" name="quality" required><br>
        <label for="feedback">Give your feedback</label>
        <input type="text" id="feedback" name="feedback" required><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Food Service App</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
<!-- javascript details -->
<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');

    function showNextSlide() {
        slides[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.add('active');
    }

    setInterval(showNextSlide, 3000);

    document.getElementById('cancel-search').addEventListener('click', () => {
        document.getElementById('search').value = '';
    });

</script>

</html>
