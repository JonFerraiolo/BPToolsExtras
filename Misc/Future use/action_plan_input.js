/*******************************************************
 * action_plan_input.js
 * 
 * Dead code?
 * 
 * Copyright 2011, Karen Kang
 * All rights reserved
 * http://brandingpays.com, http://kang.com
 *******************************************************/

var highPriority;
function clickHighPriorityText() {
	if (highPriority.style.backgroundImage = "images/high_priority_sharp.jpg") {
		highPriority.style.backgroundImage = "images/high_priority_opaque.jpg";
	}
	else {
		highPriority.style.backgroundImage = "images/high_priority_sharp.jpg";
	}
}

function loadEventsAi() { 
	if (highPriority.addEventListener) {
		highPriority.addEventListener("click", clickHighPriorityText, false);
	}
	else if (highPriority.attachEvent) {
		highPriority.attachEvent("onclick", clickHighPriorityText);
	}
}
dojo.addOnLoad(function() {
	highPriority = document.getElementById("high_priority");
	loadEventsAi();
});

