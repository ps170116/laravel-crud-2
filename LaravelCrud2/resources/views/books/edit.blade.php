<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Edit Book</title>
</head>
<body>
    <x-app-layout>
        <div class=" pt-3 max-w-sm mx-auto px-4 sm:px-4 lg:px-8 ">
            <div class="bg-white overflow-hidden sm:rounded-lg  shadow-lg">

                <div class="px-2 py-5 sm:px-2 item">
                    <form method="POST" action="{{route('books.update', $book->id)}}">
                        @csrf <!-- Include CSRF token for Laravel form protection -->
                    @method('PUT')

                    <div class="mb-3">
                    <label for="title" class="mb-2 block">Title</label>
                    <input type="text" class="bg-gray-100 border border-gray-300 rounded-md pl-2 w-full" id="title" name="title" value="{{$book->title}}" required>
                    </div>
                    <div class="mb-3">
                    <label class="mb-2  block" for="description">Description</label>
                    <input type="text" class="bg-gray-100 border border-gray-300 rounded-md pl-2  w-full" id="description"  name="description"  value="{{$book->description}}" required>
                    </div> 
                    <div>
                        <label class="mb-2 block" for="author">Author</label>
                      <div class=" w-1/4 mb-4 ">
                      <select name="author_id" id="author_id" required>
                        @foreach($authors as $author)
                        <option value="{{ $author->id }}" @if($author->id === $book->author)   selected @endif>{{ $author->name}}</option>
                        @endforeach 
                      </select>
                    </div>
                    </div>
                    <div>
                        <label class="mb-2 block" for="release_date">Date Published</label>
                        <input type="date" class="bg-gray-100 border border-gray-300 rounded-md pl-2 w-full mb-4" id="release_date" name="release_date"  value="{{$book->release_date}}" required>
                    </div>
                    <div>
                        <button class="bg-green-400 rounded-lg hover:bg-green-500 p-2 mb-2" type="submit">Confirm</button>
                        <button class="bg-red-400 rounded-lg hover:bg-red-500 p-2 mb-2">Cancel</button>    
                    </div>      
                    </form>

            </div>
        </div>
        </x-app-layout>
        
</body>
</html>