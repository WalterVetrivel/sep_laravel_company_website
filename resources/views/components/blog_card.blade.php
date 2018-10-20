<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card blog-card mb-3">
        <img class="card-img-top" src="{{ $post_image }}" alt="Post image">
        <div class="card-body">
            <h3 class="card-title">{{ $post_title }}</h3>
            <p class="card-text">{{ $post_excerpt }}</p>
            <a href="{{ route('post', $post_id) }}" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>
