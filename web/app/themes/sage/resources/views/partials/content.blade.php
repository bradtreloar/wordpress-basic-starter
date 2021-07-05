<article @php post_class() @endphp>
  <div class="container">
    <div class="card border-0 p-2 p-md-3">
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3 mb-md-0">
            <a class="d-block text-decoration-none" href="{{ get_permalink() }}">
              {{ the_post_thumbnail('medium', ['class' => 'w-100 h-auto']) }}
            </a>
          </div>
        </div>
        <div class="col-md-8">
          <div>
            <h2>
              {!! get_the_title() !!}
            </h2>
          </div>
          <div class="entry-summary my-2">
            @php the_field("summary") @endphp
          </div>
          <div>
            <a href="{{ get_permalink() }}">
              <small>Read more</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
