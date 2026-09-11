use std::collections::HashMap;

#[derive(Debug, PartialEq, Eq)]
pub struct Dna {
    strand: String,
}

#[derive(Debug, PartialEq, Eq)]
pub struct Rna {
    strand: String,
}

impl Dna {
    pub fn new(dna: &str) -> Result<Dna, usize> {
        let mut dna_result = String::new();
        let dna_string = dna.to_string();
        for (idx, d) in dna_string.char_indices() {
            if d == 'G' || d == 'C' || d == 'T' || d == 'A' {
                dna_result.push(d);
            } else {
                return Err(idx);
            }
        }
        Ok(Dna{strand: dna_result})
    }

    pub fn into_rna(self) -> Rna {
        let hm = HashMap::from([
                               ('G', 'C'),
                               ('C', 'G'),
                               ('T', 'A'),
                               ('A', 'U')
        ]);
        let mut rna_string = String::new();
        for d in self.strand.chars() {
            let r = hm[&d];
            rna_string.push(r);
        }
        Rna::new(rna_string.as_str()).unwrap()
    }
}

impl Rna {
    pub fn new(rna: &str) -> Result<Rna, usize> {
        let mut rna_result = String::new();
        let rna_string = rna.to_string();
        for (idx, r) in rna_string.char_indices() {
            if r == 'G' || r == 'C' || r == 'U' || r == 'A' {
                rna_result.push(r);
                continue;
            } else {
                return Err(idx);
            }
        }
        Ok(Rna{strand: rna_result})
    }
}
