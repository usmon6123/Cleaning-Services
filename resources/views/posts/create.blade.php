<x-layouts.main>
    <x-slot:title>
        post qo'shish
    </x-slot:title>
    <x-page-header>
        Post qo'shish
    </x-page-header>

    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('post.store') }}" method="post" , enctype="multipart/form-data">
                @csrf

                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="title" placeholder="title"
                           value="{{ old('title') }}"/>
                    @error('title')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="control-group mb-4">
                    <label for="r">Kategoria</label><br>
                    <select name="category_id" id="r" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="control-group mb-4 justify-content-center align-items-center">
                    <label for="tags"> tags</label>
                    <select class="js-select2" id="tags" name="tags" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="2" name="short_content" placeholder="short content"
                    >{{ old('short_content') }}</textarea>
                    @error('short_content')
                    <p class="help-block text-danger">{{$message }}</p>
                    @enderror
                </div>

                <div class="control-group mb-4">
                    <input type="file" class="form-control p-4" id="ts" name="photo"/>

                    @error('photo')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="6" name="contents"
                              placeholder="content">{{ old('contents') }}</textarea>
                    @error('content')
                    <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                            id="sendMessageButton">Saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-layouts.main>
