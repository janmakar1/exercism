local Darts = {}

function Darts.score(x, y)
	local hypot = math.sqrt(x ^ 2 + y ^ 2)
	if hypot <= 1 then
		return 10
	elseif hypot <= 5 then
		return 5
	elseif hypot <= 10 then
		return 1
	else
		return 0
	end
end

return Darts
