<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>School HELP</title>
    <link rel="stylesheet" href="/extcss/style1.css">
    <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="/extcss/help.png" class="logo">
            <nav>
                <ul>
                    <li>
                        @auth
                        <a href="javascript:;" onclick="logout()">{{auth()->user()->name}} Logout !</a>
                        @else
                        <a href="{{route('login')}}">LOGIN</a>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h2>WELCOME TO </h2>
            <h1>School<b>HELP</b></h1>
            <p>a web-based school aid distribution and tutorial scheduling system <br> was designed to alleviate the
                negative impact of the coronavirus pandemic to schools and students. </p>
            <div>
                @auth
                    <a href="javascript:;" onclick="modalOffer()">
                        <button class="btn-custom" type="button"><span class="span-custom"></span>MY OFFERS</button>
                    </a>
                @else
                    <a href="{{route('register')}}">
                        <button class="btn-custom" type="button"><span class="span-custom"></span>REGISTER NOW</button>
                    </a>
                @endauth
                <button type="button" class="btn-custom" onclick="location.href='#Req'"><span
                        class="span-custom"></span>VIEW ALL REQUEST</button>
            </div>
        </div>
    </div>
    <section class="about">
        <div class="main">
            <img
                src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80">
            <div class="about-text">
                <h2>SchoolHelp</h2>
                <h5>Group Leader<span class="span-custom">& Designer</span></h5>
                <p>SchoolHELP is a web-based school aid distribution and tutorial scheduling system that was designed to
                    alleviate the negative impact of the coronavirus pandemic to schools and students. Registered
                    SchoolHELP administrators will be able to register schools and their respected School Administrators
                    into the system. Once registered, School Administrators will be able to submit two types of requests
                    into the system, they are: tutorial request and resource request.</p>
            </div>
        </div>
    </section>

    <div class="service">
        <div class="title">
            <h2 id="Req">Requests</h2>
        </div>
        <div class="d-flex justify-content-end mr-2">
            <select id="sort-by" class="form-control col-1">
                <option value="">Sort By</option>
                @forelse ($sort_list as $key => $item)
                    <option value="{{$key}}">{{$item}}</option>
                @empty
                @endforelse
            </select>
        </div>
        <div id="load-request">
            <div class="d-flex flex-wrap">
                @foreach ($request as $request)
                    @if ($request->status != "CLOSED")
                        <div class="col-md-3">
                            <div class="card">
                                <i class="far fa-user"></i>
                                <h6>{{$request->status}}</h6>
                                <p></p>
                                <h5>Request Type: {{$request->request_type}}</h5>
                                <h5>School Name: {{$request->school->school_name}}</h5>
                                <h5>City: {{$request->school->school_city}}</h5>
                                <h5>{{$request->created_at->translatedFormat('l, d F Y')}}</h5>
                                <div class="pra">
                                    <p></p>
                                    <p></p>
                                    <p style="text-align: center;">
                                        <a class="btton" href="javascript:;"
                                            onclick="showModal('{{route('welcome',['id' => $request->id])}}','Detail Request')">View
                                            Request</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modal-request" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-remarks" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">{{\App\Models\RequestData::find(session('offer'))->resource_type ?? ''}}</h5>
                    <button type="button" class="close" onclick="close_remarks()" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Remarks">Remarks</label>
                            <textarea placeholder="Remarks...." name="remarks" rows="7" class="form-control @error('remarks') is-invalid @enderror">{{old('remarks')}}</textarea>
                            @error('remarks')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @auth
    <div class="modal fade" id="modal-offer" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">My Offers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>SCHOOL NAME</th>
                                <th>OFFER DATE</th>
                                <th>TYPE</th>
                                <th>REMARKS</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse (auth()->user()->offer()->get() as $key => $item)
                                @php
                                    $list_status = [
                                        'pending' => 'warning',
                                        'accepted' => 'success',
                                        'declined' => 'secondary',
                                        'canceled' => 'danger'
                                    ];
                                @endphp
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->request_data->school->school_name}}</td>
                                    <td>{{$item->created_at->translatedFormat('l, d F Y H:i')}}</td>
                                    <td>{{$item->request_data->resource_type}}</td>
                                    <td>{{$item->remarks}}</td>
                                    <td><span class="text-capitalize text-white badge badge-{{$list_status[$item->status]}}">{{$item->status}}</span></td>
                                    <td>
                                        @if($item->status =="pending")
                                        <a href="javascript:;" onclick="confirm_form('{{route('welcome',['cancel' => $item->id])}}')" class="btn btn-sm btn-danger">Cancel</a>
                                        @else - @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endauth

    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="https://help.edu.my/">Help University</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>BIT216</b> Software Engineering Priciples
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        })

        function modalOffer() {
            $("#modal-offer").modal()
        }

        @if (session('error'))
            Swal.fire(
                'Ups !',
                '{{ session('error') }}',
                'error'
            )
        @elseif (session('success'))
            Swal.fire(
                'Success',
                '{{ session('success') }}',
                'success'
            )
        @enderror
        $(document).ready(() => {
            @if(!empty(session('offer')))
                $("#modal-remarks").modal()
            @endif
        })
        function showModal(url, title) {
            title = title || "Detail Data"
            $("#modal-request").modal()
            $("#modal-title").text(title)
            $.ajax({
                url: url,
                beforeSend: () => {
                    $("#modal-body").html("Sedang memuat...")
                },
                success: (data) => {
                    $("#modal-body").html(data)
                },
                error: () => {
                    $("#modal-body").html("Terjadi kesalahan...")
                }
            })
        }

        $("#sort-by").on('change', function () {
            if ($(this).val() != "") {
                load_request("{{route('welcome')}}?order_by=" + $(this).val())
            }
        })

        function load_request(url) {
            $.ajax({
                url: url,
                beforeSend: () => {
                    $("#load-request").html("Sedang memuat...")
                },
                success: (data) => {
                    // alert('ok')
                    $("#load-request").html(data)
                },
                error: () => {
                    $("#load-request").html("Terjadi kesalahan...")
                }
            })
        }

        function logout() {
            Swal.fire({
                title: "Logout From Account?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '{{ route('logout') }}',
                        method: "POST",
                        data: '_token=' + $('meta[name="csrf-token"]').attr('content'),
                        success: function (data) {
                            window.location.reload();
                        }
                    });
                }
            })
        }

        function close_remarks() {
            $.ajax({
                url:'{{route('welcome',['close_remarks'=> true])}}',
            })
        }

        function confirm_form(target) {
            Swal.fire({
                title: "Are you sure ?",
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: target,
                        method: "GET",
                        success: function(data) {
                            window.location.reload();
                        },
                        error: function(data) {
                            console.log(data);
                            Swal.fire({
                                type: 'error',
                                title: 'Oops!',
                                text: 'Something went wrong.'
                            })
                        }
                    });
                }
            })
        }

    </script>

</body>

</html>
