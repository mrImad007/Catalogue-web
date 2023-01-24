const Search = document.querySelector('#idSearch');

Search.addEventListener('input' , filterList);
function filterList(){
    const Search = document.querySelector('#idSearch');
    const filter = Search.value.toLowerCase();
    const cardItems = document.querySelectorAll('#product');
    
    cardItems.forEach((item) =>{
        let text = item.childNodes[3].childNodes[1].innerHTML; 
       
        if(text.toLowerCase().includes(filter.toLowerCase())){
            item.style.display = '';
        }else{
            item.style.display = 'none';
        }
    })
}