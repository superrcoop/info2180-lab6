function search(){
            var xhttp= new XMLHttpRequest();
            var search=document.getElementById("search").value;
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status== 200){
                    if(search){
                       document.getElementById("result").innerHTML=this.responseText;
                    }else{
                       alert("Error: You must enter a word");
                    }
                }
            }
            xhttp.open("GET","request.php?q="+search,true);
            xhttp.send();
        }