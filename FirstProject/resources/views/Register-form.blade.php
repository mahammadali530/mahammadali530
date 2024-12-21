<div>
    
<style>
    section{
      border: 1.5px solid black;
      margin-top:50px;
      margin-left:300px;
      width: 500px;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <div class="container">
  
  <!-- Button trigger modal -->
  <section>
    
  {{-- <button style="margin-left:700px; margin-top:30px; " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Rajister
  </button> --}}
  {{-- <button style="margin-left:700px; margin-top:30px; " type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModall">
    Login
  </button> --}}
  
  
  
  
  <div class="col-md-13">
    {{-- <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form  method="POST" action="{{ route('login') }}">
                @csrf
               
                <div class="mb-3">
                  <label for="edit_email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="edit_email" placeholder="Enter your email" name="email">
                </div>
                
                <div class="mb-3">
                  <label for="edit_number" class="form-label">Password</label>
                  <input type="text" class="form-control" id="edit_password" placeholder="Enter your number" name="password">
              </div>
              
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" id="updateButton" class="btn btn-primary">Save Changes</button>
              <a href="{{ route('password.request') }}">Forgot Password?</a><br>

            </div>
          </div>
        </form>
        </div>
      </div>

  </div> --}}
  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
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
            
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button  class="btn btn-primary">Save changes</button>
        </div>
    </form>
      {{-- </div>
    </div>
  </div> --}}
  
  {{-- 
  edit modal --}}
  
  
  {{-- <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="updateButton" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
   --}}
  <!-- Table -->
  <div>
    {{-- <table style="margin-top:20px;"  class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Number</th>
          <th>Password</th>
         
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
</div>
  </section>
   --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
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
    
  </script> --}}
  </div>
