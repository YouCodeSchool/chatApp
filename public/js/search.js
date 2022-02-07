const search = document.querySelector('#search')
const formsearchbar = document.getElementById('searchbar')
const container = document.getElementById('container')

search.onkeyup = ()=> {
    let searchValue = search.value
    if(searchValue != ''){
        search.classList.add('active')
    }else {
        search.classList.remove('active')
    }
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            // console.log(data)
            container.innerHTML = data
            
        }
    }
    
        req.open('POST', 'http://localhost:8000/?page=search', true)
        // req.setRequestHeader("Content-text", "application/x-www-form-urlencoded")
        let formDAta = new FormData(formsearchbar)
        req.send(formDAta)
    // console.log(search.value);
}

// setInterval(() => {
//     const req = new XMLHttpRequest()
//     req.onreadystatechange = async ()=> {
//         if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
//             let data = req.responseText
//             // console.log(data)
//             if(!search.classList.contains('active')){
//                 container.innerHTML = data
//             }
            
//         }
//     }

//     req.open('POST', 'http://localhost:8000/?page=userData', true)
//     req.send()
// },500)