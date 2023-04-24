@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header background-color:#020812">Welcome!</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @else
                <div class="alert alert-success">
                    You are logged in! Choose the category you want to update:
                </div>
                <div class="container justify-content-center text-center mt-3">
                <div class="row ">
                    <div>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" class="btn btn-success">Paintings</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-success">Sculptures</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-success">Advices</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-success">Art Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</div>

@endsection