@extends('backend.layout.app')
@section('backend_title', 'Admin Brand List')

@section('backend_content')

    <div class="my-4 row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
                <!-- Card header -->
                <div class="pb-0 card-header">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">All Service Item </h5>
                            <p class="mb-0 text-sm">
                            </p>
                        </div>
                        <div class="my-auto mt-4 ms-auto mt-lg-0">
                            <div class="my-auto ms-auto">
                                <a href="{{ Route('service_create_Page') }}" class="me-2 mb-0 btn btn-dark">
                                    <i class="fas fa-plus me-1"></i>
                                    Add new service
                                </a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="px-0 pb-0 card-body">
                    <div class="table-responsive">
                        <table class="table table-flush" id="products-list">
                            <thead class="thead-light">
                                <tr>
                                    <th class="fs-6" style="color: black">Sl. No.</th>
                                    <th class="fs-6" style="color: black">Title Image</th>
                                    <th class="fs-6" style="color: black">2nd Image</th>
                                    <th class="fs-6" style="color: black">Icon</th>
                                    <th class="fs-6" style="color: black">Title</th>
                                    <th class="fs-6" style="color: black">Status</th>
                                    <th class="fs-6" style="color: black">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $index=> $item)
                                    <tr>

                                        <td>
                                            {{ $index + 1 }}
                                        </td>

                                        <td>
                                            <img src="{{ asset($item->title_image) }}" alt="" width="150" height="100">
                                        </td>

                                        <td>
                                            <img src="{{ asset($item->image) }}" alt="" width="150" height="100">
                                        </td>

                                        <td>{{ $item->icon }}</td>

                                        <td>
                                            {{ $item->title }}
                                        </td>

                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-success badge-sm">Active</span>
                                            @else
                                                <span class="badge badge-danger badge-sm">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-sm">

                                            <a href="{{ Route('service_show_Page',$item->id) }}" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                <i class="fa-solid fa-eye fs-5"></i>
                                            </a>

                                            <a href="{{ Route('service_edit_Page',$item->id) }}" class="mx-3"
                                                data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                <i class="fa-solid fa-pen-to-square fs-5"></i>
                                            </a>

                                            <a onclick="return confirm('Are you sure Delete?')"
                                                href="{{ Route('service_slider_Delete', $item->id) }}" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete product">
                                                <i class="fa-solid fa-trash-can fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-sm" colspan="3">Data Not Found!!</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
