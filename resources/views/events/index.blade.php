<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* CSS untuk mengatur tata letak */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: aqua;
        }
        .container {
            position: relative;
            display: flex; /* Menggunakan Flexbox */
            height: 100%; /* 100% tinggi viewport (tinggi layar) */
            justify-content: center;
            border: 2px solid;
            border-radius: 20px;
        }

        .left {
            flex: 3; /* Bagian kiri akan memenuhi 50% tinggi container */
            background-color: #FF00FF;
            padding: 20px;
        }

        .right {
            flex: 1; /* Bagian kanan akan memenuhi 50% tinggi container */
            background-color: #e0e0e0;
            padding: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <div id="calendar"></div>
                    <button type="button" onclick="window.location='../dashboard/index'">Dashboard</button>
                </div>
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
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,list',
                },
                events: '/api/events', // Endpoint untuk mendapatkan data acara dari server
                editable: true, // Memungkinkan mengubah acara dengan drag-and-drop
                selectable: true, // Memungki
        });
        calendar.render();
    });
    
    </script>
</body>
</html>