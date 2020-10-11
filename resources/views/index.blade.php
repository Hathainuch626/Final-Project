@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                <div class="card-header">News</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php session_start(); print_r($_SESSION);?>
                    คุณได้ลงทะเบียนสำเร็จ !!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection