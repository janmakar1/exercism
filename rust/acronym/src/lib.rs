pub fn abbreviate(phrase: &str) -> String {
    let mut result = String::new();
    let phrase_string = String::from(phrase);
    let redacted = phrase_string.replace("_", " ").replace("-", " ");
    println!("{} -> {}", phrase_string, redacted);

    println!("------------------");
    

    for word in redacted.split_ascii_whitespace() {
        println!("{}", word);
        // println!("{}", phrase[0]);
        let (initial, rest_of_word) = word.split_at(1);
        println!("{}", initial);
        let big = initial.to_ascii_uppercase();
        result.push_str(&big);

        if rest_of_word.contains(char::is_uppercase) {
            println!("Found uppercase inside word!");
            let index_of_upper = rest_of_word.find(char::is_uppercase).unwrap();

            println!("at: {}", index_of_upper);
            if index_of_upper == 0 {
                continue;
            }

            // TODO: generalize it (for cases where there is more uppercases in one letter than two
            // ie. CommunistCommunistCommunistParty xD [use while loop maybe])
            let (before, after) = rest_of_word.split_at(index_of_upper);
            println!("{} : {}", before, after);
            let (initial2, _) = after.split_at(1);
            result.push_str(initial2);
        }
    }

    result
}
