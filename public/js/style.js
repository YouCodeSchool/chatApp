const searchIcon = document.getElementById('searchIcon')
const searchbar = document.getElementById('searchbar')
const searchIconContainer = document.getElementById('searchIconContainer')
const chatMode = document.querySelectorAll('#chatMode')



// for (let i = 0; i < chatMode.length; i++) {
//     chatMode[i].addEventListener('click', ()=> {
//         location.assign('/?page=messages')
//         console.log(1);
//     })
    
// }
function redirectionMessages(id){
    let reciver_msg_id = id;
    document.cookie = 'reciver_msg_id=' + reciver_msg_id;

    location.assign('/?page=messages')

    
}



function redirect(e){
    let reciver_msg_id = e;
    document.cookie = 'reciver_msg_id=' + reciver_msg_id;

    location.assign('/?page=messages')
    // console.log(e);
}


searchIcon.addEventListener('click', ()=>{
    searchbar.classList.toggle('active')
    searchIconContainer.classList.toggle('active')
    if(searchbar.classList.contains('active') && searchIconContainer.classList.contains('active')){
        searchbar.style.display = 'flex'
        searchIconContainer.style.backgroundColor = 'black'
    }else{
        searchbar.style.display = 'none'
        searchIconContainer.style.backgroundColor = ''
    }

})




