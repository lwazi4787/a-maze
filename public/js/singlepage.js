
//select catgories var
var proj = document.getElementById('proj');
var game = document.getElementById('game');
var perso = document.getElementById('perso');
var home = document.getElementById('home');

//target var
var main2h = document.getElementById('main2h');

//click events
proj.addEventListener('click', projWork);
game.addEventListener('click', GameWork);
perso.addEventListener('click', persoWork);
home.addEventListener('click', homeWork);


var all = {
	...proj,
	...game,
	...perso,
	...home
};

//acction for click events
function projWork()
{
	//Change heading
	main2h.innerHTML = "Projests";
}
function GameWork()
{
	//Change heading
	main2h.innerHTML = "Games";
}
function persoWork()
{
	//Change heading
	main2h.innerHTML = "Personal";
}
function homeWork()
{
	//Change heading
	main2h.innerHTML = "Receant Posts";
}