let modal = document.getElementById("searchModal");
let myHtml = document.getElementsByClassName("problem_detail");

for (let i = 0; i < myHtml.length; i++) {
    myHtml.item(i).innerHTML=myHtml.item(i).innerHTML.replace(/<[^>]+>/g, '');
}

function toggleSearchModal() {
    modal.classList.toggle('hidden');
}

window.onclick = function(event) {
    if (event.target === modal) {
        toggleSearchModal();
    }
}

function showSuggesstion(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else if(str.length % 5 === 0){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
        if (this.status === 200) {
            console.log(this.responseText);
            let responses = JSON.parse(this.responseText);
            let parsedHtml ='';
            console.log(responses);
            responses.forEach(response => {
                parsedHtml += `<li class="py-3 hover:bg-slate-400"><a href="/question/${response.id}">${response.title}</a></li>`
            });
          document.getElementById("suggestion").innerHTML = parsedHtml;
        }
      };
      xmlhttp.open("GET","/search?q="+str,true);
      xmlhttp.send();
    }
  }