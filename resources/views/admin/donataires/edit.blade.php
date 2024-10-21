@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h1>Modifier le Donataire</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('donataires.update', $donataire->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Champ Nom --}}
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $donataire->name) }}" required>
            </div>

            {{-- Champ Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $donataire->email) }}" required>
            </div>

            {{-- Champ Téléphone --}}
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $donataire->phone) }}" required>
            </div>

            {{-- Champ Adresse --}}
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <textarea name="adresse" id="adresse" class="form-control" rows="3" required>{{ old('adresse', $donataire->adresse) }}</textarea>
            </div>

            {{-- Sélection Don (Foreign Key) --}}
            <div class="mb-3">
                <label for="don_id" class="form-label">Don</label>
                <select name="don_id" id="don_id" class="form-control">
                    <option value="">-- Sélectionner un don --</option>
                    @foreach($dons as $don)
                        <option value="{{ $don->id }}" {{ $donataire->don_id == $don->id ? 'selected' : '' }}>
                            {{ $don->description }} - {{ $don->date }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('donataires.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
