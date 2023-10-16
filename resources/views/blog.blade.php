<x-layouts.main>
    <x-slot:title>
        Blog
    </x-slot:title>
    <x-page-header>
        blog
    </x-page-header>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Oxirgi Postlar</h1>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="mb-2 text-sm-center">
                            <h6 class="text-danger text-uppercase font-weight-medium ">
                                {{$post->category->name}}
                            </h6>
                        </div>
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100 h-50" src="/storage/{{$post->photo}}" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-dark text-uppercase font-weight-medium"
                               href="{{ route('post.edit', ['post'=>$post->id??' ']) }}">edit</a>

                            <span class="text-primary px-2">|</span>
                            <form action="{{ route('post.destroy', ['post'=>$post->id??' ']) }}" method="post"
                                  onsubmit='return confirm("Rostdan ham ochirilsinmi")'>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-danger text-uppercase font-weight-medium">delete
                                </button>
                                <span class="text-primary px-2">|</span>
                            </form>
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{$post->title}}</h5>
                        <p class="mb-4">{{$post->short_content}}</p>

                        <a class="btn btn-sm btn-primary py-2"
                           href="{{route('post.show',['post'=>$post->id])}}">O'qish</a>
                    </div>
                @endforeach


            </div>
            <div class="col-md-auto align-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
    <!-- Blog End -->


</x-layouts.main>
