<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h2>Edit Event</h2>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pj">Penanggung Jawab</label>
                <input type="text" name="pj" class="form-control"value="{{ $event->pj }}"  required>
            </div>
            <div class="form-group">
                <label for="konsultan">Konsultan</label>
                <input type="text" name="konsultan" class="form-control" value="{{ $event->konsultan }}" required>
            </div>
            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" name="title" class="form-control" value="{{ $event->title }}" required>
            </div>
            <div class="form-group">
                <label for="cp">Cp</label>
                <input type="text" name="cp" class="form-control" value="{{ $event->cp }}" required>
            </div>
            <div class="form-group">
                <label for="phone">No Hp</label>
                <input type="bigInteger" name="phone" class="form-control" value="{{ $event->phone }}" required>
            </div>
            <div class="form-group">
                <label for="kontakperson">No Hp</label>
                <input type="bigInteger" name="kontakperson" class="form-control" value="{{ $event->kontakperson }}" required>
            </div>
            <div class="form-group">
                <label for="address">address</label>
                <textarea name="address" class="form-control" value="{{ $event->address }}" required></textarea>
            </div>

            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" class="form-control" required> -
                <label for="time"></label>
                <input type="time" name="time" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="time">address</label>
                <select name="time" class="form-control" value="{{ $event->time }}" required>
                    <option value="07.00-09.00">07.00-09.00</option>
                    <option value="09.00-11.00">09.00-11.00</option>
                    <option value="11.00-13.00">11.00-13.00</option>
                    <option value="13.00-15.00">13.00-15.00</option>
                </select>
            </div>  
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control" value="{{ $event->start_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
</body>
</html>
  

