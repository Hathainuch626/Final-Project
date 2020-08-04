@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                <div class="card-header">Create Tree</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    สร้างต้นไม้ครอบครัวของคุณ
                    <p><a class="btn btn-secondary" href="#" role="button">สร้างต้นไม้ </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection