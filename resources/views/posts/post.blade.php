<<<<<<< HEAD
<!-- TODO: print blog title, desc, and body -->
=======
<div class="blog-post">
<h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>
{{ $post->body }}
</div>
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
