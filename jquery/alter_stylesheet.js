// the CSS file is chosen  according to the positive or negative value of this variable
var plusmin = 1;

$(document).ready(function() {
  // when click on the element with id="vaxlaBtn"
  $('#vaxlaBtn').click(function(){
    plusmin *= -1;        // change the polarity of "plusmin" var
    var stl = plusmin>0 ? 'css/style.css' : 'css/markdown.css';     // sets the css file, according to plusmin

    // change the css file of the tag with id="stl" and rel="stylesheet"
    $('#stl[rel=stylesheet]').attr('href', stl);
		console.log('alter the stylesheet...');
  });


//////

$(document).keypress(function(tangentslump) {
    //if (e.which === 119 && !$(document.activeElement).is(":input,[contenteditable]")) {
	if (tangentslump.which === 118) {
	plusmin *= -1;        // change the polarity of "plusmin" var
    var stl = plusmin>0 ? 'css/style.css' : 'css/markdown.css';     // sets the css file, according to plusmin
    
	// change the css file of the tag with id="stl" and rel="stylesheet"
    $('#stl[rel=stylesheet]').attr('href', stl);
	console.log('alter stylesheet on key press...');
	//outputLista("tangentslump");
    }
});


//////

});
