@extends('layouts.app_call')

@section('content')

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('layouts.aside')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            @include('layouts.navbar')
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <!--  Row 1 -->
            <div class="row">
                <div class="col-lg-10 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                            <div class="row">
                                <a href="{{url('/add-user')}}" class="btn btn-primary mb-4  col-4 col-md-1">
                                    <i class="ti ti-user-plus"></i>
                                </a>
                                @if (session('message'))
                                <p class="col-4 add-name" id="add-name">{{ session('message') }}</p>
                                @endif
                            </div>
                            <div class="table-responsive ">
                                <h6 class="card-title fw-semibold mb-4">User ใหม่</h6>
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Id</h6>
                                            </th>

                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">User</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Password</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">delete</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($data as $dataUser)
                                        <tr>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">{{ $i++ }}</h6>
                                            </td>

                                            <td class="border-bottom-0  row">
                                                <p class="mb-0 fw-normal">
                                                    {{$dataUser->username}} &nbsp; <span class="copy-btn"
                                                        data-text="{{$dataUser->username}}">คัดลอก</span></p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">{{$dataUser->password}} &nbsp;
                                                    <span class="copy-btn"
                                                        data-text="{{$dataUser->password}}">คัดลอก</span>
                                                </p>

                                            </td>
                                            <td class="border-bottom-0">
                                                <!--  <button type="button" class="btn btn-danger">delete</button> -->
                                                <a onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่ ! ');"
                                                    href="{{ url('/delete-user', $dataUser->id) }}"
                                                    class="btn btn-danger" data-toggle="tooltip"
                                                    data-original-title="delete user">
                                                    delete
                                                </a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                            <div style="margin-left: 1%" class="mt-3">

                                {!! $data->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="table-responsive mt-5 mb-3">
                <h6 class="card-title fw-semibold mb-4">User กำลังใช้งาน</h6>
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">User</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Password</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">สถานะ</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($data2 as $dataUser2)
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $i++ }}</h6>
                            </td>
                            <td class="border-bottom-0  row">
                                <p class="mb-0 fw-normal">
                                    {{$dataUser2->username}} </p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$dataUser2->password}}
                                </p>

                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal on-user">กำลังใช้งาน</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="margin-left: 1% mb-5">

                {!! $data2->links() !!}

            </div>
        </div>
    </div>
</div>
</div>
<script>
const copyBtns = document.querySelectorAll('.copy-btn');
copyBtns.forEach(copyBtn => {
    copyBtn.addEventListener('click', () => {
        const textToCopy = copyBtn.dataset.text;
        const tempInput = document.createElement('input');
        tempInput.value = textToCopy;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        alert('คัดลอกข้อความสำเร็จ');

        // ซ่อน Alert หลังจาก 3 วินาที (3000 มิลลิวินาที)
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.display = 'none';
            });

            console.log("5555");
        }, 3000);
    });
});
</script>
@endsection