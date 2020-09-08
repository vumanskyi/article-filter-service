<section class="search-sec">
    <div class="container">
        <h1 class="mt-5 text-center">{{ __('Search form') }}</h1>
        <form action="{{ route('app.search') }}" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" name="article" value="{{ $article ?? '' }}" class="form-control search-slt" placeholder="Enter article name">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            @includeIf(
                                'components.dropbox',
                                [
                                    'name' => 'categories',
                                    'data' => $categories,
                                    'placeholder' => 'Select Categories',
                                    'class' => 'categories-picker'
                                ]
                            )

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            @includeIf(
                                'components.dropbox',
                                [
                                    'name' => 'tags',
                                    'data' => $tags,
                                    'placeholder' => 'Select Tags',
                                    'class' => 'tags-picker'
                                ]
                            )
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
