<html>
   
   <head>
      <title> Students Details</title>
   </head>
   
   <body>
<h3>Name: {{ $Name[0]->name }}</h3>
<h3>Roll No: {{ $RollNo[0]->roll_number }}</h3>



      <table border = "1">
         <tr>
            <td>Date</td>
            <td>Status</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->date }}</td>
            <td>{{ $user->status }}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>