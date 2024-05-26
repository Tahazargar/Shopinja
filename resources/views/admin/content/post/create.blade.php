@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پست</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.css') }}">
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">پست</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد پست</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد پست
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('post.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" id="form">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="title" class="mt-2 mb-1">عنوان پست</label>
                                    <input name="title" id="title" type="text" class="form-control form-control-sm" value="{{ old('title') }}">
                                </div>
                                @error('title')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="category" class="mt-2 mb-1">انتخاب دسته</label>
                                    <select name="category_id" id="category" class="form-control form-control-sm">
                                        @foreach($postCategories as $postCategory)
                                            <option value="{{ $postCategory->id }}" @if(old('category') === $postCategory->id) selected @endif>{{ $postCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="image" class="mt-2 mb-1">تصویر </label>
                                    <input type="file" name="image" id="image" class="form-control form-control-sm">
                                </div>
                                @error('image')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="status" class="mt-2 mb-1">وضعیت</label>
                                    <select name="status" id="status" class="form-control form-control-sm">
                                        <option value="0" @if (old('status') == 0) selected @endif>غیر فعال</option>
                                        <option value="1" @if (old('status') == 1) selected @endif>فعال</option>
                                    </select>
                                </div>
                                @error('status')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="commentable" class="mt-2 mb-1">امکان درج کامنت</label>
                                    <select name="commentable" id="commentable" class="form-control form-control-sm">
                                        <option value="0" @if (old('commentable') == 0) selected @endif>غیر فعال</option>
                                        <option value="1" @if (old('commentable') == 1) selected @endif>فعال</option>
                                    </select>
                                </div>
                                @error('commentable')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="published_at_view" class="mt-2 mb-1">تاریخ انتشار</label>
                                    <input type="text" id="published_at" name="published_at" class="form-control form-control-sm d-none">
                                    <input type="text" id="published_at_view" class="form-control form-control-sm">
                                </div>
                            </section>

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="tags" class="mt-2 mb-1">تگ ها</label>
                                    <input type="hidden" class="form-control form-control-sm" name="tags" id="tags" value="{{ old('tags') }}">
                                    <select id="select_tags" class="select2 form-control form-control-sm" multiple>

                                    </select>
                                </div>
                                @error('tags')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="summary" class="mt-2 mb-1">خلاصه پست</label>
                                    <textarea name="summary" id="summary"  class="form-control form-control-sm" rows="6">{{ old('summary') }}</textarea>
                                </div>
                                @error('summary')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="body" class="mt-2 mb-1">متن پست</label>
                                    <textarea name="body" id="body"  class="form-control form-control-sm" rows="6">{{ old('body') }}</textarea>
                                </div>
                                @error('body')
                                <span class="alert_required text-danger" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </section>
                        </section>

                        <section class="col-12 mt-2">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection

@section('scripts')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin-assets/jalalidatepicker/persian-date.min.js') }}"></script>
    <script src="{{ asset('admin-assets/jalalidatepicker/persian-datepicker.min.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
        CKEDITOR.replace('summary');
    </script>

    <script>
        $(document).ready(function (){
            let tags_input = $('#tags');
            let select_tags = $('#select_tags');
            let default_tags = tags_input.val();
            let default_data = null;

            if(tags_input.val() !== null && tags_input.val().length > 0)
            {
                default_data = default_tags.split(',');
            }

            select_tags.select2({
                placeholder: 'لطفا تگ های خود را وارد نمایید',
                tags: true,
                data: default_data
            })
            select_tags.children('option').attr('selected', true).trigger('change');

            $('#form').submit(function (event){
                if(select_tags.val() !== null && select_tags.length > 0)
                {
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource);
                }
            })
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#published_at_view").persianDatepicker({
                altField: '#published_at',
                format: 'YYYY/MM/DD',
            });
        });
    </script>

@endsection
