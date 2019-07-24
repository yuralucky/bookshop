@extends('admin.layouts.layouts')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('books.create')}}" class="btn btn-block btn-dark">Add new book</a>
            <table class="table  table-bordered table-hover">
                <tr>
                    <th>title</th>
                    <th>author</th>
                    <th>ISBN</th>
                    <th>category</th>
                    <th>Pages</th>
                    <th>Image</th>
                    <th>Year</th>
                    <th>Language</th>
                    {{--<th>Description</th>--}}
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td>{{$book->category}}</td>
                        <td>{{$book->pages}}</td>
                        <td>{{$book->image}}</td>
                        <td>{{$book->year}}</td>
                        <td>{{$book->language}}</td>
                        {{--<td>{{$book->description}}</td>--}}
                        <td>{{$book->price}}</td>
                        <td>
                            <form action="{{route('books.destroy',$book->id)}}" method="post">
                                <a href="{{route('books.show',$book->id)}}" class="btn btn-info">Show</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" value="">X</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
            {{$books->links()}}
        </div>
    </div>
@endsection