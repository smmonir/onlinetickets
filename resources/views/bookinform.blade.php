<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Form</title>
</head>
<body>
<h1>Book Tickets</h1>
<form action="http://localhost/onlinetickets/public/booktickets" method="post" enctype="multipart/form-data">
    @csrf
    <label for="date">Date</label>
    <input type="date" name="date"><br/><br/>
    <label for="from">From</label>
    <select name="from-station" id="from-station">
    @foreach($stations as $station)
       <option value="{{ $station->name }}">{{ $station->name }}</option>
    @endforeach
    </select><br/><br/>
    <label for="from">To</label>
    <select name="to-station" id="to-station">
    @foreach($stations as $station)
       <option value="{{ $station->name }}">{{ $station->name }}</option>
    @endforeach
    </select><br/><br/>
    <label for="from">Select Seat</label>
    <select name="seat-no" id="seat-no">
    @foreach($seats as $seat)
       <option value="{{ $seat->id }}">{{ $seat->name }}</option>
    @endforeach
    </select><br/><br/>
    <input type="submit" value="Submit">
</body>
</html>