
// const click = document.getElementById('click')
const form = document.getElementById('form')
const registerBtn = document.getElementById('registerBtn')
const moveBack = document.getElementById('moveBack')

moveBack.onclick = ()=> {
    location.assign('/?page=landingPage')
}

form.addEventListener('submit', (e)=>{
        e.preventDefault()
})



registerBtn.addEventListener('click',()=> {
    // console.log(1);
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)

            if(data.trim() == 'sucess'){
               location.href = 'http://localhost:8000/?page=login'

            }else {
                errorContainer.style.display = 'flex'
                errorText.textContent = data
            }
        }
    }
    req.open('POST', 'http://localhost:8000/?page=sendUsers', true)
    let messageForm = new FormData(form)
    req.send(messageForm)
})
