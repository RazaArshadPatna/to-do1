<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>To Do App</title>
    <style>
     .box{
        width: 300px;
    min-height: 300px;
    background: white;
     }
     .input_box{
        border: none;
    box-shadow: 0px 0px 6px 0px;
    border-radius: 10px;
    width: 92%;
     }
     .add{
     border: none;
    box-shadow: 0px 0px 5px 0px red;
    border-radius: 10px;
    margin-left: -30px;
    background-color:red;
    color:white;
}
ul li{
    list-style:none;
    font-size:13px;
    padding:12px 8px 12px 0px;
    position:relative;
    list-style-image:
}

    </style>
  </head>
  <body style="    background: linear-gradient(45deg, #0014a582, #07f7e15c);">
    
  
    <div class="container" style="display:flex;justify-content:center;align-items:center;display:flex;min-height:80vh;">
        <div class="row">
            <div class="box p-3" style="border-radius:5px;">
                <h5>To Do List App</h5>
                <input type="text" id="input box" placeholder="Enter your text" class="input_box">
                <button class="add">Add</button>

                <ul id="list-container">
                    <li>Tast 1 </li>
                    <li>Tast 2 </li>
                    <li>Tast 3 </li>
                </ul>

            </div>
        </div>
    </div>
    


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>