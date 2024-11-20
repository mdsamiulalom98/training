@extends('backEnd.layouts.master')
@section('title', 'Course Create')
@section('css')
    <link href="{{ asset('public/backEnd') }}/assets/libs/summernote/summernote-lite.min.css" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <a href="{{ route('courses.index') }}" class="btn btn-primary rounded-pill">Manage</a>
                    </div>
                    <h4 class="page-title">Course Create</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('courses.update') }}" method="POST" class="row" data-parsley-validate=""
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $edit_data->id }}">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title *</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ $edit_data->title }}" id="title" required>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="slug" class="form-label">Slug *</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                        name="slug" value="{{ $edit_data->slug }}" id="slug" required>
                                    @error('slug')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="subtitle" class="form-label">Subtitle *</label>
                                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                        name="subtitle" value="{{ $edit_data->subtitle }}" id="subtitle" required>
                                    @error('subtitle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="duration" class="form-label">Duration *</label>
                                    <input type="text" class="form-control @error('duration') is-invalid @enderror"
                                        name="duration" value="{{ $edit_data->duration }}" id="duration" required>
                                    @error('duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="lecture" class="form-label">Lecture *</label>
                                    <input type="text" class="form-control @error('lecture') is-invalid @enderror"
                                        name="lecture" value="{{ $edit_data->lecture }}" id="lecture" required>
                                    @error('lecture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="schedule" class="form-label">Schedule *</label>
                                    <input type="text" class="form-control @error('schedule') is-invalid @enderror"
                                        name="schedule" value="{{ $edit_data->schedule }}" id="schedule" required>
                                    @error('schedule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="course_fee" class="form-label">Course Fee *</label>
                                    <input type="text" class="form-control @error('course_fee') is-invalid @enderror"
                                        name="course_fee" value="{{ $edit_data->course_fee }}" id="course_fee" required>
                                    @error('course_fee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image *</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" id="image">
                                    <img src="{{ asset($edit_data->image) }}"
                                        style="height: 60px;
                                    width: auto;" />
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description *</label>
                                    <textarea class="form-control summernote @error('description') is-invalid @enderror" name="description"
                                        id="description" required>{{ $edit_data->description }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="module" class="form-label">Module *</label>
                                    <textarea class="form-control @error('module') is-invalid @enderror" name="module" id="module" required>{{ $edit_data->module }}</textarea>
                                    @error('module')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="meta_title" class="form-label">Meta Title *</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                        name="meta_title" value="{{ $edit_data->meta_title }}" id="meta_title" required>
                                    @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="meta_keyword" class="form-label">Meta Keyword *</label>
                                    <input type="text"
                                        class="form-control @error('meta_keyword') is-invalid @enderror"
                                        name="meta_keyword" value="{{ $edit_data->meta_keyword }}" id="meta_keyword"
                                        required>
                                    @error('meta_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description *</label>
                                    <textarea class="form-control summernote @error('meta_description') is-invalid @enderror" name="meta_description"
                                        id="meta_description" required>{{ $edit_data->meta_description }}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            @foreach ($course_features as $price)
                                <input type="hidden" name="up_id[]" value="{{ $price->id }}">
                                <div class="edit_price">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label for="up_feature_name" class="form-label">Feature Title *</label>
                                                <input type="text"
                                                    class="form-control @error('up_feature_name') is-invalid @enderror"
                                                    name="up_feature_name[]" value="{{ $price->name }}" id="price_name"
                                                    required>
                                                @error('up_feature_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- col-end -->
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label for="up_feature" class="form-label">Feature Image *</label>
                                                <input type="file" name="up_feature[]"
                                                    class="form-control @error('image') is-invalid @enderror"
                                                    name="up_feature[]" id="up_feature">
                                                @error('up_feature')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- col-end -->
                                        <div class="col">
                                            <img src="{{ asset($price->image) }}" class="edit-image border"
                                                alt="">
                                        </div>

                                        <!-- col-end -->
                                        <div class="col input-group-btn">
                                            <a class="btn btn-warning btn-xs text-white"
                                                href="{{ route('courses.feature.destroy', ['id' => $price->id]) }}"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>


                                    </div>
                                </div>
                            @endforeach

                            <div class="increment_price">
                                <div class="row align-items-center">

                                    <div class="col-sm-5">
                                        <div class="form-group mb-3">
                                            <label for="feature_name[]" class="form-label">Feature Title *</label>
                                            <input type="text"
                                                class="form-control @error('feature_name[]') is-invalid @enderror"
                                                name="feature_name[]" value="" id="feature_name[]">
                                            @error('feature_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <div class="col-sm-5">
                                        <div class="form-group mb-3">
                                            <label for="feature[]" class="form-label">Feature Image *</label>
                                            <input type="file" name="feature[]"
                                                class="form-control @error('image') is-invalid @enderror" />
                                            @error('feature[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <!-- col-end -->
                                    <div class="col input-group-btn">
                                        <button class="btn btn-success increment_btn  btn-xs text-white" type="button"><i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--increment_price end-->
                            <div class="clone_price" style="display:none">
                                <div class="row align-items-center increment_control">
                                    <div class="col-sm-5">
                                        <div class="form-group mb-3">
                                            <label for="feature_name[]" class="form-label">Feature Title *</label>
                                            <input type="text"
                                                class="form-control @error('feature_name[]') is-invalid @enderror"
                                                name="feature_name[]" value="" id="feature_name[]">
                                            @error('feature_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <div class="col-sm-5">
                                        <div class="form-group mb-3">
                                            <label for="feature[]" class="form-label">Feature Image *</label>
                                            <input type="file" name="feature[]"
                                                class="form-control @error('image') is-invalid @enderror" />
                                            @error('feature[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- col-end -->

                                    <!-- col-end -->
                                    <div class="col input-group-btn">
                                        <button class="btn btn-danger remove_btn  btn-xs text-white" type="button"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--clone_price end-->

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label for="status" class="d-block">Status *</label>
                                    <label class="switch">
                                        <input type="checkbox" value="1" name="status" checked>
                                        <span class="slider round"></span>
                                    </label>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- col end -->
                            <div>
                                <input type="submit" class="btn btn-success" value="Submit">
                            </div>

                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('public/backEnd/') }}/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/pages/form-validation.init.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/pages/form-advanced.init.js"></script>
    <script src="{{ asset('public/backEnd/') }}/assets/js/switchery.min.js"></script>
    <!-- Plugins js -->
    <script src="{{ asset('public/backEnd/') }}/assets/libs//summernote/summernote-lite.min.js"></script>
    <script>
        $(".summernote").summernote({
            placeholder: "Enter Your Text Here",
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".increment_btn").click(function() {
                var html = $(".clone_price").html();
                $(".increment_price").after(html);
            });
            $("body").on("click", ".remove_btn", function() {
                $(this).parents(".increment_control").remove();
            });
        });
    </script>
    <script>
        $("#title").on("input", function() {
            // e.preventDefault();
            var title = $(this).val();
            if (title.trim() !== "") {
                $.ajax({
                    cache: false,
                    type: "GET",
                    data: {
                        title: title,
                    },
                    url: "{{ route('courses.slug_generate') }}",
                    dataType: "json",
                    success: function(response) {
                        if (response.slug) {
                            $('#slug').val(response.slug); // Update the slug in the target element
                        } else {
                            $('#slug').val("Slug generation failed.");
                        }
                    },
                    error: function() {
                        $('#slug').val("Error generating slug."); // Handle AJAX error
                    },
                });
            } else {
                $('#slug').val(""); // Clear the slug if the title is empty
            }
        });
    </script>
@endsection
