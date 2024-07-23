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
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Products</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                {{-- <form class="d-flex flex-wrap align-items-center"> --}}
                                {{-- <label for="inputPassword2" class="visually-hidden">Search</label>
                                    <div class="me-3">
                                        <input type="search" class="form-control my-1 my-lg-0" id="inputPassword2"
                                            placeholder="Search...">
                                    </div> --}}
                                {{-- <label for="status-select" class="me-2">Sort By</label>
                                    <div class="me-sm-3">
                                        <select class="form-select my-1 my-lg-0" id="status-select">
                                            <option selected="">All</option>
                                            <option value="1">Popular</option>
                                            <option value="2">Price Low</option>
                                            <option value="3">Price High</option>
                                            <option value="4">Sold Out</option>
                                        </select>
                                    </div> --}}
                                {{-- </form> --}}
                            </div>
                            <div class="col-auto">
                                <div class="text-lg-end my-1 my-lg-0">
                                    {{-- <button type="button" class="btn btn-success waves-effect waves-light me-1"><i
                                            class="mdi mdi-cog"></i></button> --}}
                                    <a href="{{ route('products.create') }}"
                                        class="btn btn-danger waves-effect waves-light"><i
                                            class="mdi mdi-plus-circle me-1"></i> Add New</a>
                                </div>
                            </div><!-- end col-->
                        </div> <!-- end row -->
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card product-box">
                        <div class="card-body">
                            <div class="product-action">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-success btn-xs waves-effect waves-light"><i
                                        class="mdi mdi-pencil"></i></a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs waves-effect waves-light"><i
                                            class="mdi mdi-close"></i></button>
                                </form>
                            </div>

                            <div class="bg-light">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="img-fluid" />
                                @else
                                    <img src="build/assets/images/kopi.jpeg" alt="default-product-pic"
                                        class="img-fluid" />
                                @endif
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a
                                                href="{{ route('products.show', $product->id) }}"
                                                class="text-dark">{{ $product->name }}</a></h5>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : {{ $product->qty }}
                                                pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            Rp {{ number_format($product->price) }}
                                        </div>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div>
                    </div> <!-- end card-->
                </div>
            @endforeach
        </div>
        <!-- end row-->

        {{-- <div class="row">
            <div class="col-12">
                <ul class="pagination pagination-rounded justify-content-end mb-3">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- end col-->
        </div> --}}
        <!-- end row-->

    </div> <!-- container -->
</x-app-layout>
