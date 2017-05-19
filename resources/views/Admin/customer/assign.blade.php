@extends('Admin.index')

@section('stylesheets')
@endsection
@section('content')
  <div class="col-md-12">
      <div class="panel panel-default">
              <div class="panel-body">
                     <table class="table table-bordered">
                            <thead>
                                   <th>Employee Name</th>
                                   <th>Employee E-mail</th>
                                   <th>Assign</th>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                            <tr>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>
                       <a href="{{route('admin.customer.assignto',[$user->id,$customerId])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Assign</a>
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