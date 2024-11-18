@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crea un Nuovo Progetto</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="url" class="form-control" id="link" name="link" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di Avvio</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data di Fine</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
            </div>
            <button type="submit" class="btn btn-primary">Salva Progetto</button>
        </form>
    </div>
@endsection
