
const sendMessage = document.getElementById('sendMessage')
const messageForm = document.getElementById('messageForm')
const moveBack = document.getElementById('moveBack')
const messagesContainer = document.getElementById('messagesContainer')
const statusUser = document.getElementById('status')
const messageValue = document.getElementById('message')


moveBack.onclick = ()=> {
    location.assign('/?page=landingPage')
}

if(statusUser.innerHTML == 'Offline Now'){
    statusUser.style.color = '#FF5959'
}else if(statusUser.innerHTML = 'Active Now'){
    statusUser.style.color = ''
}

sendMessage.addEventListener('click', ()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data.trim())
            
        }
    }
    req.open('POST', 'http://localhost:8000/?page=sendMessage', true)
    let message = new FormData(messageForm)
    req.send(message)
    messageValue.value = ''
})
// sendMessage.addEventListener('click', ()=> {
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = ()=> {
//         if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//             let data = req.responseText
//             console.log(data.trim())
//             messagesContainer.innerHTML = data

//         }
//     }
//     req.open('GET', 'http://localhost:8000/?page=getMessages', true)
//     // let message = new FormData(messageForm)
//     req.send()
// })

setInterval(()=> {
    const req = new XMLHttpRequest()
    req.onreadystatechange = ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data.trim())
            messagesContainer.innerHTML = data

        }
    }
    req.open('GET', 'http://localhost:8000/?page=getMessages', true)
    // let message = new FormData(messageForm)
    req.send()
},1000)