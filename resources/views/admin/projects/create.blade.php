@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h1>ADMIN/PROJECTS/CREATE.BLADE</h1>
    <h2 class="fs-4 text-secondary my-4">
        {{ __('New Project Page for') }} {{ Auth::user()->name }}.
    </h2>

    <div class="row justify-content-center my-3">
        <div class="col">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label for="title" class="form-label"><strong>Title</strong></label>

                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle" placeholder="New project Title">

                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label for="description" class="form-label"><strong>Description</strong></label>

                    <input type="text" class="form-control" name="description" id="description" aria-describedby="helpTitle" placeholder="New project Description">

                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>



                <div class="mb-3">
                    <label for="type_id" class="form-label">Type</label>
                    <select class="form-select form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                        <option selected>Select a Type</option>
                        <option value="">Uncategorized</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id == old('type_id') ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                        @endforeach
                    </select>

                    @error('type_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">

                    <label for="project_link" class="form-label"><strong>Project Link</strong></label>

                    <input type="text" class="form-control" name="link_project" id="link_project" aria-describedby="helpTitle" placeholder="New project link">

                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label for="github_link" class="form-label"><strong>Github Link</strong></label>

                    <input type="text" class="form-control" name="link_github" id="link_github" aria-describedby="helpTitle" placeholder="New project Github link">

                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>



                <div class="mb-3">

                    <label for="thumb" class="form-label"><strong>Choose a Thumbnail image file</strong></label>

                    <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Upload a new image file..." aria-describedby="fileHelpThumb">

                    @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-success my-3">SAVE</button>
                <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">CANCEL</a>

            </form>
        </div>
    </div>

</div>
@endsection