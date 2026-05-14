pub fn square(s: u32) -> u64 {
    2u64.pow(s-1)
}

pub fn total() -> u64 {
    let mut s = 0;
    for n in 1..=64 {
        s += square(n);
    }
    s
}
