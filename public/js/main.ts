const inputKey = document.getElementById('keyInput');
const inputValue = document.getElementById('valueInput');

const inputsub = document.getElementById('submit');
var showvl = document.getElementById('target');



inputsub.addEventListener('click', saveshow);

function saveshow() 
{
	const key: string = inputKey.value;
	const rvalue: HTMLElement = inputValue.value;
	//showvl.innerHTML = "go";


	if (key && rvalue) {

		localStorage.setItem(key, rvalue);
		location.reload();
		//showvl.innerHTML = "go";

		//alert(localStorage.key(1));
	}
}

for (var i = 0;  i <= localStorage.length; i++) 
{
	var x = localStorage.key(i);
	var y = localStorage.getItem(x);

	showvl.innerHTML = `{<br>${x} : ${y}<br>}`;
}
//alert(`${x} : ${y}`);