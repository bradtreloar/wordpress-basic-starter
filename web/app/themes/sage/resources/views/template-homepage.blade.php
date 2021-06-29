{{--
  Template Name: Homepage
--}}
@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="my-5">
      @include('partials.content-page')
    <div>
  @endwhile
@endsection
