use std::collections::HashSet;

pub fn sum_of_multiples(limit: u32, factors: &[u32]) -> u32 {
    let mut set_multiples: HashSet::<u32> = HashSet::new();

    for factor in factors {
        let mut f: u32 = *factor;
        while f < limit {
            if *factor == 0 {
                break;
            }
            set_multiples.insert(f);
            f += factor;
        }
    }

    set_multiples.iter().sum()
}
