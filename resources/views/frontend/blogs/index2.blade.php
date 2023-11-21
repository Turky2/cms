@extends('frontend.layouts.app2')

@section('content')
<div id="space" class="space route bg-image" style="background-image: url(/assets/cms/imgs/home.png)">
    <div class="overlay-itro"></div>
    <div class="space-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="space-title mb-4">{{ trans('Home.title') }}</h1>
                <p class="space-subtitle"><span class="typed" data-typed-items="{{ trans('Home.Job_Data') }}"></span></p>
            </div>
        </div>
    </div>
</div><!-- End space Section -->

<div class="article-block space-between-blocks">
    <div class="container col-xxl-10 px-xxl-0">
        <div class="article col-xl-10 mx-auto">
            <div class="px-4 mb-4 text-center">
                <h1 class="article-block__title">
                    Latest Blogs
                </h1>
            </div>
        </div>
        <div class="row row-cols-6 row-cols-sm-2 row-cols-md-3 g-3">
            @forelse([1,1,1,1,1,1] as $key => $blog)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{$blog->feature_image_url ?? asset('modules/cms/img/default.png')}}"
                            class="blog-img" 
                            loading="lazy">
                        <div class="card-body">
                            <a href="{{action([\App\Http\Controllers\CmsController::class, 'viewBlog'], ['id' => 1, 'slug' => 'name'])}}" class="text-decoration-none text-dark">
                                <h4>
                                    kjhkjhkjhkhj
                                </h4>
                            </a>
                            <!-- @if(!empty($blog->meta_description)) -->
                                <p class="card-text"
                                    title="jsjs">
                                                    lsjk smnnnnn s,mmmmmmmmmmmmm skkkkkkkk kssssssssssssssssssssss.
                                </p>
                            <!-- @endif -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" class="hero__btn btn btn-secondary mb-2 mb-lg-0 mx-1 mx-lg-2"
                                        href="{{action([\App\Http\Controllers\CmsController::class, 'viewBlog'], ['id' =>1, 'slug' => 'name'])}}">
                                        Read more
                                    </a>
                                </div>
                                <small class="text-muted" title="last updated">
                                    12 /4/ 20232
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">
                    <h1>
                        No blogs written!
                    </h1>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection