@extends('backend.layout.app')

@section('backend_content')

    <div class="my-4 row">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card">
                <!-- Card header -->
                <div class="pb-0 card-header">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">Client Message </h5>
                            <p class="mb-0 text-sm">
                            </p>
                        </div>
                        <div class="my-auto mt-4 ms-auto mt-lg-0">
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
                                    <th class="fs-6" style="color: black">Message Date/Time</th>
                                    <th class="fs-6" style="color: black">Client Name</th>
                                    <th class="fs-6" style="color: black">E-mail</th>
                                    <th class="fs-6" style="color: black">Phone Number</th>
                                    <th class="fs-6" style="color: black">City</th>
                                    <th class="fs-6" style="color: black">Country</th>
                                    <th class="fs-6" style="color: black">Subject</th>
                                    <th class="fs-6" style="color: black">Message</th>
                                    <th class="fs-6" style="color: black">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clientMessage as $index=> $item)
                                    <tr>

                                        <td>
                                            {{ $index + 1 }}
                                        </td>

                                        <td>{{ date('d-M-Y / h:i A', strtotime($item->created_at)) }}</td>

                                        <td>{{ $item->name }}</td>


                                        <td>
                                            {{ $item->email }}
                                        </td>

                                        <td>{{ $item->phone }}</td>

                                        <td>{{ $item->city }}</td>

                                        <td>{{ $item->country }}</td>

                                        <td>{{ $item->subject }}</td>
                                        <td><textarea class="form-control" cols="60" rows="2">{{ $item->message }}</textarea></td>

                                        <td class="text-sm">
                                            <a onclick="return confirm('Are you sure Delete?')"
                                                href="{{ Route('contact_Message_Delete', $item->id) }}" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete product">
                                                <i class="fa-solid fa-trash-can fs-5 text-danger"></i>
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
