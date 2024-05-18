<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food service App</title>
</head>

<body>
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

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Food Service App</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

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
        border-radius:12px;
    }

    #logout:hover {
        background-color: #c82333;
    }

    .main-content {
        flex: 1;
        padding: 20px;
        background-color: #f8f9fa;
    }

    .footer {
        background-color: #343a40;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
    }

</style>
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
