const loginForm = document.getElementById('loginForm');
var la = document.getElementById('LA');

loginForm.addEventListener('submit', submitForm);

function submitForm(e)
{
	e.preventDefault();

	const formData = new FormData(this);

	async() => {
	 const rawRes = await fetch('../../tnbcfundmeweb/public_html/assets/php/Model submit/login.php', {

			methode: 'post',
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			},
			body: formData
		}).then(function(responde) {

			if(responde.status == 200)
			{
				la.textContent = responde.text;
			}
		})

		const content = await rawRes.JSON();

		alert(content);

	}	
}






var newform = new FormData(new2);

var valueR = [...newform.entries()];

console.log(valueR[1][1]);

console.log(...document.forms);