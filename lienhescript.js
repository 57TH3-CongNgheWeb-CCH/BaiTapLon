
var setTotalNumberOfWordCounter = "1000";
/*=============  This is a count of total number to be displayed ==================*/
  
/*This function first get the value of textarea. And read length of that textarea
charactor. then compare the value of set value.*/
  
function displayWordCounter(){
var getTextValue = document.frm.comment.value;  // Get input textarea value
var getTextLength = getTextValue.length;   // Get length of input textarea value
if(getTextLength > setTotalNumberOfWordCounter){     //compare this length with total count
        getTextValue = getTextValue.substring(0,setTotalNumberOfWordCounter);
        document.frm.comment.value =getTextValue;
        return false;
}
document.frm.totalWordLimit.value = (setTotalNumberOfWordCounter-getTextLength); 
}
