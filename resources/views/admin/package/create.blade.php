@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Package" class="py-2" pageoneRoute="{{ route('package.index') }}" pagetwo="Create" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Pakage Name" name="name" />
                                <x-form.input label="Price" type="number" name="price" />

                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" id="addItemButton" class="bg-blue-500 p-2 text-white rounded-lg">Add
                                Item</button>
                        </div>
                        <div class="p-2 bg-white">


                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Service title
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="serviceTable">
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <input type="text" id="name" name="service[0]"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:text-right" />
                                            </td>
                                            <td class="px-6 py-4">
                                                <select name="status[0]">
                                                    <option value="0" >No</option>
                                                    <option value="1">Yes</option>
                                                </select>

                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="removeButton text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    x
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>
    <script src="{{ asset('js/sortablejs.js') }}"></script>

    <script>
        $(document).ready(function() {
            let num = 0;
            $(document).on('click', '#addItemButton', function() {

                let number = $('#serviceTable').children().length;

                $('#serviceTable').append(
                    `
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input type="text" id="name" name="service[${number}]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:text-right" />
                        </td>
                        <td class="px-6 py-4">
                            <select name="status[${number}]" >
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>">
                        </td>
                        <td class="px-6 py-4">
                            <button type="button"
                                class="removeButton text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                x
                            </button>
                        </td>
                    </tr>
                    `
                );
            })
            $(document).on('click', '.removeButton', function() {
                $(this).parent().parent().remove();
            })
        });
    </script>
@endpush
