pub type Pizza {
  Margherita
  Caprese
  Formaggio
  ExtraSauce(Pizza)
  ExtraToppings(Pizza)
}

pub fn pizza_price(pizza: Pizza) -> Int {
  case pizza {
    Margherita -> 7
    Caprese -> 9
    Formaggio -> 10
    ExtraSauce(pizza) -> 1 + pizza_price(pizza)
    ExtraToppings(pizza) -> 2 + pizza_price(pizza)
  }
}

pub fn order_price(order: List(Pizza)) -> Int {
  case order {
    [pizza] -> pizza_price(pizza) + 3
    [pizza1, pizza2] -> pizza_price(pizza1) + pizza_price(pizza2) + 2
    [pizza, ..rest] -> pizza_price(pizza) + order_price_rec(rest, 0)
    [] -> 0
  }
}

fn order_price_rec(order: List(Pizza), accumulator: Int) -> Int {
  case order {
    [] -> accumulator
    [head, ..rest] -> {
      let accumulator = accumulator + pizza_price(head)
      order_price_rec(rest, accumulator)
    }
  }
}
