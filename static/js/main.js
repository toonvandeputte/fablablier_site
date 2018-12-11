$('#calendar').fullCalendar({
  header: {
    left: 'prev,next',
    right: 'title'
  },
  timeFormat: 'H:mm',
  defaultView: 'listWeek',
  locale: 'nl-be',
  googleCalendarApiKey: 'AIzaSyCwEczeiFHOzK2GWjwKHwQBq55aRRrSwfc',
  events: {
    googleCalendarId: 'fablabsulier@gmail.com'
  }
});
