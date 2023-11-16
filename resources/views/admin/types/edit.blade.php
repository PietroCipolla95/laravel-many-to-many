@extends('layouts.admin')

@section('content')

    <div class="container">
        <h2 class="fs-2 text-dark my-4">
            Edit <strong class="text-dark">{{ $type->name }}</strong> type
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.types.update', $type) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('put')

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">name</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name', $type->name) }}">
                <small>Type name</small>
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">
                Edit
            </button>


        </form>


    </div>

@endsection
