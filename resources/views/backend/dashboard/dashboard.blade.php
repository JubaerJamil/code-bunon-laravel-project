@extends('backend.layout.app')
@section('backend_title', 'Admin Dashboard')

@section('backend_content')

    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
                <div class="card-body text-start p-3 w-100">
                    <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4C2.89543 4 2 4.89543 2 6V7H18V6C18 4.89543 17.1046 4 16 4H4Z" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 9H2V14C2 15.1046 2.89543 16 4 16H16C17.1046 16 18 15.1046 18 14V9ZM4 13C4 12.4477 4.44772 12 5 12H6C6.55228 12 7 12.4477 7 13C7 13.5523 6.55228 14 6 14H5C4.44772 14 4 13.5523 4 13ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H10C10.5523 14 11 13.5523 11 13C11 12.4477 10.5523 12 10 12H9Z" />
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100">
                                <h3 class="text-sm text-secondary mb-1">Stock Value</h3>
                                <h4 class="mb-2 font-weight-bold">Tk. 00.00</h4>
                                <div class="d-flex align-items-center">
                                    {{-- <span class="text-sm text-success font-weight-semibold px-2">
                                        <i class="fa fa-chevron-up text-xs me-1"></i>10.5%
                                    </span> --}}
                                    <span class="text-sm ms-0">Quantity : 10</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
                <div class="card-body text-start p-3 w-100">
                    <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3001 4.80001V4.00001C5.3001 2.67453 6.37462 1.60001 7.7001 1.60001H9.3001C10.6256 1.60001 11.7001 2.67453 11.7001 4.00001V4.80001H13.3001C14.1838 4.80001 14.9001 5.51635 14.9001 6.40001V9.25665C12.9078 9.99577 10.752 10.3999 8.5001 10.3999C6.24821 10.3999 4.09239 9.99577 2.1001 9.25657V6.40001C2.1001 5.51635 2.81644 4.80001 3.7001 4.80001H5.3001ZM6.9001 4.00001C6.9001 3.55818 7.25827 3.20001 7.7001 3.20001H9.3001C9.74194 3.20001 10.1001 3.55818 10.1001 4.00001V4.80001H6.9001V4.00001ZM7.7001 8.00001C7.7001 7.55818 8.05827 7.20001 8.5001 7.20001H8.5081C8.94994 7.20001 9.3081 7.55818 9.3081 8.00001C9.3081 8.44185 8.94994 8.80001 8.5081 8.80001H8.5001C8.05827 8.80001 7.7001 8.44185 7.7001 8.00001Z" />
                            <path d="M2.1001 10.9538V12.8C2.1001 13.6837 2.81644 14.4 3.7001 14.4H13.3001C14.1838 14.4 14.9001 13.6837 14.9001 12.8V10.9538C12.8899 11.6323 10.7372 11.9999 8.5001 11.9999C6.263 11.9999 4.11033 11.6323 2.1001 10.9538Z" />
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100">
                                <h3 class="text-sm text-secondary mb-1">Today Sale Status</h3>
                                <h4 class="mb-2 font-weight-bold">Tk. 500.00</h4>
                                <div class="d-flex align-items-center">
                                    {{-- <span class="text-sm text-success font-weight-semibold px-2">
                                        <i class="fa fa-chevron-up text-xs me-1"></i>55%
                                    </span> --}}
                                    <span class="text-sm ms-0">Quantity : 66</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0">
            <div class="card border shadow-xs mb-4">
                <div class="card-body text-start p-3 w-100">
                    <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.6001 8.8C1.6001 8.35816 1.95827 8 2.4001 8H4.0001C4.44192 8 4.8001 8.35816 4.8001 8.8V12.8C4.8001 13.2418 4.44192 13.6 4.0001 13.6H2.4001C1.95827 13.6 1.6001 13.2418 1.6001 12.8V8.8Z" />
                            <path d="M6.3999 5.6C6.3999 5.15818 6.75808 4.8 7.1999 4.8H8.7999C9.24174 4.8 9.5999 5.15818 9.5999 5.6V12.8C9.5999 13.2418 9.24174 13.6 8.7999 13.6H7.1999C6.75808 13.6 6.3999 13.2418 6.3999 12.8V5.6Z" />
                            <path d="M11.2 3.19999C11.2 2.75817 11.5581 2.39999 12 2.39999H13.6C14.0418 2.39999 14.4 2.75817 14.4 3.19999V12.8C14.4 13.2418 14.0418 13.6 13.6 13.6H12C11.5581 13.6 11.2 13.2418 11.2 12.8V3.19999Z" />
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100">
                                <h3 class="text-sm text-secondary mb-1">Last 15 Days Padding Status</h3>
                                {{-- <h4 class="mb-2 font-weight-bold">{{ $salesorderIds->sum('total_price') }}</h4> --}}
                                <h4 class="mb-2 font-weight-bold">Tk. 55.00</h4>
                                <div class="d-flex align-items-center">
                                    {{-- <span class="text-sm text-success font-weight-semibold px-2">
                                        <i class="fa fa-chevron-up text-xs me-1"></i>22%
                                    </span> --}}
                                    <span class="text-sm ms-0">Quantity : 66</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card border shadow-xs mb-4">
                <div class="card-body text-start p-3 w-100">
                    <div class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6658 7.43432C14.9782 7.74674 14.9782 8.25329 14.6658 8.56569L9.06578 14.1657C8.75338 14.4781 8.24683 14.4781 7.93441 14.1657L2.33441 8.56569C2.17818 8.40945 2.10007 8.20465 2.1001 7.99991V4.00001C2.1001 2.67453 3.17462 1.60001 4.5001 1.60001H8.50034C8.70498 1.60006 8.90962 1.67817 9.06578 1.83432L14.6658 7.43432ZM4.5001 4.80001C4.94192 4.80001 5.3001 4.44183 5.3001 4.00001C5.3001 3.55818 4.94192 3.20001 4.5001 3.20001C4.05827 3.20001 3.7001 3.55818 3.7001 4.00001C3.7001 4.44183 4.05827 4.80001 4.5001 4.80001Z" />
                        </svg>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100">
                                <h3 class="text-sm text-secondary mb-1">Today's Return Status</h3>
                                {{-- <h4 class="mb-2 font-weight-bold">{{ $returnorderIds->sum('total_price') }}</h4> --}}
                                <h4 class="mb-2 font-weight-bold">Tk. 66.00</h4>
                                <div class="d-flex align-items-center">
                                    {{-- <span class="text-sm text-success font-weight-semibold px-2">
                                        <i class="fa fa-chevron-up text-xs me-1"></i>18%
                                    </span> --}}
                                    <span class="text-sm ms-0">Quantity : 66</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-4 row">
                <style>
                    .card {
                    max-height: 500px; /* Adjust the height as needed */
                    overflow-y: auto;
                }
                </style>
        <div class="mb-4 col-lg-4 col-md-4 mb-md-0">
            <div class="card shadow-xs border h-100">
                <div class="card-header border-0 pb-0">
                    <h6 class="font-weight-semibold text-lg mb-0">Today's Order</h6>
                </div>
                <div class="card-body py-0">
                    <div class="p-0 table-responsive">
                    </div>
                    {{-- <button class="btn btn-white mb-0 ms-auto">View report</button> --}}
                </div>
            </div>
        </div>

        <div class="mb-4 col-lg-4 col-md-4 mb-md-0">
            <div class="card shadow-xs border h-100">
                <div class="card-header border-0 pb-0">
                    <h6 class="font-weight-semibold text-lg mb-0">Last 7 Days Pending Orders</h6>
                </div>
                <div class="card-body py-0">
                    <div class="p-0 table-responsive">
                    </div>
                    {{-- <button class="btn btn-white mb-0 ms-auto">View report</button> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">

            <div class="border shadow-xs card px-4">
                <div class="pb-0 card-header border-bottom">
                    <div class="d-sm-flex align-items-center">
                        <div>
                            <h6 class="mb-0 text-lg font-weight-semibold">Top Sale Product</h6>
                            {{-- <p class="mb-2 text-sm mb-sm-0">These are details about the last transactions</p> --}}
                        </div>
                        {{-- <div class="ms-auto d-flex">
                            <button type="button" class="mb-0 btn btn-sm btn-white me-2">
                                View report
                            </button>
                            <button type="button" class="mb-0 btn btn-sm btn-dark btn-icon d-flex align-items-center">
                                <span class="btn-inner--icon">
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                    </svg>
                                </span>
                                <span class="btn-inner--text">Download</span>
                            </button>
                        </div> --}}
                    </div>
                </div>
                <div class="px-0 py-0 card-body">
                    <div class="p-0 table-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
