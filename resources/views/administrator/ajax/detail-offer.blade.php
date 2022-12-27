<table class="table bordered table-striped">
    <tr>
        <th>Date</th>
        <td>{{$detail->created_at->translatedFormat('l, d F Y H:i')}}</td>
    </tr>
    <tr>
        <th>Volunteer Name</th>
        <td>{{$detail->user->name}}</td>
    </tr>
    <tr>
        <th>Age</th>
        <td>{{ date('Y') - \Carbon\Carbon::parse($detail->user->date_of_birth)->format('Y')}}</td>
    </tr>
    <tr>
        <th>Occupation</th>
        <td>{{ $detail->user->occupation }}</td>
    </tr>
    <tr>
        <th>Remarks</th>
        <td>{{ $detail->remarks }}</td>
    </tr>
    <tr>
        <td colspan="2" class="text-center">
            @if($detail->status == 'pending')
                <a href="{{route('school_admin_home',['offer_id' => $detail->id,'offer_status' => 'accepted'])}}" class="btn btn-success">Accept</a>
                <a href="{{route('school_admin_home',['offer_id' => $detail->id,'offer_status' => 'declined'])}}" class="btn btn-danger">Decline</a>
            @endif
        </td>
    </tr>
</table>
