{{-- resources/views/dons/create.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h1>Créer un Nouveau Don</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dons.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
            </div>

            <div class="mb-3">
                <label for="association_id" class="form-label">Association</label>
                <select name="association_id" id="association_id" class="form-control" >
                    <option value="">-- Sélectionner une association --</option>
                    @foreach($associations as $association)
                        <option value="{{ $association->id }}" {{ old('association_id') == $association->id ? 'selected' : '' }}>
                            {{ $association->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="restaurant_id" class="form-label">Restaurant</label>
                <select name="restaurant_id" id="restaurant_id" class="form-control" >
                    <option value="">-- Sélectionner un restaurant --</option>
                    @foreach($restaurants as $restaurant)
                        <option value="{{ $restaurant->id }}" {{ old('restaurant_id') == $restaurant->id ? 'selected' : '' }}>
                            {{ $restaurant->Restorant }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
            <a href="{{ route('dons.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
