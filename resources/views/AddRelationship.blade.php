@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-xl-8">
            <div class="card" style="margin: 100px 5px 5px 5px">
                <div class="card-header">{{ __('ความสัมพันธ์') }}</div>
                <div class="card-body">
                    <form method="GET" action="{{url('AddRelationship')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>   
                            </div>
                        </div>

                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                                <div class="form-row">                
                                    <label for="nameme2" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme2"  value="{{ old('nameme') }}" required autocomplete="nameme2" autofocus >
                                </div> 
                                </div>
                        </div>
                        
                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                                <div class="form-row">                
                                    <label for="nameme2" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme2"  value="{{ old('nameme') }}" required autocomplete="nameme2" autofocus >
                                </div> 
                                </div>
                        </div>
                    
                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                                <div class="form-row">                
                                    <label for="nameme2" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme2"  value="{{ old('nameme') }}" required autocomplete="nameme2" autofocus >
                                </div> 
                                </div>
                        </div>
                         
                            <div class="col-md-5">
                                <input class="form-control mr-sm-2" type="search" placeholder="กรอกชื่อ" aria-label="Search">
                                
                                <button class="btn btn-outline-success " type="submit" style="margin: 10px -10px 5px 1px ">ค้นหา</button>
                            </div>

                            <div class="container-fluid">
    
            <div class="row">
                </div>  
                </div>
            <br>
                </div>
                </div>
                
<div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card" style="margin: 100px 5px 5px 5px">
                <div class="card-header">{{ __('เพิ่มความสัมพันธ์') }}</div>
                <div class="card-body">
                    <form method="GET" action="{{url('AddRelationship')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>   
                            </div>
                        </div>

                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                                <button type="button" class="btn btn-success" style="margin: 10px 10px 5px ">เพิ่มบุคคล</button>
                            </div>
                           
                        
                    </form>
                    <div class="container">
  <div class="row">
    <div class="col-sm-6 bg-success">
      <p>Lorem ipsum...</p>
      <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                                <div class="form-row">                
                                    <label for="nameme2" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme2"  value="{{ old('nameme') }}" required autocomplete="nameme2" autofocus >
                                </div> 
                                </div>
                        </div>
                        
                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-2">
                                    <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme"  value="{{ old('nameme') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship" class="form-control " name="relationship">
                                            <option selected>เลือก</option>
                                            <option>ทวด</option>
                                            <option>ปู่</option>
                                            <option>ย่า</option>
                                            <option>ตา</option>
                                            <option>ยาย</option>
                                            <option>พ่อ</option>
                                            <option>อา</option>
                                            <option>แม่</option>
                                            <option>น้า</option>
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                                <div class="form-row">                
                                    <label for="nameme2" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="กรอกชื่อ" class="form-control" name="nameme2"  value="{{ old('nameme') }}" required autocomplete="nameme2" autofocus >
                                </div> 
                                </div>
                        </div>
                    
    </div>
    <div class="col-sm-6 bg-warning">
      <p>Sed ut perspiciatis...</p>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection