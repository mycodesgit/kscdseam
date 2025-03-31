@extends('layouts.app')

@section('body')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('menu.sidebar')
            </div>
            
            <div class="col-md-10 mt-mobile-50">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Fitness Lab</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item breadcrumbactive"><a href="{{ route('dash') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Fitness Lab</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-plus"></i>
                                    Add
                                </h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('categoryCreate') }}" id="addCategory">
                                    @csrf
    
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Last name:</label>
                                                <input type="text" name="lname" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">First name:</label>
                                                <input type="text" name="fname" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Middle Initial:</label>
                                                <input type="text" name="mname" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Office/College:</label>
                                                <select name="officeID" class="form-control form-control-sm select2bs4">
                                                    <option disabled selected> --Select-- </option>
                                                    @foreach ($office as $dataoffice)
                                                        <option value="{{ $dataoffice->id }}">{{ $dataoffice->office_abbr }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Type:</label>
                                                <select name="empstudtype" class="form-control form-control-sm">
                                                    <option disabled selected>--Select--</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Faculty">Faculty</option>
                                                    <option value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" style="background-color: #198754; border-color: #198754">
                                                    <i class="fas fa-save"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('categoryCreate') }}" id="addCategory">
                                    @csrf
    
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Set Maximum for Fitness Lab:</label>
                                                <input type="number" name="lname" class="form-control form-control-sm" min="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label class="badge badge-secondary">Set Available for Fitness Lab:</label>
                                                <input type="text" name="fname" class="form-control form-control-sm" min="30">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" style="background-color: #198754; border-color: #198754">
                                                    <i class="fas fa-save"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <table id="schedeventTable" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Type</th>
                                            <th>Office/College</th>
                                            <th width="10%">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
