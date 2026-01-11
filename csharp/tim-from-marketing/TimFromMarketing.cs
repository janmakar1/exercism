using System.Text;

static class Badge
{
    public static string Print(int? id, string name, string? department)
    {
        StringBuilder sb = new();
        if (id != null)
        {
            sb.Append($"[{id}] - ");
        }
        sb.Append(name);
        if (department == null)
        {
            sb.Append(" - OWNER");
        } else
        {
            sb.AppendFormat(" - {0}", department.ToUpper());
        }
        return sb.ToString();
    }
}
