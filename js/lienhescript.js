var setTotalNumberOfWordCounter = "1000";//so ky tu toi da hien thi


/*function lay gia tri tu textarea, doc do dai ky tu nhap vao textarea , so sanh voi so ky tu toi da duoc thiet lap.*/

function displayWordCounter(){
var getTextValue = document.frm.comment.value;  // lay gia tri nhap vao textarea
var getTextLength = getTextValue.length;   // lay do dai cua textarea
if(getTextLength > setTotalNumberOfWordCounter){//so sanh do dai voi so ky tu toi da duoc thiet lap, neu lon hon thi khong cho nhap
	getTextValue = getTextValue.substring(0,setTotalNumberOfWordCounter);
	document.frm.comment.value =getTextValue;
	return false;
}
document.frm.totalWordLimit.value = (setTotalNumberOfWordCounter-getTextLength);//dat lai gia tri so ky tu con lai
}
