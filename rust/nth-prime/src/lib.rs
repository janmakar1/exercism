fn is_prime(n: u32) -> bool {
    if n == 0 || n == 1 {
        return false
    }
    for i in 2..=n.isqrt() {
        if n.is_multiple_of(i) {
            return false
        }
    }
    return true
}

pub fn nth(n: u32) -> u32 {
    let mut primes = Vec::new();
    let mut primes_found = 0;
    let mut i = 0;
    while primes_found <= n {
        if is_prime(i) {
            primes.push(i);
            primes_found += 1;
        }
        i += 1
    }
    primes[n as usize]
}
