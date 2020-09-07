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
                            @include('components.grid', ['data' => $art])
                        @endforeach
                        <div class="col-md-12">
                            {{ $collection->appends(request()->except(['page','_token']))->links() }}
                        </div>
                    </div>
                @endif
        </div>
    </main>

@endsection
