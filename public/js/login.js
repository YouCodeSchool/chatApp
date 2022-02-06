const loginForm = document.getElementById('loginForm')
const loginBtn = document.getElementById('loginBtn')
const errorContainer = document.getElementById('errorContainer')
const errorText = document.getElementById('errorText')







loginForm.addEventListener('submit', (e)=> {
    e.preventDefault()
})



loginBtn.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)

            if(data.trim() == 'sucess'){
                location.assign('/?page=landingPage')
            }else {
                errorContainer.style.display = 'flex'
                errorText.textContent = data
            }

        }
    }
    req.open('POST', 'http://localhost:8000/?page=getUsers', true)
    let Form = new FormData(loginForm)
    req.send(Form)

})

