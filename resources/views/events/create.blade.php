
    <div class="container">
        <h2>Create New Event</h2>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pj">Penanggung Jawab</label>
                <input type="text" name="pj" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="konsultan">Konsultan</label>
                <input type="text" name="konsultan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nohp">No Hp</label>
                <input type="bigInteger" name="nohp" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>  
            <div class="form-group">
                <label for="time">Alamat</label>
                <select name="time" class="form-control" required>
                    <option value="07.00-09.00">07.00-09.00</option>
                    <option value="09.00-11.00">09.00-11.00</option>
                    <option value="11.00-13.00">11.00-13.00</option>
                    <option value="13.00-15.00">13.00-15.00</option>
                </select>
            </div>  
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>

