import React from 'react';
import ReactDOM from 'react-dom';
import FullCalendar from '@fullcalendar/react'
import dayGridPlugin from '@fullcalendar/daygrid'


function Example() {
    return (
        <FullCalendar
            defaultView="dayGridMonth"
            plugins={[ dayGridPlugin ]}
            />
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
