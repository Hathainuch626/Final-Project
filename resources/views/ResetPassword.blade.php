@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                
                <div class="card-header">{{ __('เปลี่ยนรหัสผ่าน') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token ?? '' }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Verification code" class="col-md-4 col-form-label text-md-right">{{ __('รหัสยืนยัน') }}</label>

                            <div class="col-md-6">
                                <input id="Verification code" type="Verification code" class="form-control @error('Verification code') is-invalid @enderror" name="Verification code" value="{{ $email ?? old('email') }}" required autocomplete="Verification code" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right">{{ __('คำถาม') }}</label>

                            <div class="col-md-6">
                                <select id="question" class="form-control " name="question">
                                    <option selected>เลือก</option>
                                    <option>วัน/เดือน/ปีเกิดของคุณ</option>
                                    <option>ชื่อจริงและนามสกุลของคุณ</option>
                                    <option>เบอร์โทรศัพท์ของคุณ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="answer" class="col-md-4 col-form-label text-md-right">{{ __('คำตอบ') }}</label>

                            <div class="col-md-6">
                                <input id="answer" type="answer" class="form-control @error('answer') is-invalid @enderror" name="answer" required autocomplete="answer">
                            </div>
                        </div>
                            
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('ตั้งรหัสผ่านใหม่') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่านอีกครั้ง') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin: 10px 10px 20px 250px">บันทึกรหัสผ่าน</button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">ยืนยันเปลี่ยนรหัสผ่าน</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        คุณได้บันทึกเปลี่ยนรหัสผ่านแล้ว
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">ตกลง</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
