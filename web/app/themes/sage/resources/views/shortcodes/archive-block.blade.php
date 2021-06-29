@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
@endif

@while (have_posts()) @php the_post() @endphp
  @php $post = get_post() @endphp
  @php $category = get_post_meta($post->ID, 'category') @endphp
  <div class="my-3">
    @include('partials.content-'.get_post_type())
  </div>
@endwhile
