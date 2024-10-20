{{-- resources/views/donataires/create.blade.php --}}
@extends('admin.adminDashboard')

@section('content')
    <div class="container">
        <h1>Créer un Nouveau Donataire</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('donataires.store') }}" method="POST">
            @csrf

            {{-- Champ Nom --}}
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('nom')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Champ Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Champ Téléphone --}}
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                @error('telephone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Champ Adresse --}}
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <textarea name="adresse" id="adresse" class="form-control" rows="3" required>{{ old('adresse') }}</textarea>
                @error('adresse')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Champ Dons --}}
            <div class="mb-3">
                <label for="don_id" class="form-label">Dons Associés</label>
                <select name="don_id" id="don_id" class="form-control" required>
                    <option value="">-- Sélectionner un don --</option>
                    @foreach($dons as $don)
                        <option value="{{ $don->id }}" {{ old('don_id') == $don->id ? 'selected' : '' }}>
                            {{ $don->description }} - {{ $don->date }}
                        </option>
                    @endforeach
                </select>
                @error('don_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Créer</button>
            <a href="{{ route('donataires.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
