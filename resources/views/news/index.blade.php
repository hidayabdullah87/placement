
@extends('layouts.master')
@section('content')

    <br><h2><font color="black">Update News </font><font style ="color:#0099CC"> University of Sheffield</font></h2>
    <a href="{{url('/news/create')}}" class="btn btn-success">Create News</a><p></p>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Thumbs</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($news as $new)
            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->name }}</td>
                <td>{{ $new->desc }}</td>
                <td align="center"><img src="{{asset('images/'.$new->image.'.png')}}" height="35" width="30"></td>

                <td align="center"><a href="{{url('news',$new->id)}}" class="btn btn-primary">Read</a></td>
                <td align="center"><a href="{{route('news.edit',$new->id)}}" class="btn btn-warning">Update</a></td>
                <td align="center">
                    {!! Form::open(['method' => 'DELETE', 'route'=>['news.destroy', $new->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection