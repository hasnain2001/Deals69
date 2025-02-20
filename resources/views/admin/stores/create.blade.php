@extends('admin.master')
@section('title')
    Create
@endsection
@section('main-content')
<style>
.select-bold,select option{font-weight:700}

</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Store</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>{{ session('success') }}</b>
                </div>
            @endif
            @if ($errors->any())
            <div  class="alert alert-danger" >
                <strong>Validation error(s):</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form name="CreateStore" id="CreateStore" method="POST" enctype="multipart/form-data" action="{{ route('admin.store.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Store Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Url/Slug <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="define your url" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" cols="30" rows="12" style="resize: none;" required></textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="url">URL <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" name="url"  required>
                                </div> --}}
                                <div class="form-group">
                                    <label for="destination_url">Destination URL <span class="text-danger">*</span></label>
                                    <input type="url" class="form-control" name="destination_url" id="destination_url">
                                </div>
                                <div class="form-group">

                                   <div class="form-group">
    <label for="category">Category <span class="text-danger">*</span></label>
    <select name="category" id="category" class="form-control select-bold">
        <option value="" disabled selected>--Select Category--</option>
        @foreach($categories as $category)
            <option value="{{ $category->title }}">{{ $category->title }}</option>
        @endforeach
    </select>

</div>
<div class="form-group">
    <label for="lang">Language <span class="text-danger">*</span></label>
    <select name="language_id" id="lang" class="form-control" required>
        <option disabled selected>--Select Langs--</option>
        @foreach ($langs as $lang)
            <option value="{{ $lang->id }}">{{ $lang->code }}</option>
        @endforeach
    </select>
</div>

                                </div>
                              <div class="form-group">
    <label for="name">Meta Title<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="title" id="name">
    <span id="title-error" class="text-danger"></span>
</div>
                                <div class="form-group">
                                    <label for="meta_tag">Meta Tag <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_tag" id="meta_tag">
                                </div>
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="meta_keyword" id="meta_keyword">
                                </div>
                          <div class="form-group">
    <label for="meta_description">Meta Description</label>
    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="" style="resize: none;"></textarea>
    @error('meta_description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                           <div class="form-group">
    <label for="status">Status <span class="text-danger">*</span></label><br>
    <input type="radio" name="status" id="enable" value="enable" required>&nbsp;<label for="enable">Enable</label>
    <input type="radio" name="status" id="disable" value="disable">&nbsp;<label for="disable">Disable</label>
</div>

                                <div class="form-group">
                                    <label for="authentication">Authentication</label><br>
                                    <input type="checkbox" name="authentication" id="authentication" value="top_stores">&nbsp;<label for="authentication">Top Store</label>
                                </div>
                                <div class="form-group">
                                    <label for="network">Network <span class="text-danger">*</span></label>
                                    <select name="network" id="network" class="form-control">
                                        <option value="" disabled selected>--Select Network--</option>
                                        @foreach($networks as $network)
                                            <option value="{{ $network->title }}">{{ $network->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                              <div class="form-group">
    <label for="store_image">Store Image <span class="text-danger">*</span></label>
    <input type="file" class="form-control" name="store_image" id="store_image" required>
</div>

<!-- Placeholder for displaying selected image -->
<div id="imagePreview"></div>

<script>
    // JavaScript to preview the selected image
    document.getElementById('store_image').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(event) {
                var imgElement = document.createElement('img');
                imgElement.setAttribute('src', event.target.result);
                imgElement.setAttribute('class', 'preview-image'); // Optional: Add CSS class for styling
                imgElement.setAttribute('style', 'max-width: 100%; height: auto;'); // Optional: Add styling
                document.getElementById('imagePreview').innerHTML = ''; // Clear previous preview, if any
                document.getElementById('imagePreview').appendChild(imgElement);
            }
            reader.readAsDataURL(file);
        } else {
            document.getElementById('imagePreview').innerHTML = ''; // Clear preview if no file selected
        }
    });
</script>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin.store') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#name').on('input', function() {
            var maxLength = 65; // Maximum allowed characters
            var currentLength = $(this).val().length;
            if (currentLength > maxLength) {
                $('#title-error').text('The Meta Title field must not exceed ' + maxLength + ' characters.');
            } else {
                $('#title-error').text('');
            }
        });
    });
</script>
@endsection
