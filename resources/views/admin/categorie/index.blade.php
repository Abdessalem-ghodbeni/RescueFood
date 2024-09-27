{{-- resources/views/categorie/index.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h3>Categories List</h3>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('categorie.create' ) }}">Create</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Category Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->type_categorie }}</td>
                    <td>
                        <a href="{{ route('categorie.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categorie.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
