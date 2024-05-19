<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food Service Sign Up</title>

        @if($errors->any())
        @foreach($errors->all() as $error)
        <h3 style="color:green">{{$error}}</h3>
        @endforeach
        
        @endif
        @if(Session::has('success'))
        <h3 style="color:green">{{Session::get('success')}}</h3>
        @endif
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }

            .container {
                max-width: 600px;
                margin: 50px auto;
                background-color: #99ccff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            img {
                display: block;
                margin: 0 auto;
                max-width: 100%;
                border-radius: 100px;
                margin-bottom: 20px;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                font-weight: bold;
                margin-bottom: 5px;
            }

            input,
            textarea {
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 100%;
                box-sizing: border-box;
            }

            button {
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                width: 100%;
                box-sizing: border-box;
            }

            button:hover {
                background-color: #0056b3;
            }

            input:focus,
            textarea:focus {
                outline: none;
                border-color: #007bff;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            }

            <blade media|%20screen%20and%20(max-width%3A%20600px)%20%7B%0D>.container {
                margin: 20px;
            }
            

        </style>
    </head>

    <body>
        <div class="container">
            <img src="{{ url('food.jpg') }}" alt="Food Image">
            <h2>Food Service Sign Up</h2>
            <form action="{{url('registration')}}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Submit</button>
            </form>
            <a href="{{url('login')}}">If you have already account so login here to continue.</a>
        </div>
    </body>

    </html>

</body>

</html>
