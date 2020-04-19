
var now = new Date();
var year = now.getFullYear();
var month = now.getMonth();
var date = now.getDate();
var day = now.getDay();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds();
var analog;
		
if ((hours >0)&& (hours <= 11)){
                analog = "AM";
} else if (hours == 0) {
 hours= 12;
 analog = "AM";
} else if (hours == 12) {
 analog = "PM";
} else {
hours= hours-12;
 analog = "PM";
}
if (day==0)
{
	day="Sunday";
}
else if(day==1)
{
	day="Monday";
	}
	else if(day==2)
{
	day="Tuesday";
	}
	else if(day==3)
{
	day="Wednesday";
	}
	else if(day==4)
{
	day="Thursday";
	}
	else if(day==5)
{
	day="Friday";
	}
	else if(day==6)
{
	day="Saturday";
	}
		
if (month == 0)	
{ month = "January";
}
else if (month == 1)
{
	month = "February"
}
else if (month == 2)
{
	month = "March"
}
else if (month == 3)
{
	month = "April"
}
else if (month == 4)
{
	month = "May"
}
else if (month == 5)
{
	month = "Jun"
}
else if (month == 6)
{
	month = "July"
}
else if (month == 7)
{
	month = "August"
}
else if (month == 8)
{
	month = "September"
}
else if (month == 9)
{
	month = "Octomber"
}
else if (month == 10)
{
	month = "November"
}
else if (month == 11)
{
	month = "December"
}
document.write(" Copyright 2020 Tmbsbavan Designed by Vishal Joshi. All rights reserved. " +day + ", " + date + " " + (month) + ", " + year + " " + hours + ":" + minutes + " " + analog);
.