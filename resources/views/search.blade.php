@extends('layouts.app')

@section('content')
    @include('components.search-form', [
        'categories' => $categories,
        'tags' => $tags,
        'article' => $article
    ])
    <main>
        <div class="container">
                @if($collection->isEmpty())
                    <div class="row">
                        <h3 class="text-center mt-5">{{ __('No results') }}</h3>
                    </div>
                @else

                    <h3 class="text-center mt-5">{{ __('Result') . ' - ' . $collection->count() }}</h3>

                    <div class="row">
                        @foreach($collection as $art)
                            <div class="col-md-4">
                                <div class="card mb-4 shadow-sm">
                                    <img src="https://via.placeholder.com/348x255" alt="">
                                    <div class="card-body">
                                        <p class="card-text">{{ $art->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
        </div>
    </main>

@endsection
