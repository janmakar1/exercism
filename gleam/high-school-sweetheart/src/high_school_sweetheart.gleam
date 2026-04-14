import gleam/list
import gleam/string

pub fn first_letter(name: String) {
  name |> string.trim |> string.slice(0, 1)
}

pub fn initial(name: String) {
  name |> first_letter |> string.uppercase |> string.append(".")
}

pub fn initials(full_name: String) {
  full_name |> string.split(" ") |> list.map(initial) |> string.join(" ")
}

pub fn pair(full_name1: String, full_name2: String) {
  //      ******       ******
  //    **      **   **      **
  //  **         ** **         **
  // **            *            **
  // **                         **
  // **     X. X.  +  Y. Y.     **
  //  **                       **
  //    **                   **
  //      **               **
  //        **           **
  //          **       **
  //            **   **
  //              ***
  //               *

  let heart =
    "
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     X. X.  +  Y. Y.     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
"
  heart
  |> string.replace("X. X.", full_name1 |> initials)
  |> string.replace("Y. Y.", full_name2 |> initials)
}
