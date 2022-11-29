var skillsOutput = document.getElementById("selectedSkills");
var popup = document.getElementById("popup");
function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}

function checkOthers(){
    if(document.getElementById("other").checked){
        //console.log("checked");
        document.getElementById("otherText").style.display = "block";
    } else {
        document.getElementById("otherText").style.display = "none";
    }
}

function formSubmit() {
    // console.log(document.getElementById("other").value);
    console.log("form submitted");
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var major = document.getElementById("major").value;
    var skills = document.getElementById('skills').value;
    var suggestions = document.getElementById("suggestions");
    var nameOutput = document.getElementById("nameOutput");
    var emailOutput = document.getElementById("emailOutput");
    var majorOutput = document.getElementById("majorOutput");
    var skillsOutput = document.getElementById('skillsOutput');
    nameOutput.innerHTML = "Name: " + name;
    emailOutput.innerHTML = "Email: " + email;
    majorOutput.innerHTML = "Major: " + major;
    skillsOutput.innerHTML = "Skills: " + skills;

    suggestions.innerHTML = "Suggestions: ";
    // document.getElementById("selectedSkills").style.display = "block";
    skills.innerHTML =  "Skills: " + skillsOutput;
    // console.log(skillsOutput);
}

function showForm(){
    document.getElementById("form").style.display = "block";
    document.getElementById("formButton").style.display = "none";
}

// function addSkill(skill){

//     if(document.getElementById(skill).checked){
//         skillsOutput += skill + ", ";
//     }
//     else{
//         skillsOutput = skillsOutput.replace(skill + ", ", "");
//     }
//     // //only show the skills if there are any
//     // if(skillsOutput.innerHTML == "Skills: "){
//     //     document.getElementById("selectedSkills").style.display="none";
//     // }
//     // else{
//     //     document.getElementById("selectedSkills").style.display="block";
//     // }

//     //only update innerHTML when the form is submitted
    

// }