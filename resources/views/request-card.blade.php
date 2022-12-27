{{-- <div class="d-flex flex-wrap">
    @foreach ($request as $request)
        @if ($request->status != "CLOSED")
            <div class="col-md-3">
                <div class="card">
                    <i class="far fa-user"></i>
                    <h5>{{$request->request_type}}</h5>
                    <div class="pra">
                        <p>{{$request->description}}</p>
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
</div> --}}
