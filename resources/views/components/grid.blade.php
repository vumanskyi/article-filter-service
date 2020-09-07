<div class="col-md-4">
    <div class="card mb-4 shadow-sm search-item">
        <img src="https://via.placeholder.com/348x255" alt="">
        <div class="card-body">
            <p class="card-text">{{ $data->name }}</p>
            <p class="card-text">@text_limit($data->description)</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
            </div>
        </div>
    </div>
</div>
