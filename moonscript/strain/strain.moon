{
  keep: (list, predicate) ->
    new_list = {}
    for _, element in pairs(list)
      if predicate(element) == true
        table.insert(new_list, element)
    new_list

  
  discard: (list, predicate) ->
    new_list = {}
    for _, element in pairs(list)
      if predicate(element) == false
        table.insert(new_list, element)
    new_list


}
