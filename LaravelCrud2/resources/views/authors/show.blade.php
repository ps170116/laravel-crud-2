{{$author->name}}
@foreach ($author->books as $book)
    {{$book->title}}
@endforeach