  </section>

  <footer class="footer">
    <h5><a href="http://ffaneto.com"><i class="fab fa-github"></i> Fernando Augusto</a></h5>
  </footer>
</body>

<script>
  function ajax(str) {
  if (str == "") {
    document.getElementById("warning").innerHTML = "String vazia";
    return;
  } else {
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("warning").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
}
  </script>
</html>