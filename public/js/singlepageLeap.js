const trigerL = document.getElementsByClassName("sendTrgr");
const targetL = document.getElementById("footer");

const belowView = document.getElementById("belowView");

const back = document.getElementById("back");

trigerL[0].addEventListener('click', ShowLeap);

back.addEventListener('click', hideLeap);

//targetL.style.display = 'none';

const h3 = document.createElement('h3');
const b = document.createElement('b');

function ShowLeap()
{
    targetL.style.height = '90%';
    back.style.display = 'block';

    h3.textContent = 'Send leaps';
    belowView.appendChild(h3);


    b.textContent = 'Account address: 109b718c662d5f1e7b2fadf4dd0b41ea1dc06f0e90ce25cb1907825d00bd7c86';
    belowView.appendChild(b);

}

function hideLeap()
{
    targetL.style.height = '85px';
    back.style.display = 'none';

    h3.textContent = '';
    b.textContent = '';
}