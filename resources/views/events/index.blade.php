<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-3">
            <div id="calendar"></div>
            <button id="tombol">Tombol Saya</button>
            </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.8/index.global.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.8/index.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                themeSystem: 'bootstrap5',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay',
                },
                events: '/api/events', // Endpoint untuk mendapatkan data acara dari server
                editable: true, // Memungkinkan mengubah acara dengan drag-and-drop
                selectable: true, // Memungki
                // dateClick: function() {
                //   alert('a day has been clicked!');
                // }
                eventDrop: function(info) {
            // Fungsi yang akan dijalankan ketika acara di-drop
            // Lakukan AJAX request untuk memperbarui data acara di backend
            var event = info.event;
            var eventData = {
                title: event.title,
                start_date: event.start.toISOString(),
                end_date: (event.end === null) ? null : event.end.toISOString()
            };
            $.ajax({
                url: '/events' + event.id,
                type: 'PUT',
                data: eventData,
                success: function(response) {
                    console.log(response.message);
                }
            });
        },
        eventClick: function(info) {
            // Fungsi yang akan dijalankan ketika acara di-klik
            // Tambahkan kode untuk menampilkan informasi lebih lanjut tentang acara
            alert('Event clicked: ' + info.event.title);
        } ,
        //         eventClick: function(info) {
        //     // Aksi yang ingin Anda lakukan saat event di-klik
        //     var event = info.event;
        //     var title = event.title;

        //     var deleteButton = "<button class='btn btn-danger btn-sm' id='delete-event'>Delete</button>";
        //     event.setProp('popoverContent', title + '<br>' + deleteButton);
        //     event.setProp('popover', true);
        //     event.setProp('html', true);

        //     // Menambahkan event listener untuk tombol Delete
        //     document.getElementById('delete-event').addEventListener('click', function() {
        //         // Kirim permintaan DELETE ke backend untuk menghapus data acara dari database
        //         $.ajax({
        //             url: '/events/' + event.id,
        //             type: 'DELETE',
        //             success: function(response) {
        //                 // Berhasil dihapus, hapus event dari tampilan kalender
        //                 event.remove();
        //             },
        //             error: function() {
        //                 alert('Gagal menghapus acara.');
        //             }
        //         });
        //     });
        // }

        });
        calendar.render();

        var tombolEl = document.getElementById('tombol');
        tombolEl.addEventListener('click', function() {
        // Aksi yang ingin Anda lakukan ketika tombol di-klik
        alert('Tombol Saya telah di-klik!');
    });
    });

    </script>
</body>
</html>