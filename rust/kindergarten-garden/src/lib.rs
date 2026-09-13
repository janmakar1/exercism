use std::collections::BTreeMap;

static CHILDREN: &[&str] = 
&["Alice", "Bob", "Charlie", "David", "Eve", "Fred", "Ginny", "Harriet", "Ileana", 
         "Joseph", "Kincaid", "Larry"];

pub fn plants(diagram: &str, student: &str) -> Vec<&'static str> {
    let plants = BTreeMap::from([('G', "grass"),
                                 ('C', "clover"), 
                                 ('R', "radishes"),
                                 ('V', "violets")
    ]);

    let mut result_chars = Vec::new();
    let mut result = Vec::new();
    let sdiagram = diagram.to_string();
    let verses: Vec<_> = sdiagram.split_ascii_whitespace().collect();
    let idx_option = CHILDREN.iter().position(|item: &&str| *item == student);
    let idx = idx_option.unwrap();
    // println!("{} is {}th", student, idx);

    let mut v = 0;
    let wanted = (idx * 2, idx * 2 + 1);
    for verse in verses { //TODO: something like verses.indices? i mean to make v, and i  
        for (i, letter) in verse.char_indices() {
            // println!("{} {} {}", v, i, letter);
            if i == wanted.0|| i == wanted.1 {
                result_chars.push(letter);
            }
        }
        v += 1;
    }

    // TODO: result_chars.map
    // println!("{:?}", result_chars);
    for ch in result_chars {
        result.push(plants[&ch])
    }

    return result;
}
