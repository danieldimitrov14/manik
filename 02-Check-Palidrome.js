function reverse(sentence){
    //Declare a variable that will be use as a buffer tom store data
    let string = "";
    //Creating a for loop which will go through the string backwards
    for(let i = sentence.length - 1; i >= 0; i--){
        string += sentence[i]
        
    }
    if(string === sentence){
        console.log('Match!')
    }
    else{
        console.log('Mismatch!')
    }

}
reverse('radar')