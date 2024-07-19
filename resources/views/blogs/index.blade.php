<!DOCTYPE html>
<html>
<head>
    <title>Blog CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Blogs</h2>
            <a class="bg-green-500 text-white px-4 py-2 rounded" href="{{route('blogs.create')}}">Add New Blog</a>
        </div>


        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @endif
    

        <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4">No</th>
                    <th class="py-2 px-4">Title</th>
                    <th class="py-2 px-4">Summary</th>
                    <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($blogs as $index => $blog)
                <tr>
                    <td class="border px-4 py-2">{{$index + 1}}</td>
                    <td class="border px-4 py-2">{{ $blog->title }}</td>
                    <td class="border px-4 py-2">{{ $blog->summary }}</td>
                    <td class="border px-4 py-2">
                        <div class="flex space-x-2">
                        <a class="bg-blue-500 text-white px-4 py-2 rounded" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>