{
  factors: (number) ->
		prime_factors = {}
		potential_factor = 2
		while number > 1
			if number % potential_factor == 0
				table.insert(prime_factors, potential_factor)
				number /= potential_factor
			else
				potential_factor += 1
		return prime_factors
}
