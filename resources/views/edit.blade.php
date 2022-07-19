<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="width: 900px" class="container max-w-full mx-auto pt-4">
        <h1 class="text-lg pt-2 pb-2">Edit User ( {{ $user->name }} ) </h1>
        <form method="POST" action="/user/{{ $user->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label for="title">Name: </label>
                <input name="name" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="{{ $user->name }}"> 
            </div>
            <div class="mb-4">
                <label for="content">Email: </label>
                <input name="email" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="{{ $user->email }}">
            </div>
            <div class="mb-4">
                <label for="content">Phone: </label>
                <input name="phone" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="{{ $user->phone }}">
            </div>
            <div class="mb-4">
                <label for="content">Password: </label>
                <input name="password" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none"
                value="{{ $user->password }}">
            </div>

            <button class="bg-blue-500 tacking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded">
                Update
            </button>
        </form>
    </div>
</body>
</html>