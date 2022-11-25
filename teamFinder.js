
function checkOthers(){
    if(document.getElementById("other").checked){
        //console.log("checked");
        document.getElementById("otherText").style.display = "block";
    } else {
        document.getElementById("otherText").style.display = "none";
    }
}

function formSubmit() {
    console.log(document.getElementById("other").value);
    console.log("form submitted");
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var major = document.getElementById("major").value;
    var year = document.getElementById("year").value;
    var suggestions = document.getElementById("suggestions");
    var nameOutput = document.getElementById("nameOutput");
    var emailOutput = document.getElementById("emailOutput");
    var majorOutput = document.getElementById("majorOutput");
    var yearOutput = document.getElementById("yearOutput");
    //get the values from 

    nameOutput.innerHTML = "Name: " + name;
    emailOutput.innerHTML = "Email: " + email;
    majorOutput.innerHTML = "Major: " + major;
    yearOutput.innerHTML = "Year: " + year;
    suggestions.innerHTML = "Suggestions: ";
    skillsOutput.innerHTML = "Skills: ";

}

function showForm(){
    document.getElementById("form").style.display = "block";
    document.getElementById("formButton").style.display = "none";
}