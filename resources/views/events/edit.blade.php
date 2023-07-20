
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
                <label for="nohp">No Hp</label>
                <input type="bigInteger" name="nohp" class="form-control" value="{{ $event->nohp }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" value="{{ $event->alamat }}" required></textarea>
            </div>
            <div class="form-group">
                <label for="time">Alamat</label>
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
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" class="form-control" value="{{ $event->end_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
