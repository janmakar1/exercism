class Badge {
    public String print(Integer id, String name, String department) {
        StringBuilder sb = new StringBuilder();
        if (id != null) {
            sb.append("[");
            sb.append(id);
            sb.append("]");
            sb.append(" - ");
        }
        sb.append(name);
        sb.append(" - ");

        if (department != null) {
            sb.append(department.toUpperCase());
        } else {
            sb.append("OWNER");
        }

        return sb.toString();
    }
}
