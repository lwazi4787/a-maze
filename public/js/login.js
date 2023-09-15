var http = new XMLHttpRequest();

var login = document.getElementById('login');
const loginForm = document.getElementById('loginForm');

var la = document.getElementById('LA');

var vrmail;
var vrpwd;
let data;


loginForm.addEventListener('submit', loginf);


fetch('../../tnbcfundmeweb/public_html/assets/php/Model submit/login.php',)
.then((res) => {
	return res.text();
})
.then((data) => {
	if(data)
	{
		const mainSec = document.getElementById('main');
		const mainHdr = document.getElementById('header');

		mainSec.style.display = 'block';
		mainHdr.style.display = 'block';
		loginForm.style.display = 'none';
	}
})


function loginf(e)
{
	login.textContent = "...";

	let email = document.getElementById('lgemail').value;
	let pwd = document.getElementById('lgpwd').value;

	e.preventDefault();

	fetch('../../tnbcfundmeweb/public_html/assets/php/Model submit/login.php', {

		method: 'POST',
		header: {
					'Accept': 'application/json',
					'Content-Type': 'application/json'
				},
		body: JSON.stringify({'email': email, 'password': pwd})
	}).then((res) => res.text())
	.then((data) => {
		if(data == 1)
		{
			const mainSec = document.getElementById('main');
			const mainHdr = document.getElementById('header');

			mainSec.style.display = 'block';
			mainHdr.style.display = 'block';
			loginForm.style.display = 'none';
		}
		else
		{
			la.innerHTML = '<b>incorrect email or password</b>';
		}
	})

	//http.onreadystatechange = function(){

	//if(http.readyState == 4 && http.status == 200){
		//la.textContent = http.responseText;
	//}
	//}
}
//data = `email=${vrmail}&password=${vrpwd}`;
//const formData = new FormData(loginForm);
//http.open('post', '../../tnbcfundmeweb/public_html/assets/php/Model submit/login.php', true);
//http.send(formData);


fetch('../../tnbcfundmeweb/public_html/assets/php/View submit/posts.php')
.then((res) => res.text())
.then((data) => {
	console.log(data);
})




