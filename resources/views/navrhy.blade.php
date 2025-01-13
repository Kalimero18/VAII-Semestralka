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
                <div class="list-group-item" data-id="{{ $navrh->id }}">
                    <h5>
                        <span contenteditable="true" class="uprava" data-field="nazov_klubu">{{ $navrh->nazov_klubu }}</span>
                        <small class="text-muted">od {{ $navrh->user->name }}</small>
                    </h5>
                    <p>
                        <span contenteditable="true" class="uprava" data-field="popis">{{ $navrh->popis }}</span>
                    </p>
                </div>
            @empty
                <p class="text-center">Žiadne návrhy zatiaľ nie sú k dispozícii.</p>
            @endforelse
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.uprava').forEach(cell => {
                cell.addEventListener('blur', function () {
                    let id = this.closest('.list-group-item').getAttribute('data-id');
                    let field = this.getAttribute('data-field');
                    let value = this.textContent.trim();

                    if (!value) {
                        alert('Hodnota nemôže byť prázdna!');
                        return;
                    }

                    fetch(`/navrhy/${id}/update-inline`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({ field: field, value: value }),
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert(data.message);
                            } else {
                                alert('Chyba: ' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Chyba:', error);
                            alert('Došlo k chybe pri ukladaní údajov.');
                        });
                });
            });
        });
    </script>
@endsection

