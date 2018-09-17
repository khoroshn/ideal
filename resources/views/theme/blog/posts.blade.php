@foreach ($posts as $post)


    <div class="media hover-style media-list">
        <a href="blog-detail.html">
            <div data-cover="img/blog/blog1.jpg" data-xs-height="250px" data-sm-height="200px" data-md-height="200px" data-lg-height="200px" data-xl-height="200px">
            </div>
        </a>
        <div class="media-body">
            <ul class="list-inline mb-1">
                <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">access_time</i> Jan 01, 18</small></li>
                <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">person_outline</i> <a href="" class="text-muted">Admin</a></small></li>
                <li class="list-inline-item"><small><i class="material-icons md-1 align-text-bottom">flag</i> <a href="" class="text-muted">Tags</a></small></li>
            </ul>
            <a href="blog-detail.html" class="h4">{{ $post->title }}</a>
            <p class="card-text">{{ $post->desc }}</p>
            <a class="btn btn-sm btn-theme" href="blog-detail.html" role="button">Read More</a>
        </div>
    </div>


@endforeach

{{ $posts->links() }}