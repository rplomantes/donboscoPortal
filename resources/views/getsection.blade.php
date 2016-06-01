@extends("app")
@section("content")
<div class="col-md-3">
</div>
<div class="col-md-6">
@if(count($studentname)>0)
@foreach($studentname as $studname)
<table class="table table-striped"> 
    <tr><td>Student No :</td><td>{{$studname->idno}}</td></tr>
    <tr><td>Name :</td><td>{{$studname->lastname}}, {{$studname->firstname}} {{$studname->middlename}}</td></tr>
    @if($studname->status == 2)
    <tr><td>Level :</td><td>{{$studname->level}} {{$studname->strand}}</td></tr>
    <tr><td>Section :</td><td>
            @if($studname->section == "")
            <i>Section not yet assigned.  Please call registrar</i>
            @else
            <span style="font-weight: bold; color: red">{{$studname->section}}</span>
            @endif
            </td></tr>
    @else
    <tr><td colspan="2">The status of this student is not yet officially enrolled. <br> Please see accounting for payment</td></tr>
    @endif
</table>
@endforeach
@else
<div class="alert alert-danger">
    <h3>Record Not Found!!</h3>
    <p>probably this student not currently enrolled. <br> You may try again. Please press back button</p>
</div>    
@endif
<a href="{{url('/')}}" class="btn btn-primary">Back</a>
</div>

@stop

