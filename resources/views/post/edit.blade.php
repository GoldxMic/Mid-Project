@extends('layout.app')

@section('title', 'Show')

@section('content')
<form action="{{ route('post.update', $post) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" id="exampleFormControlInput1" required minlength="5" maxlength="20" placeholder="Judul Buku">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Penulis Buku</label>
            <input type="text" name="author" value="{{ $post->author }}" class="form-control" id="exampleFormControlInput2" required minlength="5" maxlength="20"placeholder="Penulis Buku">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Jumlah Halaman</label>
            <input type="text" name="pages" value="{{ $post->pages }}" class="form-control" id="exampleFormControlInput2" required placeholder="Jumlah Halaman">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Tahun Terbit</label>
            <select class="form-select" name="date" aria-label="Default select example">
                @php
                    for($date = 2000; $date <= 2021; $date++){
                @endphp
                <option value="@php echo $date @endphp">@php echo $date @endphp</option>
                @php
                    }
                @endphp
                <option selected>{{ $post->date }}</option>
              </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
