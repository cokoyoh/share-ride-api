<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Lato:300|Noto+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        html, body {
            font-family: 'Lato', sans-serif;
            margin: 0;
        }
    </style>
    <title>Booking Confirmation</title>
</head>
<body>
    <div class="container"><br>
        <h6>Hello <strong>{{$user->name}}</strong></h6>
        <p>This is to confirm that Share Ride Inc has received your booking ride. Find the details below</p>
        <div class="container">
            <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        From - {{$ride->origin}}
                    </li>
                    <li class="list-group-item">
                        To - {{$ride->destination}}
                    </li>
                    <li class="list-group-item">
                        Capacity - {{$ride->capacity}}
                    </li>
                </ul>
            </div>
        </div>
        <br>
        <p>Thank you.</p> <br>
        <p>Regards</p>
        <p>ShareRide Inc Team.</p>
    </div>
</body>
</html>