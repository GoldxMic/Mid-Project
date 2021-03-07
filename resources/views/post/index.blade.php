@extends('layout.app')

@section('title', 'Show')

@section('content')
<div class="container">
    <div class="row">
@foreach ($posts as $post)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h4 class="card-title">{{ $post->title }}</h4>
                      <h5 class="card-title">{{ $post->author}}</h5>
                      <h5 class="card-subtitle mb-2 text-muted">{{ $post->pages}} pages</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $post->date}}</h6>
                      <div>
                        <a href="{{ route('post.edit',$post) }}" class="btn btn-primary" role="button">Edit</a><br><br>
                        <form action="{{ route('post.delete', $post) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
@endforeach
<div>
    {{ $posts->links() }}
</div>
    </div>
</div>
@endsection
