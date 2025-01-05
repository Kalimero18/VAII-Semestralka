@extends('layouts.app')

@section('title', 'Návrhy - Futbal v Londýne')

@section('kontent')
    <div class="container mt-5">
        <h1 class="text-center">Navrhnite nový klub</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('navrhy.store') }}" method="POST" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="nazov_klubu" class="form-label">Názov klubu</label>
                <input type="text" class="form-control" id="nazov_klubu" name="nazov_klubu" required>
            </div>
            <div class="mb-3">
                <label for="popis" class="form-label">Popis</label>
                <textarea class="form-control" id="popis" name="popis" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Odoslať návrh</button>
        </form>

        <h2 class="text-center">Vaše návrhy</h2>
        <div class="list-group">
            @forelse ($navrhy as $navrh)
                <div class="list-group-item">
                    <h5>{{ $navrh->nazov_klubu }} <small class="text-muted">od {{ $navrh->user->name }}</small></h5>
                    <p>{{ $navrh->popis }}</p>
                </div>
            @empty
                <p class="text-center">Žiadne návrhy zatiaľ nie sú k dispozícii.</p>
            @endforelse
        </div>
    </div>
@endsection
