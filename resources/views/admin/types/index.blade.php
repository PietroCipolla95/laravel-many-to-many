@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-2 text-dark my-4">
            Types
        </h2>

        @include('partials.message')


        <div class="table-responsive my-4">
            <table class="table border table-striped table-hover table-light text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($types as $type)
                        <tr>
                            <td>
                                {{ $type->name }}
                            </td>
                            <td>
                                <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-secondary">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>


                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $type->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $type->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitle-{{ $type->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attention! You cannot go back from this
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <!-- Delete form -->
                                                <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </td>
                        </tr>
                    @empty
                        <h3 class="py-3">
                            No types in the database
                        </h3>
                    @endforelse


                </tbody>
            </table>
        </div>

    </div>
@endsection
