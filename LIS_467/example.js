var content = fetch(url)
    //extract the json contents from the response
    .then((response) => response.json()) 
    //pass that json into the anonymous function as 'data'
    .then(function(data) {
        console.log(data);
        //...you can also return from this function
        return content
    })
