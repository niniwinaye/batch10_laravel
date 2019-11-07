@extends('Template')

@section('content')

<!-- Page Header -->
  
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 class="mt-4">Category Form</h1>
              @if($errors->any())
            <div class="alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
              </ul>
            </div>
          @endif

          <!-- </div>
        </div>
      </div>
    </div> -->
  

  <!-- Main Content -->
  
        

          <!-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif -->
         
        <form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">

          @csrf
          @method('PUT')
          <div class="form-group">
          <label>Name:</label>
          <input type="name" name="name" class="form-control">
        </div>
        <input type="hidden" name="oldvalue" value="category">
       
        <div class="form-group">
          
          <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
        </div>
          

        </form>
       <!--  <table>
          <thead>
            <th>Name</th>
            <th>Action</th>
          </thead>
          <tbody>
           
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
</div>
  @endsection
