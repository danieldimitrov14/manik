function reverse(sentence){
    let reString = "";
    for(let i = sentence.length - 1; i >= 0; i--){
        reString += sentence[i]
        
    }
    console.log(reString)
}
reverse('It ’ s lights out and away we go')
