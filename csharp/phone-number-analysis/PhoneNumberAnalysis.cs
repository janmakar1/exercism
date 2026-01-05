public static class PhoneNumber
{
    public static (bool IsNewYork, bool IsFake, string LocalNumber) Analyze(string phoneNumber)
    {
        var Parts = phoneNumber.Split('-');
        if (Parts.Length == 3) {
            (string NewYorkPart, string FakePart, string LocalNumber) = (Parts[0], Parts[1], Parts[2]);
            bool IsNewYork = (NewYorkPart == "212");
            bool IsFake = (FakePart == "555");
            return (IsNewYork, IsFake, LocalNumber);
        } else {
            throw new Exception("Phone Number is constructed with wrong format.");
        }
    }

    public static bool IsFake((bool IsNewYork, bool IsFake, string LocalNumber) phoneNumberInfo)
    {
        return phoneNumberInfo.IsFake;
    }
}
