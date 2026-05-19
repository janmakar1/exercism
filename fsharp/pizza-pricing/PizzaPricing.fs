module PizzaPricing

type Pizza =
    | Margherita
    | Caprese
    | Formaggio
    | ExtraSauce of Pizza
    | ExtraToppings of Pizza

let rec pizzaPrice (pizza: Pizza): int =
    match pizza with
    | Margherita -> 7
    | Caprese -> 9
    | Formaggio -> 10
    | ExtraSauce pizza -> pizzaPrice pizza + 1
    | ExtraToppings pizza -> pizzaPrice pizza + 2

let rec orderPriceAux(pizzas: Pizza list, accumulator: int): int =
    match pizzas with
    | [] -> accumulator
    | head::rest ->
        let accumulator = accumulator + pizzaPrice head
        orderPriceAux (rest, accumulator)

let rec orderPrice(pizzas: Pizza list): int =
    match pizzas with
    | [ pizza ] -> pizzaPrice pizza + 3
    | [ pizza; pizza2 ] -> pizzaPrice pizza + pizzaPrice pizza2 + 2
    | pizza::rest -> pizzaPrice pizza + orderPriceAux (rest, 0)
    | [] -> 0

