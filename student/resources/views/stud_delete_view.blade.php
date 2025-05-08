<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->roll_number }}</td>
            <td>{{ $user->name }}</td>
            <td><a href = 'delete/{{ $user->roll_number }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>