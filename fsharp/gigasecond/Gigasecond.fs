module Gigasecond

open System

let add (beginDate: DateTime): DateTime  =
    let gs: float = 1_000_000_000.0
    beginDate.AddSeconds gs