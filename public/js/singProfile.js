const trigerP = document.getElementsByClassName("profileTrgr");
const targetP = document.getElementById("footer");

//const belowView = document.getElementById("belowView");

//const back = document.getElementById("back");

trigerP[0].addEventListener('click', ShowProfile);

//back.addEventListener('click', hideLeap);

//targetL.style.display = 'none';

//const h3 = document.createElement('h3');
//const b = document.createElement('b');

function ShowProfile()
{
    targetL.style.height = '90%';
    back.style.display = 'block';

    h3.textContent = 'Profile';
    belowView.appendChild(h3);


    b.textContent = 'Name: Thandoluhle';
    belowView.appendChild(b);

}

function hideLeap()
{
    targetL.style.height = '85px';
    back.style.display = 'none';

    h3.textContent = '';
    b.textContent = '';
}