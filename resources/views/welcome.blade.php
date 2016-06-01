@extends("app")
@section("content")
<div class="container">

<div class="col-md-3">
</div>
<div class="col-md-6">
    <h3>Welcome to Don Bosco Makati Institute of Makati online portal!</h3>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action = "{{url('getsection')}}">
        {!! csrf_field() !!} 
    <table class="table table-responsive">
        <tr><td>Please type the student number and last name to inquire the section of the student.</td></tr>
        <tr><td><label>Student Number:</label> <input type = "text" name="studentid" id="studentid" class="form form-control"></td></tr>
        <tr><td><label>Last Name:</label>  <input type = "text" id="lastname" name="lastname" class="form form-control"></td></tr>
        <tr><td><input type="submit" value="Submit Query!!" class="form form-control btn btn-primary"></td></tr>
    </table>    
    </form>    
</div>    
</div>

@stop
