pub fn is_leap_year(year: u64) -> bool {
    year.is_multiple_of(400) || (year % 100 != 0 && year % 4 == 0)
}
