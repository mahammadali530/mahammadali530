
<style>
  section{
    border: 1.5px solid black;
    margin-top:50px;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">

<!-- Button trigger modal -->
<section>
  
<button style="margin-left:700px; margin-top:30px; " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Data
</button>


{{-- <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label for="file">Choose Excel File:</label>
      <input type="file" name="file" class="form-control" required>
  </div>
  <br>
  <button type="submit" class="btn btn-success">Import</button>
</form>

@if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif --}}

<div class="container">
  {{-- <h1 class="text-center pt-4">Date Range filter</h1>
  <hr> --}}
  <form action="/filter" method="GET">
    
    <div style="margin-left:200px; margin-top:20px;"class="col-md-3">
      <label  for="start_date"></label>
      <input type="date" id="start_date" name="start_date" value="">
    </div>
    <br>
    <div style="margin-left:370px; margin-top:-53px;" class="col-md-3">
      <label for="end_date"></label>
      <input type="date" id="end_date" name="end_date" value="">
    </div>
    <br>
    <div style="margin-left:540px; margin-top:-53px;" class="col-md-1-pt-4">
      <button type="submit" name="filter" class="btn btn-primary">FILTER</button>
      
      <button type="submit" name="export" value="1" class="btn btn-primary">Export</button>
    </div>
    <br>
   
    {{-- <a style="margin-left:800px; margin-top:-36px; " class="btn btn-primary" href="{{route('export')}}">export</a> --}}
  </form>
<br>
</hr>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          @csrf
          <div class="md-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" class="form-control" placeholder="enter yor name" name="name" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="text" class="form-control" placeholder="enter yor email" name="email" >
            
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">number</label>
              <input type="text"  class="form-control" placeholder="enter yor number" name="number" >
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="text"  class="form-control" placeholder="enter yor number" name="password" >
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">City</label>
              <input type="text"  class="form-control" placeholder="enter yor number" name="city" >
              
            </div>
          
          {{-- <button  class="btn btn-primary">Submit</button> --}}
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

{{-- 
edit modal --}}


<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateForm">
          @csrf
          <input type="hidden" id="edit_id">
          <div class="md-3">
            <label for="edit_name" class="form-label">Name</label>
            <input type="text" class="form-control" id="edit_name" placeholder="Enter your name" name="name">
          </div>
          <div class="mb-3">
            <label for="edit_email" class="form-label">Email</label>
            <input type="text" class="form-control" id="edit_email" placeholder="Enter your email" name="email">
          </div>
          <div class="mb-3">
              <label for="edit_number" class="form-label">Number</label>
              <input type="text" class="form-control" id="edit_number" placeholder="Enter your number" name="number">
          </div>
          <div class="mb-3">
            <label for="edit_number" class="form-label">Password</label>
            <input type="text" class="form-control" id="edit_password" placeholder="Enter your number" name="password">
        </div>
        <div class="mb-3">
          <label for="edit_number" class="form-label">City</label>
          <input type="text" class="form-control" id="edit_city" placeholder="Enter your number" name="city">
      </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="updateButton" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Table -->
<div>
  <table style="margin-top:20px;"  class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Password</th>
        <th>City</th>
        <th>Created At</th>
        
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr class="table-info">
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->number }}</td>
          <td>{{ $student->password }}</td>
          <td>{{ $student->city }}</td>
          <td>{{ $student->created_at }}</td>
          
          <td>
            <button class="btn btn-primary editbtn btn-sm" value="{{ $student->id }}">Update</button>
            <a class="btn btn-danger  btn-sm" href="delete/{{ $student->id }}" onclick="return confirm('Are you sure?');">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    
    $(document).on('click', '.editbtn', function () {
        var id = $(this).val();
        $.ajax({
            url: '/edit/' + id,
            type: 'GET',
            success: function (response) {
                $('#edit_id').val(response.data.id);
                $('#edit_name').val(response.data.name);
                $('#edit_email').val(response.data.email);
                $('#edit_number').val(response.data.number);
                $('#edit_password').val(response.data.password);
                $('#edit_city').val(response.data.city);
                $('#editmodal').modal('show');
            },
            error: function () {
                alert('Failed to fetch data');
                
            }
        });
    });

    
    $('#updateButton').click(function () {
        var id = $('#edit_id').val();
        var name = $('#edit_name').val();
        var email = $('#edit_email').val();
        var number = $('#edit_number').val();
        var password = $('#edit_password').val();
        var city = $('#edit_city').val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: '/edit-student/' + id,
            type: 'PUT',
            data: {
                _token: _token,
                name: name,
                email: email,
                number: number,
                password: password,
                city: city
            },
            success: function (response) {
                if (response.success) {
                   // alert('Data updated successfully');
                    location.reload(); 
                } else {
                   // alert('Failed to update data');
                }
            },
            error: function () {
                alert('An error occurred');
            }
        });
    });
  });
  
</script>
