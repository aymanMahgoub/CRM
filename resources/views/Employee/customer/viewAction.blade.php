@extends('Employee.index')

@section('stylesheets')
@endsection
@section('content')
  <div class="col-md-12">
       <div class="panel panel-default">
             
              <div class="panel-body">
                     <table class="table table-bordered">
                            <thead>
                                   <th>Customer Name</th>
                                   <th>Action</th>
                                   <th>Note</th>
                                   <th>Options</th>
                            </thead>
                            @foreach($action as $action)
                            <tbody>
                            <tr>
                                   <td>{{$customer[0]->firstName}} {{$customer[0]->lastName}}</td>
                                   <td>{{$action->action}}</td>
                                   <td>{{$action->note}}</td>
                                   <td>
                        <a href="{{route('employee.action.edit',$action->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <form action="{{route('employee.action.delete',$action->id)}}" style="display: inline-block" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id" value="{{$action->id}}">
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> DELETE</button>
                          
                      </form>
                                  </td>  
                            </tr>
                            </tbody>
                            @endforeach
                     </table>
              </div>
              <div class="panel-footer">
                     <div class="text-center">
                
            </div>
              </div>
       </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  
</script>
@endsection