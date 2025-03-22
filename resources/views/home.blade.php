@extends('layouts.master')

@section('content')

    <h1>{{$data}}</h1>
    <div class="card col-md-6 mx-auto">
        <form @if(isset($note)) action="{{route('update', ['id'=>$note->id])}}" @else action="/store" @endif method="post">
            @csrf
            @if(isset($note))
                @method("PUT")
            @endif
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group p-3">
                        <label for="note">Note</label>
                        <input type="text" @if(isset($note)) value="{{$note->note}}" @endif name="note" class="form-control mt-2" placeholder="Enter your note">
                        @error('note')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success mt-5">Save</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card col-md-6 mx-auto mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notes as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->note}}</td>
                        <td><a href="{{route('edit', ['id' => $item->id])}}"><i class="fas fa-edit"></i></a> | <a href="{{route('delete', ['id'=>$item->id])}}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection