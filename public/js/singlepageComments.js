const triger = document.getElementsByClassName("commentsTrgr");
const target = document.getElementsByClassName("profiledm2");

triger[0].addEventListener('click', ShowComments);

target[0].style.display = 'none';



function ShowComments()
{
    if(target[0].style.display == 'none')
    {
        target[0].style.display = 'block';
    }
    else
    {
        target[0].style.display = 'none';
    }
}