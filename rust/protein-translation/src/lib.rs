use std::collections::BTreeMap;

pub fn translate(rna: &str) -> Option<Vec<&str>> {
    let bt = BTreeMap::from([
                            ("AUG", "Methionine"),
                            ("UUU", "Phenylalanine"),
                            ("UUC", "Phenylalanine"),
                            ("UUA", "Leucine"),
                            ("UUG", "Leucine"),
                            ("UCU", "Serine"),
                            ("UCC", "Serine"),
                            ("UCA", "Serine"),
                            ("UCG", "Serine"),
                            ("UAU", "Tyrosine"),
                            ("UAC", "Tyrosine"),
                            ("UGU", "Cysteine"),
                            ("UGC", "Cysteine"),
                            ("UGG", "Tryptophan"),
                            ("UAA", "STOP"),
                            ("UAG", "STOP"),
                            ("UGA", "STOP")
    ]);

    let mut rna_mut = rna;
    let mut result: Vec<&str> = Vec::new();

    loop {
        let splits = rna_mut.split_at_checked(3);
        if splits == None {
            println!("Splits is none! :<");
            if rna_mut.len() == 0 {
                break;
            } else {
                return None;
            }
        }
        let (curr, rest) = splits.unwrap();

        if bt.contains_key(curr) {
            if bt[curr] == "STOP" {
                break;
            }
            result.push(bt[curr]);
        } else {
            return None;
        }

        if rest.len() == 0 {
            break;
        }

        rna_mut = rest;

    }

    return Some(result);
}
