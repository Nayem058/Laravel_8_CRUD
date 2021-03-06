<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body>
    <div style="padding: 30px;"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        Update Student
                    </div>                     
                    @if (session('success'))                      
                    <div class="alert alert-success alert-dismissible fade show"  role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @endif

                    <div class="card-body">
                        <form method="POST" action="{{ url('student/update/'.$student->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $student->name }}">
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Class</label>
                                <input type="text" name="class" class="form-control @error('name') is-invalid @enderror"
                                    id="exampleInputPassword1" value="{{ $student->class }}">
                                @error('class')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Roll</label>
                                <input type="text" name="roll" class="form-control @error('name') is-invalid @enderror"
                                    id="exampleInputPassword1" value="{{ $student->roll }}">
                                @error('roll')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-info">Update Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
