@extends('association.associationDashboard')

@section('content')
    <div class="container">
        <h3>Edit Association</h3>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Association Form -->
        <form action="{{ route('association.update', $association->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $association->name) }}" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $association->email) }}" required>
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="numero_telphone" class="form-label">Phone</label>
                <input type="text" name="numero_telphone" id="numero_telphone" class="form-control" value="{{ old('numero_telphone', $association->numero_telphone) }}" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="adresse" class="form-label">Address</label>
                <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse', $association->adresse) }}" required>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label for="categorie_id" class="form-label">Category</label>
                <select name="categorie_id" id="categorie_id" class="form-control">
                    <option value="">--Select a Category--</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $association->categorie_id == $category->id ? 'selected' : '' }}>
                            {{ $category->type_categorie }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
