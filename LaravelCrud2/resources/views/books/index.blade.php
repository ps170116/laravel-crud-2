<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <title>Authors</title>
    </head>
    
    <body class="bg-gray-200">
      <div class="p-5">
        <a href="{{ route('books.create') }}" class="rounded-md p-4 bg-blue-400 lg:text-4 text-sm  text-white">Add book</a>
      </div>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class=" w-full text-left text- text-gray-500 dark:text-gray-400">
        <thead class="shado bg-gray-200 text-xs uppercase text-gray-700 shadow-lg dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-4 py-3 sm:w-1/3 ">Title</th>
            <th scope="col" class="px-2 py-3 sm:w-1/3 md:w-1/4">Info</th>
            <th scope="col" class="px-6 py-3 :w-1/3 md:w-1/4">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
          <tr class="border-b bg-white px-6 dark:border-gray-700 dark:bg-gray-900">
            <td class="px-4 py-4 text-base">{{$book->title}}</td>
            <td>
              <a href="{{ route('books.show', $book->id) }}" class="rounded-md bg-blue-400 px-4 py-2 sm:py-4 text-white ">More Info</a>
            </td>
            <td>
                <div class="flex space-x-2">
                    <a href="{{ route('books.edit', $book->id) }}" class="rounded-md bg-blue-400 px-4 py-2 sm:py-3 text-white">Edit</a>
                    <form action="/books/{{$book->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-md bg-red-400 px-6 py-3 text-white">Delete</button>
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
</x-app-layout>
