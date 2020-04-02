var rotation = 0;
  var pass = "";
  var xyz1 = "";
  var xyz2 = "*";




jQuery.fn.rotate = function(degrees) {
    $(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
};


function rotateright() {
   rotation += 30;
   angle2 += 30;
   if(angle2 < 0)
   {
	   angle2 = parseInt(angle2) + 360;
   }
   else if(angle2 >= 360)
   {
	   angle2 = angle2-360;
   }
    $('#navtoggle').rotate(rotation);
}

function rotateleft() {
   rotation -= 30;
   angle2-= 30;
   if(angle2 < 0)
   {
	   angle2 =angle2+360;
   }
   else if(angle2 > 360)
   {
	   angle2 = angle2-360;
   }
       $('#navtoggle').rotate(rotation);
	
}

  
  
  $(function () {
    var parent = $("#sh");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});
  
$(function () {
    var parent = $("#sh1");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});

$(function () {
    var parent = $("#sh2");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});

$(function () {
    var parent = $("#sh3");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});




function getRotationDegrees(obj) {
    var matrix = obj.css("-webkit-transform") ||
    obj.css("-moz-transform")    ||
    obj.css("-ms-transform")     ||
    obj.css("-o-transform")      ||
    obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.atan2(b, a) * (180/Math.PI);
		angle = angle.toFixed(0);
    } else { var angle = 0; }
    return (angle < 0) ? parseInt(angle) + 360 : angle;
}


function outerorbit() {
  
   
   angle3 = getRotationDegrees($('#o1'));
  
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o1').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				
				}
				
	angle3 = getRotationDegrees($('#o2'));
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o2').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#o3'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o3').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
		
				
	angle3 = getRotationDegrees($('#o4'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o4').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#o5'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o5').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#o6'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o6').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#o7'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o7').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#o8'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o8').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#o9'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o9').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#o10'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o10').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#o11'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o11').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#o12'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('o12').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
}


function middleorbit() {
   angle3 = getRotationDegrees($('#m1'));
  
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m1').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#m2'));
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m2').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#m3'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m3').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
		
				
	angle3 = getRotationDegrees($('#m4'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m4').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#m5'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m5').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#m6'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m6').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#m7'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m7').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#m8'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m8').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#m9'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m9').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#m10'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m10').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#m11'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m11').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#m12'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('m12').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
	
				
}





function innerorbit() {
   angle3 = getRotationDegrees($('#i1'));
  
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i1').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#i2'));
	
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i2').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#i3'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i3').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
		
				
	angle3 = getRotationDegrees($('#i4'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i4').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#i5'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i5').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
	angle3 = getRotationDegrees($('#i6'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i6').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#i7'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i7').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#i8'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i8').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#i9'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i9').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
	angle3 = getRotationDegrees($('#i10'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i10').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#i11'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i11').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
				
				
				
	angle3 = getRotationDegrees($('#i12'));
	 
				if(angle2==angle3)
				{
					abc1 = document.getElementById('i12').getAttribute('value');
					pass = pass + abc1;
					xyz1 = xyz1 + xyz2;
					document.getElementById("password1").value = pass;
					document.getElementById("password").value = xyz1;
				}
	
}				


$(document).ready(function(){
angle2 = getRotationDegrees($('#color'));
});