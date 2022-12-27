<div class="d-flex justify-content-between">
    <div>
        <label for="Description">Description</label>
        <p>{{$detail->description}}</p>
    </div>
    <div>
        <a href="{{route('school_admin_home',['cancel_request' => $detail->id])}}" class="btn btn-danger mb-2">Close Request</a>
    </div>
</div>
<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>REMARKS</th>
            <th>DATE POSTED</th>
            <th>STATUS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($offer as $key => $item)
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
                <td>{{$item->remarks}}</td>
                <td>{{$item->created_at->translatedFormat('l, d F Y H:i')}}</td>
                <td><span class="text-capitalize badge badge-{{$list_status[$item->status]}}">{{$item->status}}</span></td>
                <td>
                    @if($item->request_data->status != 'CLOSED')
                        <a href="javascript:;" onclick="modalReview('{{route('school_admin_home',['review-offer' => $item->id])}}')" class="btn btn-sm btn-primary">Review Offer</a>
                    @else - @endif
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>
