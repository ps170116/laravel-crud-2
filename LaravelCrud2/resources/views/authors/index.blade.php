@foreach ($authors as $author)
    <div>
        {{$author->name}}
        @foreach ($author->books as $book)
    <div>
        {{$book->title}}
    </div>

        @endforeach
    </div>
@endforeach