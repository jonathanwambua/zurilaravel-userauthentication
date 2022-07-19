<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        <h1 class="text-lg pt-2 pb-2">Add User </h1>
        <form method="POST" action="/add">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="title">Name: </label>
                <input name="name" required class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value=""> 
            </div>
            <div class="mb-4">
                <label for="content">Email: </label>
                <input name="email" required class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="">
            </div>
            <div class="mb-4">
                <label for="content">Phone: </label>
                <input name="phone" required class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="">
            </div>
            <div class="mb-4">
                <label for="content">Password: </label>
                <input name="password" required class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="">
            </div>

            <button class="bg-blue-500 tacking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded">
                Submit
            </button>
        </form>
    </div>
</body>
</html>