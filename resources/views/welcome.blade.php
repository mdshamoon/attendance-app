<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/cardStyle.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       

       
    </head>
    <body>
        <div id="app">
        
            {{-- <example-component></example-component> --}}
           <main-block :students='student'></main-block>
          
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" ></script>


    
    <script>
        var students=@json($student);
        students.forEach(element => {
            element.present=false;
        });
        
        console.log(students);
 
        const app = new Vue({
        el: '#app',

        data:{
            student: students
        },

       
      
       
        
        });
        
         </script>
   

</html>
