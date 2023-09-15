const loginForm = document.getElementById('loginForm');
var la = document.getElementById('LA');

loginForm.addEventListener('submit', submitForm);

function submitForm(e)
{
	e.preventDefault();

	const formData = new FormData(this);

	fetch('../../tnbcfundmeweb/public_html/assets/php/Model submit/login.php', {

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
}