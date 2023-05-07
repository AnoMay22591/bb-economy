@extends('layouts.user_type.auth')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid">
        <div class="page-header min-height-150 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/Kalasin_University_Seal.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            01 : มหาวิทยาลัยกาฬสินธุ์
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            หน่วยงาน : ม.เดิม
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row container-fluid pt-4">
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="profile" aria-selected="true" class="nav-link active" data-toggle="tab" href="#menu1">
                        แผนงานพื้นฐาน
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link" data-toggle="tab" href="#menu2">
                        แผนงานบุคลากร
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link" data-toggle="tab" href="#menu3">
                        แผนงานยุทธศาสตร์
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link" data-toggle="tab" href="#menu4">
                        แผนบูรณาการ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link" data-toggle="tab" href="#menu5">
                        รายการสำคัญ
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                    <div id="menu1" class=" tab-pane active"><br>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h4>แผนงานพื้นฐาน</h4>
                                    </div>

                                    <div class="nav-wrapper position-relative end-0 px-4">
                                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link mb-0 px-0 py-1 active font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="profile" aria-selected="true" class="nav-link active" data-toggle="tab" href="#menu1-sec1">
                                                    ประจำ
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab" role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link" data-toggle="tab" href="#menu1-sec2">
                                                    ลงทุน
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="menu1-sec1" class=" tab-pane active"><br>
                                                <div class="row">
                                                    <div class="col-6 mt-2 pb-4 pt-0">
                                                        <div class="card border">
                                                            <div class="card-header pb-0 pt-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6 class="mb-0 pt-2">ประจำ-ปีเดียว</h6>
                                                                    <a class="mb-0 pt-2" data-toggle="collapse" href="#cl-menu1-sec1" role="button" aria-expanded="false" aria-controls="cl-menu1-sec1">
                                                                        <h6 class="text-danger"><ins>แสดงน้อยลง</ins></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div id="cl-menu1-sec1" class="collapse show card-body pt-4 p-3 px-4">
                                                                <ul class="list-group">
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">โครงการพระราชดำริ</h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg pt-4">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ค่าสาธารณูปโภค</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าน้ำ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าไฟ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าโทรศัพท์</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าไปรษณีย์</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าบริการสื่อสารและโทรคมนาคม</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="border p-4 mb-2 bg-gray-100 border-radius-lg pt-4">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">อื่น ๆ </h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mt-2 pb-4 pt-0">
                                                        <div class="card border">
                                                            <div class="card-header pb-0 pt-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6 class="mb-0 pt-2">ประจำ-ผูกพัน</h6>
                                                                    <a class="mb-0 pt-2" data-toggle="collapse" href="#cl-menu1-sec2" role="button" aria-expanded="false" aria-controls="cl-menu1-sec2">
                                                                        <h6 class="text-danger"><ins>แสดงน้อยลง</ins></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div id="cl-menu1-sec2" class="collapse show  card-body pt-4 p-3 px-4">
                                                                <ul class="list-group">

                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันเดิม</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าเช่ารถ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">อื่น ๆ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันใหม่</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าเช่ารถ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">อื่น ๆ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ค่าโทรศัพท์</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu1-sec2" class=" tab-pane fade"><br>
                                                <div class="row">
                                                    <div class="col-6 mt-2 pb-4 pt-0 d-grid">
                                                        <div class="card border">
                                                            <div class="card-header pb-0 pt-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6 class="mb-0 pt-2">ครุภัณฑ์</h6>
                                                                    <a class="mb-0 pt-2" data-toggle="collapse" href="#cl-menu1-sec3" role="button" aria-expanded="false" aria-controls="cl-menu1-sec3">
                                                                        <h6 class="text-danger"><ins>แสดงน้อยลง</ins></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div id="cl-menu1-sec3" class="collapse show  card-body pt-4 p-3 px-4">
                                                                <ul class="list-group">

                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ปีเดียว</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ประจำอาคาร</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">ทดแทน</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">หมวดรายจ่ายย่อย :</span> <span class="text-danger">เพิ่มประสิทธิภาพ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันเดิม</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">สัญญา</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ม.41/ม.42</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันใหม่</h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mt-2 pb-4 pt-0">
                                                        <div class="card border">
                                                            <div class="card-header pb-0 pt-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6 class="mb-0 pt-2">สิ่งก่อสร้าง</h6>
                                                                    <a class="mb-0 pt-2" data-toggle="collapse" href="#cl-menu1-sec4" role="button" aria-expanded="false" aria-controls="cl-menu1-sec4">
                                                                        <h6 class="text-danger"><ins>แสดงน้อยลง</ins></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div id="cl-menu1-sec4" class="collapse show  card-body pt-4 p-3 px-4">
                                                                <ul class="list-group">

                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ปีเดียว</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ปรับปรุง</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ก่อสร้างใหม่</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ค่าควบคุมงาน</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ค่าออกแบบ</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันเดิม</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">สัญญา</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ม.41/ม.42</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันใหม่</h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 mt-2 pb-4 pt-0">
                                                        <div class="card border">
                                                            <div class="card-header pb-0 pt-1">
                                                                <div class="d-flex justify-content-between">
                                                                    <h6 class="mb-0 pt-2">รายจ่ายลักษณะลงทุน</h6>
                                                                    <a class="mb-0 pt-2" data-toggle="collapse" href="#cl-menu1-sec5" role="button" aria-expanded="false" aria-controls="cl-menu1-sec5">
                                                                        <h6 class="text-danger"><ins>แสดงน้อยลง</ins></h6>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div id="cl-menu1-sec5" class="collapse show  card-body pt-4 p-3 px-4">
                                                                <ul class="list-group">

                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ปีเดียว</h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันเดิม</h6>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">สัญญา</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <hr style="border: 2px dashed;border-radius: 5px;">
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div class="row text-left">
                                                                                <div class="rowpl-4">
                                                                                    <div>
                                                                                        <h6 class="mb-3"><span class="text-black">ประเภทงบ :</span> <span class="text-danger">ม.41/ม.42</span></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                                <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                            </div>


                                                                            <div class="row pt-2">
                                                                                <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 1</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 2</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 3</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm"><span>บัญชี 4</span></div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="border p-4 mb-4 bg-gray-100 border-radius-lg">
                                                                        <div class="row text-left">
                                                                            <div>
                                                                                <h6 class="mb-3 text-primary border-bottom">ผูกพันใหม่</h6>
                                                                            </div>
                                                                            <div class="col-sm text-center text-info"><span>ประเภทรายการ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>ปริมาณ</span></div>
                                                                            <div class="col-sm text-center text-info"><span>จำนวน</span></div>
                                                                        </div>
                                                                        <div class="row pt-2">
                                                                            <div class="col-sm text-right"><span>คำขอ</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 1</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 2</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 3</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm"><span>บัญชี 4</span></div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class=" tab-pane fade"><br>
                        <h3>แผนงานบุคลากร</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h6>Projects table</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Spotify</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">working</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">60%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Invision</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">done</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Jira</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">canceled</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">30%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Slack</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">canceled</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">0%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-webdev.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Webdev</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">working</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">80%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2">
                                                                <div>
                                                                    <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">Adobe XD</h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                                        </td>
                                                        <td>
                                                            <span class="text-xs font-weight-bold">done</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle">
                                                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v text-xs"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu3" class=" tab-pane fade"><br>
                        <h3>Menu 3</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div id="menu4" class=" tab-pane fade"><br>
                        <h3>Menu 4</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div id="menu5" class=" tab-pane fade"><br>
                        <h3>Menu 5</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>






        <div>
        </div>

</main>

@endsection
