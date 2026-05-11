pub fn raindrops(n: u32) -> String {
    if n.is_multiple_of(3) || n.is_multiple_of(5) || n.is_multiple_of(7) {
        let mut result = String::from("");

        if n.is_multiple_of(3) {
            result += "Pling"
        }

        if n.is_multiple_of(5) {
            result += "Plang"
        }

        if n.is_multiple_of(7) {
            result += "Plong"
        }

        return result
    } else {
        return n.to_string()
    }
}
