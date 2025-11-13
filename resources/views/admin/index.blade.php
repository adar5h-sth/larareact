@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        @include('admin.layouts.sidebar')
        <div class="col-md-9">
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card-header bg-white">
                        <h3 class="mt-2">Dashboard</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">

                            <!-- Today's Orders Card -->
                            <div class="col-md-6 mb-2">
                                <div class="card shadow-sm">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <div class="d-flex justify-content-between">
                                            <!-- Card Title -->
                                            <strong class="badge bg-dark">
                                                Today's Orders
                                            </strong>
                                            <!-- Number of Orders Today -->
                                            <span class="badge bg-dark">
                                                {{ $todayOrders->count() }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer text-center bg-white">
                                        <!-- Total Amount of Today's Orders -->
                                        <strong>
                                            {{ $todayOrders->sum('total') }}
                                        </strong>
                                    </div>
                                </div>
                            </div>

                            <!-- Yesterday's Orders Card -->
                            <div class="col-md-6 mb-2">
                                <div class="card shadow-sm">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <div class="d-flex justify-content-between">
                                            <!-- Card Title -->
                                            <strong class="badge bg-primary">
                                                Yesterday's Orders
                                            </strong>
                                            <!-- Number of Orders Yesterday -->
                                            <span class="badge bg-primary">
                                                {{ $yesterdayOrders->count() }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer text-center bg-white">
                                        <!-- Total Amount of Yesterday's Orders -->
                                        <strong>
                                            {{ $yesterdayOrders->sum('total') }}
                                        </strong>
                                    </div>
                                </div>
                            </div>

                            <!-- This Month Orders Card -->
                            <div class="col-md-6 mb-2">
                                <div class="card shadow-sm">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <div class="d-flex justify-content-between">
                                            <!-- Card Title -->
                                            <strong class="badge bg-danger">
                                                This Month Orders
                                            </strong>
                                            <!-- Number of Orders This Month -->
                                            <span class="badge bg-danger">
                                                {{ $monthOrders->count() }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer text-center bg-white">
                                        <!-- Total Amount of This Month's Orders -->
                                        <strong>
                                            {{ $monthOrders->sum('total') }}
                                        </strong>
                                    </div>
                                </div>
                            </div>

                            <!-- This Year's Orders Card -->
                            <div class="col-md-6 mb-2">
                                <div class="card shadow-sm">
                                    <!-- Card Header -->
                                    <div class="card-header bg-white">
                                        <div class="d-flex justify-content-between">
                                            <!-- Card Title -->
                                            <strong class="badge bg-success">
                                                This Year's Orders
                                            </strong>
                                            <!-- Number of Orders This Year -->
                                            <span class="badge bg-success">
                                                {{ $yearOrders->count() }}
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card Footer -->
                                    <div class="card-footer text-center bg-white">
                                        <!-- Total Amount of This Year's Orders -->
                                        <strong>
                                            {{ $yearOrders->sum('total') }}
                                        </strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection