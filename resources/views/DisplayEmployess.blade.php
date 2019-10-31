<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>DISLAY</title>
</head>
<body>
    <div class="container">
        <div class="row">
        </div>
        <div class="row mt-5">
            <div class="col-md-1">
            <a href="insert" class="btn btn-success" style="width:113%; height:11%">INSERT</a>
            </div>
            <div class="col-md-10">
                <div class="row btn btn-primary" style="width:100%; height:auto">
                    <p style="font-weight:600">BẢNG THỐNG KÊ</p>
                </div>

                <div class="row">
                <table class="table table-light">
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>EMAIL</td>
                        <td>CONTACT_NUMBER</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                    @foreach($emp2 as $emp3) 
                        <tr>
                            <td>{{$emp3->id}}</td>
                        
                            <td>{{$emp3->name}}</td>
                       
                            <td>{{$emp3->email}}</td>

                            <td>{{$emp3->contact_number}}</td>
                        
                            <td><a href="edit/{{$emp3->id}}" class="btn btn-success">EDIT</a></td>
                            <td><a href="delete/{{$emp3->id}}" class="btn btn-success">DELETE</a></td>
                        </tr>
                    @endforeach
                </table>


                </div>
                
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>