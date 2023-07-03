<!-- about.php -->
<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <style>
        /* CSS for the animated text */
        .animated-text {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .animated-text span {
            position: relative;
            display: inline-block;
            transform: translateY(100%);
            animation: slide-up 2s infinite;
        }
        @keyframes slide-up {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(-100%);
            }
        }
    </style>
</head>
<body>
    <h1>About Us</h1>
    <div class="animated-text">
        <span>Welcome to our website!</span>
        <span>We are a team of developers dedicated to creating awesome PHP projects.</span>
        <!-- Add more text spans as needed -->
    </div>
</body>
</html>
