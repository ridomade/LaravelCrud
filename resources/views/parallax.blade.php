<!-- resources/views/parallax.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Parallax</title>

    <!-- Include CSS styles for the parallax effect -->
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .parallax {
            /* The image used */
            background-image: url('https://asset.kompas.com/crops/v1ox7Aw_U8psKKcopR-ZQ-EJ6wE=/3x0:754x501/1200x800/data/photo/2023/07/03/64a227dfb0dd3.png'); /* Replace 'your-image-path.jpg' with the path to your image */

            /* Set a specific height */
            min-height: 100vh; /* 100% of the viewport height */

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Add some padding to the content inside the parallax effect */
        .parallax-content {
            padding: 20px;
            text-align: center;
            color: white;
            position: relative; /* Relative positioning for child elements */
            z-index: 1; /* Ensure content is above background image */
        }

        /* Style for the button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #4CAF50; /* Green color, you can change this */
            color: white;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Additional content below the parallax effect */
        .more-content {
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Parallax container -->
    <div class="parallax">
        <!-- Content inside the parallax container -->
        <div class="parallax-content">
            <h1>Sapi Bro</h1>
            <p>test mini paralax</p>

            <!-- Button -->
            <a href="{{ url('/video') }}" class="btn">ini pindah ke test video</a>
        </div>
    </div>

    <!-- Additional content below the parallax effect -->
    <div class="more-content">
        <h2>ini test text untuk test gambar</h2>
        <p>gambarnya full view port.</p>
    </div>

</body>
</html>
