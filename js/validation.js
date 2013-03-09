$('#cl_edit').submit(function() {

var Error = false;

var caseid = $(#caseID).val();

if (caseid == ""){
	$("#caseID").after("A case ID is required");
	Error = true;
}

if (Error == true)
{
	return false;
}

})

