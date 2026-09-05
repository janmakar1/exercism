/// Determines whether the supplied string is a valid ISBN number
pub fn is_valid_isbn(isbn: &str) -> bool {
    let isbns = String::from(isbn);
    let s = isbns.replace("-", "");

    if s.len() != 10 { 
        return false
    }

    let (only_numbers, _) = s.split_at(9);
    let are_only_numbers = only_numbers.chars().all(|c: char| c.is_ascii_digit());
    if !are_only_numbers {
        return false
    }
    //or should I extract also second part in line 12., as possible_x and check it instead
    if !s.ends_with(|c: char| c.is_ascii_digit() || c == 'X') {
        return false
    }

    let mut sum = 0;
    let mut multiplier = 10;
    for ch in s.chars() {
        let d: u32 = if ch == 'X' {
            10
        } else {
            ch.to_digit(10).unwrap()
        };

        sum += multiplier * d;
        multiplier -= 1;
    }

    sum % 11 == 0
}
