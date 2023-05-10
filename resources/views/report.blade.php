
@extends('layouts.user_type.auth')

@section('content')
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">ยังไม่เปิดให้ใช้บริการ</h6>
            </div>
            
          </div>
        </div>
        
      </div>
      @include('layouts.footers.auth.footer')
    </div>
  </div>

@endsection

