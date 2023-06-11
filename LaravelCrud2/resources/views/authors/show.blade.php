<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Author</title>
</head>
<body>
    <div class="h-screen bg-gray-200">
        <div class="max-w h-max mx-auto bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4 border-b-2 border-gray-200">{{ $author->name }}</h2>
            <p class="text-gray-600 mb-8">{{ $author->description }}</p>
          
            <h3 class="text-xl font-bold mb-4">Books by {{ $author->name }}</h3>
            <ul class="list-disc pl-6">
                @foreach ($author->books as $book)
                <li class="text-gray-700 py-2  border-b-2 border-gray-200">
                  <span class="block mb-2">{{ $book->title }}</span>
                  <div>
                    <a href="{{ route('books.show', $book->id) }}" class="inline-block px-3 py-1 text-sm font-semibold bg-blue-500 text-white rounded hover:bg-blue-600">View</a>
                    <a href="{{ route('books.show', $book->id) }}" class="inline-block px-3 py-1 text-sm font-semibold bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                    <a href="{{ route('books.show', $book->id) }}" class="inline-block px-3 py-1 text-sm font-semibold bg-red-500 text-white rounded hover:bg-red-600">Delete</a>
                  </div>
                </li>
              @endforeach
          
            </ul>
          </div>    
    </div>

</body>
</html>
</x-app-layout>
