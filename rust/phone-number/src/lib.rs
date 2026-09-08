pub fn number(user_number: &str) -> Option<String> {
    if user_number.len() <= 9 {
        return None
    }
    // here could be checked if amount of digits in user_number is > 11 - to "fail first"
    // and not check anymore 
    let s_user_number: String = user_number.to_string();

    if s_user_number.contains(char::is_alphabetic) {
        return None
    }

    let mut result = String::new();
    for ch in s_user_number.chars() {
        if ch.is_alphabetic() {
            println!("Found a letter!!! {}", ch);
            panic!("This should not be..");
        } else if ch.is_whitespace() {
            continue;
        } else if ch == '.' || ch == '-' || ch == '(' || ch == ')' || ch == '+'{
            continue;
        } else if ch.is_numeric() {
            result.push(ch);
        } else if ch.is_ascii_punctuation() {
            return None
        } else {
            println!("Found something else :| {}", ch);
        }
    }

    if result.len() > 11 {
        println!("Result is more than 11");
        return None
    }
    if result.len() == 11 {
        if result.starts_with("1") {
            let (_, number) = result.split_at(1);
            let number_s = number.to_string();
            return validate_number(number_s);
        }
        return None
    }
    if result.len() == 10 {
        return validate_number(result);
    }
    Some(result)
}

fn validate_number(number: String) -> Option<String> {
    let area_ctrl = number.chars().next().unwrap();
    if area_ctrl == '0' || area_ctrl == '1' {
        // Area Control number cannot be 0 or 1
        return None
    }
    let exchange_ctrl = number.chars().nth(3).unwrap();
    if exchange_ctrl == '0' || exchange_ctrl == '1' {
        // Exchange Control number cannot be 0 or 1
        return None
    }
    Some(number)
}

