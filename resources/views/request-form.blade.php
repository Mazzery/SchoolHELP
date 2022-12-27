    <div class="form-group">
        <label for="Description">Description</label>
        <span class="form-control">{{$data->description}}</span>
    </div>
@if($data->request_type == "tutorial")
    <div class="form-group">
        <label for="Student Level">Student Level</label>
        <span class="form-control">{{$data->student_level}}</span>
    </div>
    <div class="form-group">
        <label for="Number Of Student">Number Of Student</label>
        <span class="form-control">{{$data->number_of_student}}</span>
    </div>
    <div class="form-group">
        <label for="Proposed Date">Proposed Date</label>
        <span class="form-control">{{$data->proposed_date}}</span>
    </div>
@endif
@if($data->request_type == "resource")
<div class="form-group">
        <label for="Resource Type">Resource Type</label>
        <span class="form-control">{{$data->resource_type}}</span>
    </div>
    <div class="form-group">
        <label for="Resource Number">Resource Number</label>
        <span class="form-control">{{$data->resource_number}}</span>
    </div>
@endif
    <div class="form-group">
        <label for="Number Of Student">Date Posted</label>
        <span class="form-control">{{$data->created_at->translatedFormat('l, d F Y H:i')}}</span>
    </div>
    {{-- tutorial  --}}
    {{-- description,proposed date,student level, number of student --}}
    {{-- resource  --}}
    {{-- description,resource_type,resource_number,proposed_Date --}}
<div class="form-group">
    <a href="{{route('welcome',['offer' => $data->id])}}" class="btn btn-primary btn-block">Make Offer</a>
</div>
