pub fn is_armstrong_number(num: u32) -> bool {
    if num == 0 {
        return true
    }

    let mut n = num;
    let amount_of_digits = num.ilog10() + 1;
    let mut sum = 0;
    for _ in 0..amount_of_digits {
        let digit = n % 10;
        n /= 10;
        sum += digit.pow(amount_of_digits);
    }
    sum == num
}
