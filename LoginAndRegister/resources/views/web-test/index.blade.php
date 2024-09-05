<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl font-bold">Welcome to My Simple Webpage</h1>
    </header>
    <main class="p-4">
        <h2 class="text-lg mb-4">Hello, Traveler!</h2>
        <p class="mb-4">This is a simple webpage created as a demonstration.</p>
        <button id="welcomeButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Click Me
        </button>
    </main>
    <footer class="bg-gray-200 text-center p-4 mt-4">
        <p>&copy; 2024 Simple Webpage. All rights reserved.</p>
    </footer>
    <script>
        document.getElementById('welcomeButton').addEventListener('click', function() {
            alert('Welcome to my simple webpage!');
        });
    </script>
</body>
</html>
