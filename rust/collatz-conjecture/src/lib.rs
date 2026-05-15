pub fn collatz(n: u64) -> Option<u64> {
    if n == 0 {
        return None
    }

    let mut i = 0;
    let mut nn = n;
    while nn != 1 {
        if nn.is_multiple_of(2) {
            nn /= 2;
        } else {
            nn = 3 * nn + 1; 
        }
        i += 1;
    }
    Some(i)
}
