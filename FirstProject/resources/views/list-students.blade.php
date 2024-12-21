{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div>
    <table class="table table-bordered">
     
        <tr class="table-dark">
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>number</td>
            <td>created_at</td>
            <td>Action</td>
            
        </tr>
        @foreach ($students as $student)
        <tr class="table-info">
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->number}}</td>
            <td>{{$student->created_at}}</td>
            <td><a class="btn btn-danger" href="{{'delete/'.$student->id}}" onclick="return confirm('Are you sure?');">Delete</a></td>
            <td><a class="btn btn-primary" href="{{'edit/'.$student->id}}" onclick="openEditModal({{ json_encode($student) }})">edit</a></td>
            
        </tr>
            
        @endforeach
    </table>

</div>


 --}}
 
