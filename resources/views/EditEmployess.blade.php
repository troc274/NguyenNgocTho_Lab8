<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>EDIT</title>
</head>
<body>
<div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form role="form" action='../save/{{$emp->id}}' method='post'>
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" name='name' value={{$emp->name}} id="exampleFormControlInput1" placeholder="Please name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name='email' value={{$emp->email}} id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contact_number</label>
                        <input type="number" class="form-control" name='contact_number' value={{$emp->contact_number}} id="exampleFormControlInput1" placeholder="Please number">
                    </div>
                    <input type="submit" name="save" class="btn btn-info" value='UPDATE'/>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>
</html>