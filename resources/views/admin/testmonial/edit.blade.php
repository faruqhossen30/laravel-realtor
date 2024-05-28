@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="testminial" class="py-2" pageoneRoute="{{ route('testmonial.index') }}" pagetwo="Edit" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('testmonial.update', $testmonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Review" name="review" type="number"
                                    value="{{ $testmonial->review }}" />
                                <x-form.input label=" Name" name="name" value="{{ $testmonial->name }}" />
                                <x-form.input label=" Designation" name="designation"
                                    value="{{ $testmonial->designation }}" />

                                <textarea name="description" class="ckeditor" id="editor" cols="20" rows="9">{{ $testmonial->designation }}</textarea>
                                @error('description')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror


                                <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                    <input class="dropify" type="file" id="myDropify" name="thumbnail "
                                        data-default-file="{{ asset('storage/' . $testmonial->thumbnail) }}">
                                </div>
                            </div>
                        </div>
                        <x-form.submit-button title="update" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

        });
    </script>
@endpush
