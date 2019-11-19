document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('new_cald');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid'],
        themeSystem: 'bootstrap',
        defaultView: 'dayGridMonth',
        height: 400,
        editable: true,
        startEditable: true,

        header: {
            left: 'prev',
            center: 'title',
            right: 'next ',

        },
        events: [{
                title: "Homepage Web Development",
                start: '2019-09-30',
                description: 'This is a cool event',
                borderColor: "transparent",
                backgroundColor: "transparent"
            },
            {
                title: "Inner pages Design",
                start: '2019-09-10',
                description: 'This is a cool event',
                borderColor: "transparent",
                backgroundColor: "transparent"
            }
            // more events ...
        ],

        eventClick: function(info) {
            alert('Task: ' + info.event.title);

        }
    });

    calendar.render();
});