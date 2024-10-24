{{-- resources/views/categorie/create.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>Create a New Category</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorie.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="type_categorie" class="form-label">Category Type</label>
                <input type="text" name="type_categorie" id="type_categorie" class="form-control" value="{{ old('type_categorie') }}" >
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
