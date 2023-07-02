document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  let calendar = new FullCalendar.Calendar(calendarEl, {
    defaultView: "listWeek",
    // locale: "nl-be",
    // plugins: [googleCalendarPlugin],
    googleCalendarApiKey: "AIzaSyCwEczeiFHOzK2GWjwKHwQBq55aRRrSwfc",
    events: {
      googleCalendarId: "fablabsulier@gmail.com",
      className: "gcal-event", // an option!
    },
  });
  calendar.render();
});
