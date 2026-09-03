/// Return the Hamming distance between the strings,
/// or None if the lengths are mismatched.
pub fn hamming_distance(s1: &str, s2: &str) -> Option<usize> {
    if s1.len() != s2.len() {
        None
    } else {
        let mut distance = 0;

        let mut zipped = s1.chars().zip(s2.chars());

        while let curr = zipped.next() {
            if curr == None {
                break;
            }
            let (first, second) = curr.unwrap();
            if first != second {
                distance += 1;
            }
        }

        Some(distance)
    }
}

