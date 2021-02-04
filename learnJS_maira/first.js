console.log("Javascript ruinning");
var text = "start counting!!!";
var i=0;
while (i < 10) {
   text +="<br>count to: " + i;
   i++
}
document.getElementById('numbers').innerHTML = text;

text="";
for (i=0; i<10; i++) {
   text +="<br>count to: " + i;
}

function hide() {
  console.log("hide function called");
  document.getElementById('description').style.visibility='hidden';
}

function change_image(){
  console.log("The current image is: " + document.getElementById('logo').src);
  var imageSrc = document.getElementById('logo').src;
  imageSrc = imageSrc.replace('https://bwpjlp09.apps.lair.io/learnJS_maira/','');
  console.log("The current image stripped is: " + imageSrc);
  
  if (imageSrc =="ecma.png") {
      document.getElementById('logo').src="jay.png";
  } else
    {
      document.getElementById('logo').src="ecma.png";
    }
}