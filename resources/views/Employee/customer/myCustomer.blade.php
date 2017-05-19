@extends('Employee.index')

@section('stylesheets')
@endsection
@section('content')
  <div class="col-md-12">
       <div class="panel panel-default">
             
              <div class="panel-body">
                     <table class="table table-bordered">
                            <thead>
                                   <th>Customer First Name</th>
                                   <th>Customer last Name</th>
                                   <th>Phone Number</th>
                                   <th>Options</th>
                            </thead>
                            @for($i=0; $i<count($customers); $i++)
                            @foreach($customers[$i] as $customer)
                            <tbody>
                            <tr>
                                   <td>{{$customer->firstName}}</td>
                                   <td>{{$customer->lastName}}</td>
                                   <td>{{$customer->phoneNumber}}</td>
                                   <td>
                        <a href="{{route('employee.customer.edit',$customer->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <form action="{{route('employee.customer.delete',$customer->id)}}" style="display: inline-block" method="post">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="id" value="{{$customer->id}}">
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> DELETE</button>
                          
                      </form>
                        <a href="{{route('employee.customer.action',$customer->id)}}" class="btn btn-success btn-xs"><i ></i> Add Action</a>
                        <a href="{{route('employee.customer.viewAction',$customer->id)}}" class="btn btn-success btn-xs"><i ></i> View Action</a>
                                  </td>  
                            </tr>
                            </tbody>
                            @endforeach
                            @endfor
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