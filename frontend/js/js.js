$(document).ready(function(){
    $("#add").click(function(){
      $("#addstudent").toggle('fast');
    });
  });

  $(document).ready(function(){
    $("#close").click(function(){
      $("#addstudent").toggle('fast');
    });
  });
  
  $(document).ready(function(){
    $("#sched").click(function(){
      $("#schedule").toggle('fast');
    });
  });
  
  $(document).ready(function(){
    $("#sched").click(function(){
      $("#sched").addClass("active");;
    });
  });

  $(document).ready(function(){
    $("#closed").click(function(){
      $("#sched").removeClass("active");;
    });
  });

  $(document).ready(function(){
    $("#closed").click(function(){
      $("#schedule").toggle('fast');
    });
  });

  $(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $("#date-sort").on("input", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
