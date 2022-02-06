const search = document.querySelector('#search')
const formsearchbar = document.getElementById('searchbar')

search.onkeyup = ()=> {
    let searchValue = search.value
    const req = new XMLHttpRequest()
    req.onreadystatechange = async ()=> {
        if(req.readyState === XMLHttpRequest.DONE && req.status === 200){
            let data = req.responseText
            console.log(data)
            // stories.innerHTML = data
            
        }
    }
    
        req.open('POST', 'http://localhost:8000/?page=search', true)
        // req.setRequestHeader("Content-text", "application/x-www-form-urlencoded")
        let formDAta = new FormData(formsearchbar)
        req.send(formDAta)
    // console.log(search.value);
}