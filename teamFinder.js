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
var userName, email, major, skills;
function formSubmit() {
    // console.log(document.getElementById("other").value);
    // console.log("form submitted");
    userName = document.getElementById("name").value;
    email = document.getElementById("email").value;
    major = document.getElementById("major").value;
    skills = document.getElementById('skills').value;
    var suggestions = document.getElementById("suggestions");
    var nameOutput = document.getElementById("nameOutput");
    var emailOutput = document.getElementById("emailOutput");
    var majorOutput = document.getElementById("majorOutput");
    var skillsOutput = document.getElementById('skillsOutput');
    nameOutput.innerHTML = userName;
    emailOutput.innerHTML = email;
    majorOutput.innerHTML = major;
    skillsOutput.innerHTML = skills;

    suggestions.innerHTML = "Suggestions: ";
    // document.getElementById("selectedSkills").style.display = "block";
    skills.innerHTML =  "Skills: " + skillsOutput;
    // console.log(skillsOutput);

        var data = [{name: userName, email: email, major: major, skills: skills}, {name: "Claudia", email: "cbrown@scu.edu", major: "Computer Science and Engineering", skills: "python, javascript, and HTML/CSS"}];

        var content = "";

        $.each(data, function(i){

            content += `Name : ${data[i].name} Email: ${data[i].email} Major: ${data[i].major}  Skills:  ${data[i].skills}<br/>`;

        });

        $('#info').html(content);
}

function showForm(){
    document.getElementById("form").style.display = "block";
    document.getElementById("formButton").style.display = "none";
}

// Test for Old Idea
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
// var name1 =  prompt('Name: ');
// var Email =  prompt('Email: ');
// var Major =  prompt('Major: ');
// var Skills =  prompt('Skills: ');









