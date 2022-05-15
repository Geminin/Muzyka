function spoiler(obj)
{
    if(obj.parentNode.parentNode.getElementsByTagName('div')[1].style.display != 'block')
    {
        obj.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'block';
        obj.innerText = '';
        obj.value = 'Ukryj';
    } else
    {
        obj.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
        obj.innerText = '';
        obj.value = 'Pokaż';
    }
}