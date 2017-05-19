@extends('Admin.index')

@section('stylesheets')
@endsection
@section('content')
 <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
        @foreach($users as $users)
            <form action="{{route('admin.employee.save',$users->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">Employee Name</label>
                        <input type="text" name="name" value="{{$users->name}}" class="form-control">
                         @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>
                
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">E-mail Address</label>
                        <input type="text" name="email" value="{{$users->email}}" class="form-control">
                         @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">Make Admin</label>
                        <select name ="rol" class="form-control">
                         <option value="employee" class="form-control">Employee</option>
                         <option value="admin" class="form-control" >Admin</option>
                        </select>
                    </div>
                </div>
               
                <div class="col-md-12">
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Save Employee</button>
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