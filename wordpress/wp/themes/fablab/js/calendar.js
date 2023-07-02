jQuery("#calendar").fullCalendar({
  header: {
    left: "prev,next",
    right: "title",
  },
  timeFormat: "H:mm",
  //   defaultView: 'listMonth',

  defaultView: "list",

  views: {
    list: {
      duration: { days: 90 },
      listDayAltFormat: "dddd",
    },
  },
  locale: "nl-be",
  googleCalendarApiKey: "AIzaSyCwEczeiFHOzK2GWjwKHwQBq55aRRrSwfc",
  events: {
    googleCalendarId: "fablabsulier@gmail.com",
  },
});
