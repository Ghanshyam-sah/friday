<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold mb-4">Add New Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" class="w-full px-3 py-2 border rounded" id="title" name="title">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content:</label>
                <textarea class="w-full px-3 py-2 border rounded" id="content" name="content"></textarea>
            </div>
            <div class="mb-4">
                <label for="summary" class="block text-gray-700">Summary:</label>
                <textarea class="w-full px-3 py-2 border rounded" id="summary" name="summary"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</body>
</html>