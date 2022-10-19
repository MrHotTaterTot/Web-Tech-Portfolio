const form = document.getElementById("addingPost");
const error = document.getElementById("Errors");
const reset = document.getElementById("reset");
const title = document.getElementById("Title");
const entry = document.getElementById("Entry");


window.addEventListener("load", function(event){
	reset.addEventListener("click", clear);
	title.value = "";
	entry.value = "";
});

function clear(){
	title.value = "";
	entry.value = "";
}
function check(event){
	if(entry.value === "" || title.value === "") {
		event.preventDefault();
		title.style.border = "4px solid red";
		entry.style.border = "4px solid red";
		error.innerText = "Fields can not be empty!!!";
		error.style.border = "thick solid red";
		error.style.backgroundColor = "#ffcccb";
		error.style.marginLeft = "25%";
		error.style.marginRight = "25%";
		error.style.marginBottom = "5%";
		error.style.fontWeight = "bold";
		error.style.fontSize = "130%"
		return false;
	}
	return true;
}



