use std::collections::HashMap;

pub fn count(nucleotide: char, dna: &str) -> Result<usize, char> {
    let right_nucleotides = vec!['A', 'C', 'G', 'T'];
    
    if !right_nucleotides.contains(&nucleotide) {
        return Err('X');
    }

    let is_ok = dna.chars().all(|c: char| right_nucleotides.contains(&c));
    if is_ok == false {
        return Err('X');
    }
    Ok(dna.chars().filter(|c: &char| *c == nucleotide).count())
}

pub fn nucleotide_counts(dna: &str) -> Result<HashMap<char, usize>, char> {
    let right_nucleotides = vec!['A', 'C', 'G', 'T'];
    let mut result_hm: HashMap<char, usize> = HashMap::new();

    for nucleotide_to_check in right_nucleotides {
        let one_result = count(nucleotide_to_check, dna);
               
        if one_result.is_err() {
            let ch = one_result.err().unwrap();
            return Err(ch)
        } else {
            let num = one_result.unwrap();
            result_hm.insert(nucleotide_to_check, num);
        }
    }

    return Ok(result_hm)
}
