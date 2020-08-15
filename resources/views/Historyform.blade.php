@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                <div class="card-header">{{ __('แบบฟอร์มกรอกประวัติส่วนตัว') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ url('createtree') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
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
                                    <label for="inputSex" class="col-md-6 col-form-label text-md-right">{{ __('เพศ') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputSex" class="form-control " >
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
                                <label for="career" class="col-md-2 col-form-label text-md-right">{{ __('อาชีพ') }}</label>

                            <div class="col-md-4">
                                <input id="career" type="career" placeholder="กรอกอาชีพ" class="form-control @error('career') is-invalid @enderror" name="career" value="{{ old('career') }}" required autocomplete="career">

                                @error('career')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                
                                <label for="Pnumber" class="col-md-2 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์') }}</label> 
                             <div class="col-md-4">
                                    <input type="Pnumber" placeholder="กรอกเบอรโทรศัพท์" class="form-control @error('Pnumber') is-invalid @enderror"  name="Pnumber" value="{{ old('Pnumber') }}" required autocomplete="Pnumber" autofocus>
                                
                                    @error('Pnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ปัจจุบัน:</label>
                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince" class="col-md-6 col-form-label text-md-right" >{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince" class="form-control " name="inputprovince">
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode1') is-invalid @enderror" name="postalcode" value="{{ old('postalcode') }}" required autocomplete="postalcode" autofocus >
                                
                                    @error('postalcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ตามทะเบียนบ้าน:</label>
                            <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince2" class="col-md-6 col-form-label text-md-right">{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince2" class="form-control " name="inputprovince2" >
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode2" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode2') is-invalid @enderror" name="postalcode2" value="{{ old('postalcode2') }}" required autocomplete="postalcode2" autofocus >
                                
                                    @error('postalcode2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>   
                         
                        
                        <div class="form-group row">
                                <label for="facebook" class="col-md-2 col-form-label text-md-right">{{ __('facebook') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกชื่อหรืออีเมล์" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus >

                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="ตั้งรหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('Password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่านอีกครั้ง') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin: 10px 10px 20px 250px">บันทึกประวัติส่วนตัว</button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">ยืนยันข้อมูล</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                คุณได้บันทึกประวัติส่วนตัวเรียบร้อยแล้ว
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">ตกลง</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
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
