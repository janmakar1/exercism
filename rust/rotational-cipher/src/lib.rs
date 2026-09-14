pub fn rotate(input: &str, key: u8) -> String {
    let mut result: String = String::new();

    for codepoint1 in input.as_bytes() {
        if codepoint1.is_ascii_alphabetic() {
            let offset = if codepoint1.is_ascii_lowercase() {
                b'a'
            } else {
                b'A'
            };
            let codepoint2: u8 = (codepoint1 - offset + key) % 26 + offset;
            let c_shifted: char = char::from(codepoint2);
            result.push(c_shifted);
        } else {
            let c = char::from(*codepoint1);
            result.push(c);
        }
    }

    result
}
