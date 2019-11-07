 @extends('Template')

 @section('content')
 <!-- Page Content -->
  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" width="100%" cellpadding="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
      
     
        <tbody id="tbody">
        @foreach($categories as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>

          <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-warning float-right">Edit</a></td>
          <td><form method="post" action="{{route('category.destroy',$row->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger float-right" value="Delete">
          </form></td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
        
        

        

  @endsection
