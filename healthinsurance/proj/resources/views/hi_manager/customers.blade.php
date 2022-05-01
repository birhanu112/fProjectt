<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>hicustomer</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-4">
            <div class="card-header"></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-7">
                  <form action="">
                    <div class="input-group mb-3">
                      <input
                        type="text"
                        name="search"
                        required
                        class="form-control"
                        placeholder="Search data"
                      />
                      <button type="submit" class="btn btn-primary">
                        Search
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card mt-4">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>familymembers</th>
                    <th>kebele</th>
                    <th>action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($customers as $customer)
                  <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->firstname}}</td>
                    <td>{{ $customer->lastname}}</td>
                    <td>{{ $customer->familymembers}}</td>
                    <td>{{ $customer->kebele}}</td>
                    <td><a href="{{url('edit/'.$customer->id)}}"class="btn btn-success">edit</a></td>
                    <td><a href="{{url('delete/'.$customer->id)}}"class="btn btn-danger">delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
