<h1>users</h1>


<table class="table table-bordered">

 <tr>

   <th>Id</th>

   <th>Name</th>

   <th>Email</th>


 </tr>

 @foreach ($users as $key => $user)

  <tr>

    
  <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>

    <td>{{ $user->email }}</td>
 
  </tr>

 @endforeach

</table>

 

