@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">        
            <div style="margin: 100px 15px 10px">
                <div class="col-md-6 ">
                    <div class="card" style="margin: 40px -300px 20px 220px">
                        <div class="card-header">{{ __('เพิ่มความสัมพันธ์') }}</div>
                            <div class="card-body">
                            <form method="GET" action="{{url('inrelation')}}">
                        @csrf

                        <div class="form-group row"> 
                            <div class="form-group row">
                                <label for="name" class="col-md-5 col-form-label text-md-right"  >{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="my" type="text" placeholder="กรอกชื่อ" class="form-control " name="my" value="{{ old('my') }}" required autocomplete="my" autofocus>   
                            </div>
                        </div>

                        <div class="form-group row">                
                                <label for="nameme" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                                <div class="col-md-3">
                                    <input id="parent" type="text" placeholder="กรอกชื่อ" class="form-control"  name="parent" value="{{ old('parent') }}" required autocomplete="nameme" autofocus >
                                </div>  
                                
                                <div class="form-row">
                                    <label for="relationship2" class="col-md-6 col-form-label text-md-right">{{ __('ความสัมพันธ์') }}</label> 
                                        <div class="col-md-6">
                                        <select id="relationship2" class="form-control " name="relationship2">
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
                                            <option>ลูก</option>
                                            <option>พี่</option>
                                            <option>น้อง</option>
                                            <option>หลาน</option>

                                        </select>
                                </div>
                            </div>
                        </div>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop"style="margin: 10px 10px 20px 180px ">เพิ่มบุคคล</button>
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="false">
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
                                    <button type="submit" class="btn btn-primary">ตกลง</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">ข้อมูลเพิ่มบุคคล</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <?php
                                        use App\relationmodel;
                                            $book= relationmodel::all();
                                            $count=relationmodel::count();
                                                for ($g=0; $g < $count ; $g++) { 
                                    ?>      
                                        <option><?php echo $book[$g]->parent."มีความสัมพันธ์เป็น".$book[$g]->relation."ของ".$book[$g]->my;?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                   
                        <button type="button" class="btn btn-success" style="margin: 20px 10px 20px 50px">บันทึกข้อมูล</button>
                        <button type="button" class="btn btn-warning" style="margin: 20px 10px 20px 50px">แก้ไข</button>
                        <button type="button" class="btn btn-danger" style="margin: 20px 10px 20px 50px">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
