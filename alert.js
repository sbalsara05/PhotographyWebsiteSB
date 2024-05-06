function getVals(){
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    const resultParagraph = document.getElementById("response");
    resultParagraph.innerHTML= "Hi, " + name + "You dont looks" + age;
}

