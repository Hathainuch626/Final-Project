@extends('layouts.app')

@section('content')
<style>

    /* Style all input fields */
    input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
    }

    /* Style the submit button */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
    }

    /* The message box is shown when the user clicks on the password field */
    .message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    .message p {
        padding: 10px 35px;
        font-size: 18px;
    }

</style>

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
                                <input type="text" placeholder="กรอกนามสกุล" class="form-control @error('lname') is-invalid @enderror"  name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                            
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
                                <input id="password" placeholder="สร้างรหัสผ่านใหม่" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="ต้องมีตัวเลข ตัวอักษรพิมพ์เล็กและพิมพ์ใหญ่อย่างน้อย 8 ตัวอักษรขึ้นไป" required>

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
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

@endsection