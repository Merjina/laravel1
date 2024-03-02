<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student form</title>
  </head>
  <body>
    <h1 class="text-center">STUDENT</h1>
    <div class="container">
        <div class="row">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">delete Student</h5>
            <form action="{{ route('confirm-delete-student', ['id' => $student_models->id]) }}" method="POST" class="was-validated">
                @csrf
               <input type="hidden" name="id" value="{{ $student_models->id }}">
                <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student_models->name }}" required>
                <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            <div class="form-group mb-3">
                 <label for="email" class="form-label">Email</label>
                 <input type="email" class="form-control"id="email" name="email"value="{{ $student_models->email }}"required>
                 <div class="invalid-feedback">Please fill out this field.</div>
            </div>   
            <div class="form-group mb-3">
                 <label for="mobile"class="form-label" >mobile</label>
                 <input type="text" class="form-control" id="mobile"name="mobile"value="{{ $student_models->mobile }}"required>
                 <div class="invalid-feedback">Please fill out this field.</div>
            </div> 
            <div class="form-group mb-3">
                 <label for="address"class="form-label">address</label>
                 <input type="text" class="form-control" id="address"name="address"value="{{ $student_models->address}}"required>
                 <div class="invalid-feedback">Please fill out this field.</div>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          
            <a href="{{url('student-list')}}"class="btn btn-danger">back</a>
            
         </form>
         @if (session('success'))
        <div class="alert alert-success" role="alert">
         successfully updated
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger" role="alert">
        failed
        </div>
        @endif

         </div>
       

        </div>
        </div>
        </div>
    </div>
     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>

