@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">        
            <div style="margin: 100px 5px 10px -50px">
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card" style="margin: 50px -40px 5px -20px">
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
                                
                                <button class="btn btn-outline-success " type="search" style="margin: 10px -10px 5px 1px ">ค้นหา</button>
                                
                            </div>
                        </div>
                 </div>
            </div> 
                <div class="col-sm-6">
                    <div class="card" style="margin: 50px 5px 5px 60px">
                    <div class="card-header">{{ __('เพิ่มความสัมพันธ์') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>   
                            </div>
                        </div>

                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
<<<<<<< HEAD
                            <button type="submit" class="btn btn-secondary" style="margin: 10px 10px 20px 180px ">เพิ่มบุคคล</button>
                    </div>
                </form>
            </div>
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop" style="margin: 100px 10px 20px -100px">บันทึกข้อมูล</button>

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
                            คุณได้บันทึกข้อมูลความสัมพันธ์เรียบร้อยแล้ว
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">ตกลง</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        </div>
                    </div>
                </div>
            </div>
                <button type="submitt" class="btn btn-danger" style="margin: 100px 10px 20px 20px">ยกเลิก</button>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
