<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class='flow'> 
        <nav>
            <ul>
                <li><a href="/home">home</a></li>
                <li><a href="/create">create</a></li>
                <!-- <li><a href="/edit">edit/a></li> -->

                <li><a href="/showAll">show</a></li>
            

            </ul>
        </nav>
    </div>
   <h1>show data</h1>
   

   <table>
       <thead>
           <tr>
               <th>SNO.</th>
               <br>
               <th>FIRSTNAME</th>
               <br>
               <th>LASTNAME</th>
               <th colspan='2'>ACTION</th>

           </tr>
       </thead>
       @foreach($data as $Data)
       
       <TBody>
        <tr>
         <td>{{$Data->id}}</td>
           <td>{{$Data->firstname}}</td>
          <td>{{$Data->lastname}}</td>
          <td><a href="{{URL::to('data/' .$Data->id. '/edit')}}" >Edit</a></td>
          <td><a href="{{URL::to('data/' .$Data->id. '/delete')}}">Delete</a></td>
      </tr>
          


       </TBody>
       @endforeach
   </table>
    
</body>
</html>