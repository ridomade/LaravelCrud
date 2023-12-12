<!-- resources/views/fullscreen-local.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Screen Local Video</title>

    <!-- Include styles for full-screen video -->
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Hide overflow to prevent scroll bars */
        }

        video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <!-- Full-screen local video -->
    <video controls autoplay loop muted>
        <!-- Replace 'your-video-url' with the actual path of your local video -->
        <source src="{{ asset('Settings 2022-06-20 20-47-14.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</body>
</html>
