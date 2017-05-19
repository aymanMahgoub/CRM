@extends('Employee.index')

@section('stylesheets')
@endsection
@section('content')
 <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
        @foreach($action as $action)
            <form action="{{route('employee.action.save',$action->id)}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" > customer Frist Name </label>
                        <input type="text" name="name" value="{{$customer[0]->firstName}} {{$customer[0]->lastName}}" class="form-control" readonly="true">
                         @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif
                    </div>
                </div>
                
                 
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="#">Action</label>
                        <select name ="action" class="form-control">
                         <option value="call" class="form-control">Call</option>
                         <option value="visit" class="form-control" >Visit</option>
                         <option value="follow up" class="form-control" >Follow Up</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="#" > Add Notes </label>
                        <textarea type="textarea" name="note" value="add results of action " class="form-control">{{$action->note}}</textarea>
                    </div>
                </div>
               
                <div class="col-md-12">
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Save Action</button>
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