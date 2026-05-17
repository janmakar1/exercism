import gleam/string

fn is_question(remark: String) -> Bool {
  string.ends_with(remark, "?")
}

fn is_shouting(remark: String) -> Bool {
  string.uppercase(remark) == remark
}

fn has_letters(remark: String) -> Bool {
  // string.
  True
}

fn is_white_space(remark: String) -> Bool {
  True
}

pub fn hey(remark: String) -> String {
  let remark2 = string.trim(remark)
  // case remark2 {
  //   r if string.ends_with(remark2, "?") -> "Sure."
  // }
  "No way!"
}
// 7:28
