return function(input)
	local prime_factors = {}
	local potential_factor = 2
	while input > 1 do
		if input % potential_factor == 0 then
			table.insert(prime_factors, potential_factor)
			input = input / potential_factor
		else
			potential_factor = potential_factor + 1
		end
	end
	return prime_factors
end
