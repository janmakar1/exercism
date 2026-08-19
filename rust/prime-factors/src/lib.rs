pub fn factors(n: u64) -> Vec<u64> {
    let mut prime_factors = Vec::new();
    let mut nn = n;
    let mut potiential_factor = 2;
    while nn > 1 {
        if nn.is_multiple_of(potiential_factor) {
            prime_factors.push(potiential_factor);
            nn /= potiential_factor;
        } else {
            potiential_factor += 1;
        }
    }
    prime_factors
}
