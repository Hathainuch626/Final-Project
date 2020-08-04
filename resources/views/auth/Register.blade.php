@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                <div class="card-header">{{ __('ลงทะเบียน') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('regis.store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                        
                            <div class="col-md-4">
                                <input type="text" placeholder="กรอกชื่อจริง" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus >

                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            
                            <label for="lname" class="col-md-2 col-form-label text-md-right">{{ __('นามสกุล') }}</label> 
                         <div class="col-md-4">
                                <input type="lname" placeholder="กรอกนามสกุล" class="form-control @error('lname') is-invalid @enderror"  name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                            
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="dmy" class="col-md-2 col-form-label text-md-right">{{ __('วัน/เดือน/ปีเกิด') }}</label>                           
                                <div class="col-md-4">                                   
                                    
                                        <input type="date" class="form-control @error('dmy') is-invalid @enderror" name="dmy" value="{{ old('dmy') }}" required autocomplete="dmy" autofocus>
                        </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                <label for="inputSex" class="col-md-6 col-form-label text-md-right" name="">{{ __('เพศ') }}</label>
                                    <div class="col-md-6">
                                        <select id="inputSex" class="form-control " name="sex">
                                            <option selected>เลือก</option>
                                            <option>ชาย</option>
                                            <option>หญิง</option>
                                            <option>ไม่ระบุ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="กรอกอีเมล" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('สร้างรหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="สร้างรหัสผ่านใหม่" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="กรอกรหัสผ่านอีกครั้ง" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ลงทะเบียน') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection