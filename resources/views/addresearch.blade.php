<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Research</title>
    <link rel="stylesheet" href="{{url('css/addresearch.css')}}">
    <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
</head>
<body>
@include('layout.dashboard')
<div class="container">
<div class="col2">
<div class="title1">Enter the Research details</div>
<form class="form1" action="{{route('addresearch')}}" method="POST">
    <div class="addform">
        <div class="addform1">
@csrf
        <div class="input">
        <label for="title">Enter Research Title:
            <textarea class="text" id="title" name="research_topic"></textarea></label>
        </div>
          <div id="inputField1" class="input"></div>
            <input onclick="addInputField()" type="button" value="+">
       <div class="input">
        <input class="submit" type="submit" name="submit">
        </div>
        </div>
        </div>
    </form>
</div>
</div>
</div>
</body>
  <script>
    var a=1;
      function addInputField() {
        if(a<=8){
        var inputField1 = document.getElementById("inputField1");
        var input1 = document.createElement("textarea");
        var label1 = document.createElement("label");
        var label2 = document.createElement("label");
        var input2 = document.createElement("textarea");
        label1.htmlFor="subtitle"+a;
        label1.innerText="Enter subtitle";
        input1.type = "text";
        input1.name = "subtitle"+a;
        input1.id = "subtitle"+a;
        input1.class="text";
        label2.htmlFor="description"+a;
        label2.innerText="Enter Description";
        input2.type="text";
        input2.name="description"+a;
        input2.id="description"+a;
        input2.class="text";
         inputField1.appendChild(label1);
        inputField1.appendChild(input1);
         inputField1.appendChild(label2);
        inputField1.appendChild(input2);
        a++;
        }
      }
    </script>
</html>








