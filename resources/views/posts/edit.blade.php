<x-layouts.main>
    <x-slot:title>
        edit
    </x-slot:title>
    <x-page-header>
        Edit
    </x-page-header>

    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('post.update',['post'=>$post->id]) }}" method="post" , enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="title" placeholder="short content"
                           value="{{ $post->title }}"/>
                    @error('title')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-control mb-4 p-4">
                    <h5 class="text-danger text-uppercase font-weight-medium">
                        {{$post->category->name}}
                    </h5>
                </div>


                <div class="control-group mb-4">
                    <textarea class="form-control p-4 pt-1" rows="2" name="short_content" placeholder="short content"
                    >{{ $post->short_content }}</textarea
                    @error('short_content')
                    <p class="help-block text-danger">{{$message }}</p>
                    @enderror
                </div>

                <div class="control-group mb-4">
                    <input type="file" class="form-control p-2 mt-4" id="ts" name="photo"/>

                    @error('photo')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="6" name="contents"
                              placeholder="content">{{ $post->contents }}</textarea>
                    @error('content')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                            id="sendMessageButton">O'zgartirish
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layouts.main>
