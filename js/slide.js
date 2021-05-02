
function render(data){
	var html= test.html;
}









$(document).ready(function(){
 var comment = [
 	{"name":"Sandaruwan Jayasundara" "email": "Sandaruwan.jay98@mail.com" "body":"this is omment1"}
];

	for (var i=0; i<comment.length;i++)
{
		render(comment[i]);
}
$('#addcomment').click(function(){

	var addObj ={
		"Name": $('#name').val(),
		"Email": $('#Email').val(),
		"comment":$('#comment').val()
	};

	comment.push(addObj);
	render(addObj);
		$('#name').val('');
		$('#Email').val('');
		$('#comment').val('');
});

});