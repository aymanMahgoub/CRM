@extends('Admin.index')

@section('stylesheets')
@endsection
@section('content')
 <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
        @foreach($customers as $customers)
            <form action="{{route('admin.customer.save',$customers->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">First Name</label>
                        <input type="text" name="firstName" value="{{$customers->firstName}}" class="form-control">
                         @if ($errors->has('firstName'))
                            <span class="help-block">
                            <strong>{{ $errors->first('firstName') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">Last Name</label>
                        <input type="text" name="lastName" value="{{$customers->lastName}}" class="form-control">
                         @if ($errors->has('lastName'))
                            <span class="help-block">
                            <strong>{{ $errors->first('lastName') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">Phone Number</label>
                        <input type="text" name="phoneNumber" value="{{$customers->phoneNumber}}" class="form-control">
                         @if ($errors->has('phoneNumber'))
                            <span class="help-block">
                            <strong>{{ $errors->first('phoneNumber') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>
               
                <div class="col-md-12">
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Save Customer</button>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection