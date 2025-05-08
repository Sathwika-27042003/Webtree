<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   
   <body>
      <table border = "1">
         <tr>
            <td>Roll No</td>
            <td>Name</td>
            <td>Present/Absent</td>
            <td>Make Present</td>
            <td>Make Absent</td>
            <td>Student Details</td>
            

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->roll_number }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->status }}</td>
            <td><a href = 'present/{{ $user->roll_number}}'>Present</a></td>
            <td><a href = 'absent/{{ $user->roll_number }}'>Absent</a></td>
            <td><a href = 'student/{{ $user->roll_number }}'>Check</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>