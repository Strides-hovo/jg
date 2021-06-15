

async function postData( method, url, body = null ) {

    return response = await fetch(url, {
        method: method,
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(body)
    }).then(response => {
        return response.json();
    })

}

