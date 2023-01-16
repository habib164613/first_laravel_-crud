<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dream</title>
  </head>
  <body>
    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 mb-0>
                            Phone Book details
                        </h4>
                    </div>
                    <div class="card-body">
                       <table class="table table-bordered table-striped table-hover">
                          <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{$contact->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$contact->name}}</td>
                            </tr>
                            <tr>
                                <th>phone</th>
                                <td>{{$contact->phone}}</td>
                            </tr>
                            <tr>
                                <th>create At</th>
                                <td>{{$contact->created_at->toDayDateTimeString()}}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{$contact->created_at== $contact->updated_at? 'Not Upateded Yet': $contact->updated_at->toDayDateTimeString()}}</td>
                            </tr>
                          </tbody>

                       </table>
                       <a href="{{route('phone-book.index')}}"><button class="btn btn-success btn-sm">Back</button></a>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



