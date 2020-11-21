window.onload = function searchCountry() {
    var query = document.getElementById("country");
    var btnSearch = document.getElementById("lookup")

    btnSearch.addEventListener('click', function (e) {
        e.preventDefault();

         httpRequest = new XMLHttpRequest();

        var url = "world.php?country=" + query;
        httpRequest.onreadystatechange = countrySearch;
        httpRequest.open("GET", url, true);
        httpRequest.send();
    });
        function countrySearch() {
            if (httpRequest.readyState == XMLHttpRequest.DONE) {
                if (httpRequest.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
               this.responseText.replace(/<\/?[^>]+(>|$)/g, "");
                }
            }
        }
  
}





