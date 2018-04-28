@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('issues.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="category_id" class="col-sm-3 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input
                                        id="title"
                                        type="text"
                                        class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        name="title"
                                        value="{{ old('title') }}"
                                >

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                    <textarea
                                            rows="3"
                                            id="description"
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            name="description"
                                    >{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="submitter_telephone" class="col-sm-3 col-form-label text-md-right">Telephone</label>

                            <div class="col-md-6">
                                <input
                                        id="submitter_telephone"
                                        type="text"
                                        class="form-control{{ $errors->has('submitter_telephone') ? ' is-invalid' : '' }}"
                                        name="submitter_telephone"
                                        value="{{ old('submitter_telephone') }}"
                                >

                                @if ($errors->has('submitter_telephone'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('submitter_telephone') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="submitter_email" class="col-sm-3 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input
                                        id="submitter_email"
                                        type="text"
                                        class="form-control{{ $errors->has('submitter_email') ? ' is-invalid' : '' }}"
                                        name="submitter_email"
                                        value="{{ old('submitter_email') }}"
                                >

                                @if ($errors->has('submitter_email'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('submitter_email') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input
                                        id="image"
                                        type="file"
                                        class="form-control-file {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                        name="image"
                                        value="{{ old('image') }}"
                                >

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
