const logoutContainer = document.getElementById('logoutContainer')


document.addEventListener("contextmenu", (e)=> {
    e.preventDefault()
    // console.log('button is clicked');

    let x = e.offsetX, y = e.offsetY;
    logoutContainer.style.left = `${x}px`
    logoutContainer.style.top = `${y}px`
    logoutContainer.style.visibility = 'visible'
})
document.addEventListener("click", ()=> {
    logoutContainer.style.visibility = 'hidden'
})
logoutContainer.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data);

            if(data.trim() == 'success'){
                location.href = 'http://localhost:8000/?page=login'
                // console.log(1);
            }
        }
    }
    req.open('POST', 'http://localhost:8000/?page=logout', true)
    req.send()

    // window.location.reload();
})