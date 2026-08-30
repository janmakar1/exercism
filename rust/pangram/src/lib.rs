use std::collections::BTreeMap;

/// Determine whether a sentence is a pangram.
pub fn is_pangram(sentence: &str) -> bool {
    let mut bt: BTreeMap<char, i32> = BTreeMap::new();

    for c in 'a'..='z' {
        bt.insert(c, 0);
    }

    let s = String::from(sentence);
    let lowered = s.to_ascii_lowercase();
    let chars = lowered.chars();

    for x in chars {
        bt.entry(x).and_modify(|curr| *curr += 1);
    }

    bt.values().all(|x| *x >= 1)
}
