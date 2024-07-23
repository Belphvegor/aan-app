<x-app-layout>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Add / Edit Product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add / Edit Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                            <div class="mb-3">
                                <label for="product-name" class="form-label">Product Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="product-name" class="form-control" placeholder="Product name"
                                    name="name" required maxlength="255">
                            </div>

                            <div class="mb-3">
                                <label for="product-description" class="form-label">Product Description</label>
                                <textarea class="form-control" id="product-description" rows="5" name="description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="product-price">Price <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="product-price" placeholder="Enter amount"
                                    name="price" step="0.01" required>
                            </div>

                            <div class="mb-3">
                                <label for="product-qty" class="form-label">Quantity</label>
                                <input class="form-control" id="product-qty" type="number" name="qty"
                                    value="1">
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                            <div class="mb-3">
                                <label for="product-image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="product-image" name="image">
                            </div>

                            <!-- You can keep the dropzone for multiple images if needed -->
                            {{-- <form action="/" method="post" class="dropzone" id="myAwesomeDropzone"
                                data-plugin="dropzone" data-previews-container="#file-previews"
                                data-upload-preview-template="#uploadPreviewTemplate">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                    <h3>Drop files here or click to upload.</h3>
                                    <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                        <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>

                            <!-- Preview -->
                            <div class="dropzone-previews mt-3" id="file-previews"></div> --}}
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-3">
                        <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                        <button type="submit" class="btn w-sm btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                    </div>
                </div> <!-- end col -->
            </div>
        </form>

        <!-- end row -->

        <!-- file preview template -->
        <div class="d-none" id="uploadPreviewTemplate">
            <div class="card mt-1 mb-0 shadow-none border">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                        </div>
                        <div class="col ps-0">
                            <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="dripicons-cross"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</x-app-layout>
