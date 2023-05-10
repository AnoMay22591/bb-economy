@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">สารบัญ (รายชื่อมหาลัย)</h5>
                            </div>
                            <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">&nbsp; ปีงบประมาณ
                                2567</a>
                        </div>



                        <div class="row container-fluid pt-4">
                            <div class="nav-wrapper position-relative end-0 px-0">
                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 active font-weight-bold" data-bs-toggle="tab"
                                            role="tab" aria-controls="profile" aria-selected="true"
                                            class="nav-link active" data-toggle="tab" href="#menu1">
                                            กองจัดทํางบประมาณด้านสังคม 2/1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 font-weight-bold" data-bs-toggle="tab"
                                            role="tab" aria-controls="dashboard" aria-selected="false" class="nav-link"
                                            data-toggle="tab" href="#menu2">
                                            กองจัดทํางบประมาณด้านสังคม 2/2
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="tab-content">
                        <div id="menu1" class=" tab-pane active"><br>
                            
                            <div class="card-body p-4 pt-0">
                                <div class="row">
                                    <div class="col-md-12 mb-md-0 mb-4">
                                      <div class="card-header pb-2 pt-0 pl-0 ">
                                        <h6 class="mb-0">หน่วยงาน : ม.เดิม 9 หน่วยงาน (1-9)</h6>
                                      </div>
                                        <div class="card-body px-0 pt-0 pb-2 border card-plain border-radius-lg">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead >
                                                        <tr >
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                ID
                                                            </th>

                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Name
                                                            </th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Tag
                                                            </th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Status
                                                            </th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                Last Update
                                                            </th>
                                                            <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                             Edit By
                                                        </th>
                                                            <th
                                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="ps-4">
                                                                <p class="text-xs font-weight-bold mb-0">1</p>
                                                            </td>

                                                            <td class="">
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    มหาวิทยาลัยกาฬสินธุ์</p>
                                                            </td>
                                                            <td class="text-center">
                                                                <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <span class="badge badge-sm bg-gradient-success">success</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span
                                                                    class=" text-xs font-weight-bold">09/05/2566</span>
                                                            </td>
                                                            <td class="text-center">
                                                              <span
                                                                  class=" text-xs font-weight-bold">anothai.a</span>
                                                          </td>
                                                            <td class="text-center">
                                                              <a href="{{ url('insert') }}">
                                                                <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                              </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                          <td class="ps-4">
                                                              <p class="text-xs font-weight-bold mb-0">2</p>
                                                          </td>

                                                          <td class="">
                                                              <p class="text-xs font-weight-bold mb-0">
                                                                มหาวิทยาลัยนครพนม
                                                              </p>
                                                          </td>
                                                          <td class="text-center">
                                                              <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                          </td>
                                                          <td class="align-middle text-center text-sm">
                                                              <span class="badge badge-sm bg-gradient-danger">Pending
                                                                  </span>
                                                          </td>
                                                          <td class="text-center">
                                                              <span
                                                                  class=" text-xs font-weight-bold">-</span>
                                                          </td>
                                                          <td class="text-center">
                                                            <span
                                                                class=" text-xs font-weight-bold">-</span>
                                                        </td>
                                                          <td class="text-center">
                                                              <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                        <td class="ps-4">
                                                            <p class="text-xs font-weight-bold mb-0">3</p>
                                                        </td>

                                                        <td class="">
                                                            <p class="text-xs font-weight-bold mb-0">
                                                              มหาวิทยาลัยนราธิวาสราชนครินทร์
                                                            </p>
                                                        </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-danger">Pending
                                                                </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span
                                                                class="text-xs font-weight-bold">-</span>
                                                        </td>
                                                        <td class="text-center">
                                                          <span
                                                              class="text-xs font-weight-bold">-</span>
                                                      </td>
                                                        <td class="text-center">
                                                            <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td class="ps-4">
                                                          <p class="text-xs font-weight-bold mb-0">4</p>
                                                      </td>

                                                      <td class="">
                                                          <p class="text-xs font-weight-bold mb-0">
                                                            มหาวิทยาลัยนเรศวร
                                                          </p>
                                                      </td>
                                                      <td class="text-center">
                                                          <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                      </td>
                                                      <td class="align-middle text-center text-sm">
                                                          <span class="badge badge-sm bg-gradient-danger">Pending
                                                              </span>
                                                      </td>
                                                      <td class="text-center">
                                                          <span
                                                              class="text-xs font-weight-bold">-</span>
                                                      </td>
                                                      <td class="text-center">
                                                        <span
                                                            class="ext-xs font-weight-bold">-</span>
                                                    </td>
                                                      <td class="text-center">
                                                          <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                    <td class="ps-4">
                                                        <p class="text-xs font-weight-bold mb-0">5</p>
                                                    </td>

                                                    <td class="">
                                                        <p class="text-xs font-weight-bold mb-0">
                                                          มหาวิทยาลัยมหาสารคาม
                                                        </p>
                                                    </td>
                                                    <td class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="badge badge-sm bg-gradient-danger">Pending
                                                            </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <span
                                                            class="text-xs font-weight-bold">-</span>
                                                    </td>
                                                    <td class="text-center">
                                                      <span
                                                          class="text-xs font-weight-bold">-</span>
                                                  </td>
                                                    <td class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                  <td class="ps-4">
                                                      <p class="text-xs font-weight-bold mb-0">6</p>
                                                  </td>

                                                  <td class="">
                                                      <p class="text-xs font-weight-bold mb-0">
                                                        มหาวิทยาลัยรามคำแหง
                                                      </p>
                                                  </td>
                                                  <td class="text-center">
                                                      <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                  </td>
                                                  <td class="align-middle text-center text-sm">
                                                      <span class="badge badge-sm bg-gradient-danger">Pending
                                                          </span>
                                                  </td>
                                                  <td class="text-center">
                                                      <span
                                                          class="text-xs font-weight-bold">-</span>
                                                  </td>
                                                  <td class="text-center">
                                                    <span
                                                        class="text-xs font-weight-bold">-</span>
                                                </td>
                                                  <td class="text-center">
                                                      <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                  </td>
                                              </tr>
                                              <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">7</p>
                                                </td>

                                                <td class="">
                                                    <p class="text-xs font-weight-bold mb-0">
                                                      มหาวิทยาลัยสุโขทัยธรรมาธิราช
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-danger">Pending
                                                        </span>
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-xs font-weight-bold">-</span>
                                                </td>
                                                <td class="text-center">
                                                  <span
                                                      class="text-xs font-weight-bold">-</span>
                                              </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                                </td>
                                            </tr>
                                            <tr>
                                              <td class="ps-4">
                                                  <p class="text-xs font-weight-bold mb-0">8</p>
                                              </td>

                                              <td class="">
                                                  <p class="text-xs font-weight-bold mb-0">
                                                    มหาวิทยาลัยอุบลราชธานี
                                                  </p>
                                              </td>
                                              <td class="text-center">
                                                  <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                              </td>
                                              <td class="align-middle text-center text-sm">
                                                  <span class="badge badge-sm bg-gradient-danger">Pending
                                                      </span>
                                              </td>
                                              <td class="text-center">
                                                  <span
                                                      class="text-xs font-weight-bold">-</span>
                                              </td>
                                              <td class="text-center">
                                                <span
                                                    class="text-xs font-weight-bold">-</span>
                                            </td>
                                              <td class="text-center">
                                                  <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">9</p>
                                            </td>

                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0">
                                                  สถาบันเทคโนโลยีปทุมวัน
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">ม.เดิม</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-danger">Pending
                                                    </span>
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="text-xs font-weight-bold">-</span>
                                            </td>
                                            <td class="text-center">
                                              <span
                                                  class="text-xs font-weight-bold">-</span>
                                          </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">เพิ่ม / แก้ไข</p>
                                            </td>
                                        </tr>
                                       

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                  <div class="col-md-12 mb-md-0 mb-4">
                                    <div class="card-header pb-2 pt-0 pl-0 ">
                                      <h6 class="mb-0">หน่วยงาน : ม.กำกับ 26 หน่วยงาน (10-35)</h6>
                                    </div>
                                    <div class="pl-4">
                                      .<br>.<br>.<br>
                                    </div>
                                     
                                  </div>
                                </div>
                       
                            </div>
                           
                        </div>
                        <div id="menu2" class=" tab-pane "><br>
                            <div class="pl-2"> MAY GONNA TRY TEST SOMETHING </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>
@endsection
