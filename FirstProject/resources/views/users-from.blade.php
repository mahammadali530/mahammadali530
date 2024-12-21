<div>
    <form action="adduser" method="post">
        @csrf
       <div class="input-wrepar">
        <input type="text"  placeholder="enter yor name" name="username">
        <span style="color:red">@error('username'){{$message}}@enderror</span>
            
        
       </div>
       <div class="input-wrepar">
        <input type="text" placeholder="enter yor email" name="email">
        <span style="color:red">@error('email'){{$message}}@enderror</span>
            
       </div>
       <div class="input-wrepar">
        <input type="text" placeholder="enter yor city" name="city">
        <span style="color:red">@error('city'){{$message}}@enderror</span>
            
       </div>
       <div class="input-wrepar">
        <button>Add user</button>
       </div>
    </form>
</div>
<style>
    form{
        /* margin: 20px; */
        /* padding: 20px; */
        /* border: 1px solid rgb(124, 52, 240); */
        /* background-color: #f8f9fa; */
        border-radius: 10px;
        margin-left: 500px;
        margin-top: 200px;  
    }
   input{
    border:  rgb(124, 52, 240) 2px solid;
    /* margin: 10px; */
    height: 30px;
}
.input-wrepar{
    margin: 10px;
    
}
button{
    border:  rgb(124, 52, 240) 2px solid;
    /* margin: 10px; */
    height: 30px;
    width: 170px;
}
</style>