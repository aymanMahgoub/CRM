@extends('Admin.index')

@section('stylesheets')
@endsection
@section('content')
  <div class="col-md-12">
       <div class="panel panel-default">
              <div class="panel-heading">
                     <a href="{{route('admin.customer.create')}}" class="btn btn-primary">Add Customer</a>
              </div>
              <div class="panel-body">
                     <table class="table table-bordered">
                            <thead>
                                   <th>Customer First Name</th>
                                   <th>Customer last Name</th>
                                   <th>Phone Number</th>
                                   <th>Options</th>
                            </thead>
                            @foreach($customers as $customer)
                            <tbody>
                            <tr>
                                   <td>{{$customer->firstName}}</td>
                                   <td>{{$customer->lastName}}</td>
                                   <td>{{$customer->phoneNumber}}</td>
                                   <td>
                       <a href="{{route('admin.customer.edit',$customer->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <form action="{{route('admin.customer.delete',$customer->id)}}" style="display: inline-block" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id" value="{{$customer->id}}">
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> DELETE</button>
                          
                      </form>
                      <a href="{{route('admin.customer.assign',$customer->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Assign to</a>
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