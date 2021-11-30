@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Data</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail as $post)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/detail/{{ $post->slug }}" class="badge bg-info text-decoration-none"><i class="bi bi-eye"></i> Read</a>
                    <a href="#" class="badge bg-success text-decoration-none"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="#" class="badge bg-danger text-decoration-none"><i class="bi bi-trash"></i> Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
@endsection