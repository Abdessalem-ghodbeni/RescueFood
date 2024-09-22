{{-- resources/views/categorie/edit.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>Edit Category</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categorie.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type_categorie" class="form-label">Category Type</label>
                <input type="text" name="type_categorie" id="type_categorie" class="form-control" value="{{ old('type_categorie', $category->type_categorie) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
