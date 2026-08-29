use std::collections::BTreeSet;

pub fn check(candidate: &str) -> bool {
    let mut bt: BTreeSet<char> = BTreeSet::new();

    let mut s = String::from(candidate);
    let lowered = s.to_ascii_lowercase();
    let mut chars = lowered.chars();

    for c in chars {
        if c.is_alphabetic() {
            if !bt.contains(&c) {
                bt.insert(c);
            } else {
                return false;
            }
        }
    }

    return true
}
