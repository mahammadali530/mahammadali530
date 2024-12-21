
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div>
<style>
  section{
    margin-left:280px;
    margin-top:70px;
    
    width: 600px;
  }
</style>
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
               
                
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" id="updateButton" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
      <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button style="margin-top:40px; margin-left:800px; margin-bottom:-40px; background:#283593; font-family: bold" type="submit" class="btn btn-primary">
            Log out
        </button>
    </form>
      <section>
      <div class="col-md-12">
    <table style="margin-top:20px;"  class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="row">ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
           
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="col-md-5">
            @isset($students)
              @forelse ($students as $student)
                <tr class="table-info">
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->email }}</td>
                  <td>{{ $student->number }}</td>
                  <td>
                    <button class="btn btn-primary editbtn btn-sm" value="{{ $student->id }}">Update</button>
                     </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5">No students found.</td>
                </tr>
              @endforelse
            @endisset
          </tbody>
      </table>
     
    {{-- <a href="{{ route('forgot-password') }}" style="margin-top:10px; margin-left:10px; margin-bottom:40px; background:#f52948; font-family: bold" class="btn btn-success">
        Forgot Password
    </a> --}}
    </div>
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
           
            var _token = $('input[name="_token"]').val();
    
            $.ajax({
                url: '/edit-student/' + id,
                type: 'PUT',
                data: {
                    _token: _token,
                    name: name,
                    email: email,
                    number: number
                  
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
    
</div>