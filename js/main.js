	
///// I created this counter of visits by using localStorage it will increase everytime even if I refresh web  page
if (localStorage.pagecount)
 {
 localStorage.pagecount=Number(localStorage.pagecount) +1;
 }
else
 {
 localStorage.pagecount=1;
 }
document.write("Visits on this website: " + localStorage.pagecount + " time(s).");



 