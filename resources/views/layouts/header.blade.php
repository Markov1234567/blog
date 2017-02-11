<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">Blog</h1>
    <p class="lead blog-description">portfolio</p>

    @if(auth()->check() and (request()->url() != "http://127.0.0.1:8000/posts/create"))
    <h3><a href="/posts/create">

            Make a new post:
            </a>
    </h3>
    @endif
  </div>
</div>
