<script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 50);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById('content').style.display='block';
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>


