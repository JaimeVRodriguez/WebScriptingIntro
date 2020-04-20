var arrayOne = [-1, -10, 0, 1, 5, 0, 9, 10, 27, 59, 75, -2]
var arrayTwo = [-10, 2, 5, 7, 17, 0, -6, -9, 0, 0, 24, -19]

function counter(arr) {
	var output = [0, 0, 0]

	for (i = 0; i < arr.length; i++) {
		if (arr[i] < 0) {
			output[0]++
		}
		else if (arr[i] == 0) {
			output[1]++
		}
		else {
			output[2]++
		}
	}
	document.getElementById("countOne").value = output.join("    |    ")

}



