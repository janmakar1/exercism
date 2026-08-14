{
  commands: (value) ->
		result = {}
		cs = {
			[1]: "wink",
			[2]: "double blink",
			[4]: "close your eyes",
			[8]: "jump",
		}

		for i = 1, 15
			c = cs[i]
			if c == nil
				continue
			if value & i ~= 0
				table.insert(result, c)

		if value & 16 ~= 0
			real_result = {}
			for index, command in ipairs(result)
				table.insert(real_result, 1, command)
			return real_result
		return result
}
