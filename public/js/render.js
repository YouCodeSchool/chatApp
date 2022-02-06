const stories = document.getElementById('stories')



// setInterval(()=>{
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = async ()=> {
//         if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//             let data = req.responseText
//             console.log(data)
//             stories.innerHTML = data

//         }
//     }
//     req.open('GET', 'http://localhost:8000/?page=stories', true)
//     // let Form = new FormData(loginForm)
//     req.send()
// },1000)