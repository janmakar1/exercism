static class Appointment
{
    public static DateTime Schedule(string appointmentDateDescription)
        => DateTime.Parse(appointmentDateDescription);

    public static bool HasPassed(DateTime appointmentDate)
        => DateTime.Compare(appointmentDate, DateTime.Now) == -1 ? true : false;

    public static bool IsAfternoonAppointment(DateTime appointmentDate)
        => appointmentDate.Hour >= 12 && appointmentDate.Hour < 18;

    public static string Description(DateTime appointmentDate)
        => "You have an appointment on " + appointmentDate.ToString() + ".";

    public static DateTime AnniversaryDate()
        => new DateTime(year: DateTime.Now.Year, month: 9, day: 15);
}
