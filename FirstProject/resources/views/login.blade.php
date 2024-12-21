
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
     section{
      border: 8px solid rgb(36, 2, 38);
      margin-top:80px;
      margin-left:350px;
      width: 500px;
    }
    
</style>
<section>
<div class="container">
<div class="col-md-12">
  <div class="modal-body">
    @error('email')
    {{-- <div class="text-danger">{{ $message }}</div> --}}
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
@enderror
    @error('password')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
    @enderror
      <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-3">
              <label for="edit_email" class="form-label">Email</label>
              <input type="email" class="form-control" id="edit_email" placeholder="Enter your email" name="email" value="{{ old('email') }}" required>
            
          </div>

          <div class="mb-3">
              <label for="edit_password" class="form-label">Password</label>
              <input type="password" class="form-control" id="edit_password" placeholder="Enter your password" name="password" required>
             
          </div>

          <a href="{{ route('password.request') }}" class="btn btn-danger">Forgot Password</a><br>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
  </form>
</div>
</div>
</section>
