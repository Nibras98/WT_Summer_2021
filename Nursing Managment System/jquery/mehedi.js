function validateForm()
{
    $(document).ready(function(){
        $("#btn1").click(function(){
          $("p").append(" <b>Appended text</b>.");
        });
      
        $("#btn2").click(function(){
          $("ol").append("<li>"+$("#txt").val()+"</li>");
        });
      });
}
