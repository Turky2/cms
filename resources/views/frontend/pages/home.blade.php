@extends('frontend.layouts.app')
@section('title', 'Home')

@includeIf('frontend.layouts.home_header')
@section('meta')
    <meta name="description" content="{{$page->meta_description}}">
@endsection
@section('content')
@php
    $page_meta = $page->pageMeta->keyBy('meta_key');
@endphp
<!------------------------------>
<!--Features---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.features', ['page_meta' => $page_meta])

<!------------------------------>
<!--Industries---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.industries', ['page_meta' => $page_meta])

<!------------------------------>
<!--Stats---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.statistics', ['statistics' => $statistics ?? []])

<!------------------------------>
<!--Testimonial---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.testimonial', ['testimonials' => $testimonials ?? []])

<!------------------------------>
<!--CTA---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.cta')

<!------------------------------>
<!--FAQ---------------->
<!------------------------------>
@includeIf('frontend.pages.partials.faq', ['faqs' => $faqs ?? []])
@endsection
@section('javascript')
<script type="text/javascript">
    new Sticky("[sticky]");
</script>
@endsection