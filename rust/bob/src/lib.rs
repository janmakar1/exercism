pub fn reply(message: &str) -> &str {
    let is_question = message.trim().ends_with("?");
    let is_yelling = message == message.to_uppercase() 
        && message.find(|c: char| c.is_ascii_alphabetic()).is_some(); 
    let is_silence = message.trim() == "";
    if is_question && is_yelling {
        "Calm down, I know what I'm doing!"
    } else if is_question {
        "Sure."
    } else if is_yelling {
        "Whoa, chill out!"
    } else if is_silence {
        "Fine. Be that way!"
    } else {
        "Whatever."
    }
}
