@extends('layouts.dashboard')

@section('title')
    Dashboard Create Products Page
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up" >
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Create New Product
                </h2>
                <p class="dashboard-subtitle">
                    Create your own product
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form
                            action="{{ route('dashboard-products-store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div
                                                class="form-group"
                                            >
                                                <label for=""
                                                    >Product
                                                    Name</label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="form-group"
                                            >
                                                <label for=""
                                                    >Price</label
                                                >
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    name="price"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-group"
                                            >
                                                <label for=""
                                                    >Kategory</label
                                                >
                                                <select
                                                    name="categories_id"
                                                    class="form-control"
                                                >
                                                    <option
                                                        value=""
                                                        disabled
                                                    >
                                                        Pilih
                                                        Kategori
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-group"
                                            >
                                                <label for=""
                                                    >Description</label
                                                >
                                                <textarea name="description" id="editor" cols="50" rows="10"></textarea>
                                                {{-- <div name="description"
                                                    id="editor"
                                                >
                                                    This is some
                                                    sample
                                                    content.
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div
                                                class="form-group"
                                            >
                                                <label for=""
                                                    >Thumbnails</label
                                                >
                                                <input
                                                    type="file"
                                                    name="photo"
                                                    class="form-control"
                                                />
                                                <p
                                                    class="text-muted"
                                                >
                                                    Kamu dapat
                                                    memilih
                                                    lebih dari
                                                    satu file
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col text-right"
                                        >
                                            <button
                                                type="submit"
                                                class="btn btn-success px-5"
                                            >
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("addon-script")
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor"))
            .then((editor) => {
                console.log(editor);
            })
            .catch((error) => {
                console.error(error);
            });
    </script>
@endpush