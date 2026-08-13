//
// This is only a SKELETON file for the 'Raindrops' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

export const convert = (num) => {
	const by3 = num % 3 == 0;
	const by5 = num % 5 == 0;
	const by7 = num % 7 == 0;
	if (!by3 && !by5 && !by7) {
		return num.toString();
	} else {
		let result = "";
		if (by3) {
			result += "Pling";
		}
		if (by5) {
			result += "Plang";
		}
		if (by7) {
			result += "Plong";
		}
		return result;
	}
};
