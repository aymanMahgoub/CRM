@extends('Admin.index')

@section('stylesheets')
@endsection
@section('content')
  <div class="col-md-12">
       <div class="panel panel-default">
              <div class="panel-heading">
                     <a href="{{route('admin.employee.create')}}" class="btn btn-primary">Add Employee</a>
              </div>
              <div class="panel-body">
                     <table class="table table-bordered">
                            <thead>
                                   <th>Employee Name</th>
                                   <th>E-mail</th>
                                   <th>Options</th>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                            <tr>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                                   
                                   <td>
                       <a href="{{route('admin.employee.edit',$user->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{route('admin.employee.delete',$user->id)}}" style="display: inline-block" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id" value="{{$user->id}}">
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